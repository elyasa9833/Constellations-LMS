<?php

namespace Database\Seeders;

use App\Models\CourseCategory;
use Illuminate\Database\Seeder;

class CourseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar 20 nama kategori kursus
        $categories = [
            'Teknologi dan Pemrograman',
            'Pemasaran Digital',
            'Desain dan Kreativitas',
            'Pengembangan Diri',
            'Bahasa Asing',
            'Kesehatan dan Kebugaran',
            'Bisnis dan Kewirausahaan',
            'Keuangan dan Investasi',
            'Ilmu Pengetahuan dan Teknik',
            'Pendidikan dan Pengajaran',
            'Seni dan Musik',
            'Manajemen dan Kepemimpinan',
            'Hobi dan Keterampilan Praktis',
            'Fotografi dan Videografi',
            'Data Science dan Analitik',
            'Game Development',
            'Keamanan Siber',
            'Psikologi dan Konseling',
            'Perjalanan dan Pariwisata',
            'Sastra dan Penulisan'
        ];

        // Pilih 10 kategori secara acak tanpa duplikasi
        $selectedCategories = collect($categories)->random(10);

        // Buat kategori kursus berdasarkan nama yang telah dipilih
        foreach ($selectedCategories as $category) {
            CourseCategory::create([
                'name' => $category
            ]);
        }
    }
}
