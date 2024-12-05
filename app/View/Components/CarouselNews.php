<?php

namespace App\View\Components;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\View\Component;

class CarouselNews extends Component
{
    public array $carouselItems;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        try {
            $response = Http::retry(3, 1000) // Coba ulang hingga 3 kali dengan jeda 1 detik
                ->timeout(15) // Waktu tunggu maksimal untuk respons
                ->get('https://event-api.dicoding.dev/events');

            if ($response->successful()) {
                $this->carouselItems = collect($response->json('listEvents'))
                    ->filter(function ($event) {
                        $eventDate = Carbon::parse($event['beginTime']);
                        return $eventDate->isToday() || $eventDate->isFuture();
                    })
                    ->map(fn($event) => [
                        'image' => $event['imageLogo'],
                        'title' => $event['name'],
                        'organizer' => $event['ownerName'],
                        'link' => $event['link'],
                    ])
                    ->toArray();
            } else {
                // Gunakan data fallback jika respons gagal
                Log::warning('Carousel API request failed with status code: ' . $response->status());
                $this->carouselItems = $this->fallbackItems();
            }
        } catch (\Exception $e) {
            // Log error untuk debugging
            Log::error('CarouselNews component error: ' . $e->getMessage());
            $this->carouselItems = $this->fallbackItems();
        }
    }

    /**
     * Data fallback jika API tidak dapat diakses atau respons gagal.
     */
    private function fallbackItems(): array
    {
        return [
            [
                'image' => 'https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/event/dos-offline_roadshow_1_coding_camp_2025_powered_by_dbs_foundation_goes_to_bandung_logo_181124100353.png',
                'title' => 'Belajar Dicoding',
                'organizer' => 'Dicoding Indonesia',
                'link' => 'https://www.dicoding.com/',
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.carousel-news');
    }
}
