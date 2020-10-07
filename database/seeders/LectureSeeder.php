<?php

namespace Database\Seeders;

use App\Models\Lecture;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lectures = collect([

            'Agus Buono',
            'Heru Sukoco',
            'Imas Sukaesih Sitanggang',
            'Irman Hermadi',
            'Sri Wahjuni',
            'Wisnu Ananta Kusuma',
            'Yani Nurhadryani',
            'Yeni Herdiyeni',
            'Ahmad Ridha',
'            Annisa',
            'Auriza Rahmad Akbar',
            'Auzi Asfarian',
            'Aziz Kustiyo',
            'Dean Apriana Ramadhan',
            'Endang Purnama Giri',
            'Firman Ardiansyah',
            'Hari Agung Adrianto',
            'Hendra Rahmawan', 
            'Husnul Khotimah',
            'Julio Adisantoso',
            'Karlina Khiyarin Nisa',
            'Karlisa Priandana',
            'Meuthia Rachmaniah',
            'Muhammad Abrar Istiadi',
            'Muhammad Asyhar Agmalaro',
            'Mushthofa',
            'Rina Trisminingsih',
            'Shelvie Nidya Neyman',
            'Sony Hartono Wijaya',
            'Toto Haryanto',
            'Vektor Dewanto',


        ]);

        $lectures->each( function($lecture) {

            Lecture::create([
                'name' => $lecture,
                'nrp' => Str::random(9),
                'slug' => Str::slug($lecture),
                'jurusan' => Str::random(9),
                'fakultas' => Str::random(9),
                'email' => Str::random(10).'@gmail.com',
                'idrekening' => Str::random(9),


            ]);
        });
    }
}

