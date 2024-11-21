<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class CarouselNews extends Component
{
    public array $carouselItems;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $response = Http::get('https://event-api.dicoding.dev/events');

        if ($response->successful()) {
            $this->carouselItems = collect($response->json('listEvents'))
                ->map(fn ($event) => [
                    'image' => $event['imageLogo'],
                    'title' => $event['name'],
                    'organizer' => $event['ownerName'],
                    'link' => $event['link'],
                ])
                ->toArray();
        } else {
            $this->carouselItems = [
                [
                    'image' => 'https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/event/dos-offline_roadshow_1_coding_camp_2025_powered_by_dbs_foundation_goes_to_bandung_logo_181124100353.png',
                    'title' => 'Belajar Dicoding',
                    'organizer' => 'Dicoding Indonesia',
                    'link' => 'https://www.dicoding.com/',
                ],
            ];
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.carousel-news');
    }
}
