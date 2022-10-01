<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Buku Referensi'],
            ['name' => 'Materi Kuliah'],
            ['name' => 'Materi Webinar dan Seminar']
        ];

        BookCategory::insert($data);
    }
}
