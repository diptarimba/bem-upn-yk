<?php

namespace Database\Seeders;

use App\Models\BookSubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["name" => "3000 Solved Problems in Calculus", "category_id" => 1],
            ["name" => "Advanced Thermodynamics Engineering", "category_id" => 1],
            ["name" => "Analitycal Chemistry", "category_id" => 1],
            ["name" => "Calculus (9rd Edition)", "category_id" => 1],
            ["name" => "Catatan Kuliah Ilmu Ukur Tanah", "category_id" => 1],
            ["name" => "Coagulation and Flocculation", "category_id" => 1],
            ["name" => "Developments in Mineral Processing", "category_id" => 1],
            ["name" => "Encyclopedia of Nanoscience and Nanotechnology", "category_id" => 1],
            ["name" => "Engineering Rock Mechanics", "category_id" => 1],
            ["name" => "Hard Coatings", "category_id" => 1],
            ["name" => "Heat Transfer", "category_id" => 1],
            ["name" => "Introduction to Matlab", "category_id" => 1],
            ["name" => "Iron and Steel Making", "category_id" => 1],
            ["name" => "Manual of Underground Surveing", "category_id" => 1],
            ["name" => "Manufacturing Processes for Engineering", "category_id" => 1],
            ["name" => "Mineral Processing Technology", "category_id" => 1],
            ["name" => "PAPER_JOURNAL", "category_id" => 1],
            ["name" => "Pemindahan Tanah Mekanis", "category_id" => 1],
            ["name" => "Phase Transformation", "category_id" => 1],
            ["name" => "Solid State Physics", "category_id" => 1],
            ["name" => "Teknik Geologi", "category_id" => 1],
            ["name" => "Teknik Geomatika", "category_id" => 1],
            ["name" => "Teknik Lingkungan", "category_id" => 1],
            ["name" => "Teknik Metalurgi", "category_id" => 1],
            ["name" => "Teknik Perminyakan", "category_id" => 1],
            ["name" => "Teknik Pertambangan", "category_id" => 1],
            ["name" => "Teknik Geofisika", "category_id" => 2],
            ["name" => "Teknik Geologi", "category_id" => 2],
            ["name" => "Teknik Geomatika", "category_id" => 2],
            ["name" => "Teknik Lingkungan", "category_id" => 2],
            ["name" => "Teknik Metalurgi", "category_id" => 2],
            ["name" => "Teknik Perminyakan", "category_id" => 2],
            ["name" => "Teknik Pertambangan", "category_id" => 2],
            ["name" => "Acer Cyber Talk 17 Juli 2020", "category_id" => 3],
            ["name" => "Acer Cyber Talk 24 Juli 2020", "category_id" => 3],
            ["name" => "Critical Thinking and Problem Solving", "category_id" => 3],
            ["name" => "CV", "category_id" => 3],
            ["name" => "DIklat Batu Mulia dan Batu Hias", "category_id" => 3],
            ["name" => "Dunia Tambang-Materi Umum", "category_id" => 3],
            ["name" => "Materi Migas Goes To Campus", "category_id" => 3],
            ["name" => "Materi SG PT FI", "category_id" => 3],
            ["name" => "Materi Webinar Best Practice PLB3", "category_id" => 3],
            ["name" => "Materi Webinar Geofisika 18 Juni 2020", "category_id" => 3],
            ["name" => "Materi Webinar Kebnacaan BEM FTM", "category_id" => 3],
            ["name" => "Materi Webinar Lingkungan Hidup", "category_id" => 3],
            ["name" => "Materi Webinar Penerapan Teknologi Highwall Mining", "category_id" => 3],
            ["name" => "Pelatihan Paper", "category_id" => 3],
            ["name" => "Pengolahan Emas Rakyat", "category_id" => 3],
            ["name" => "PKM Tour 2022", "category_id" => 3],
            ["name" => "PPC", "category_id" => 3],
            ["name" => "Seminar Beasiswa 2018", "category_id" => 3],
            ["name" => "Seminar Career 2022", "category_id" => 3],
            ["name" => "Webinar Enterpreneurship 2022", "category_id" => 3],
            ["name" => "Webinar Series 1_Industri Hulu Migas", "category_id" => 3],
            ["name" => "Webinar Series 2_Permasalahan dan Pemanfaatan Energi Nuklir", "category_id" => 3],
            ["name" => "Webinar Series 3_Mengubah Sampah menjadi Energi Listrik", "category_id" => 3],
            ["name" => "Workshop Kepenulisan Ilmiah 2019", "category_id" => 3],
            ["name" => "Workshop KTI 2018", "category_id" => 3],
            ["name" => "Lainnya", "category_id" => 3]
        ];

        BookSubCategory::insert($data);
    }
}
