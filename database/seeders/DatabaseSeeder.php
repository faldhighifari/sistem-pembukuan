<?php

namespace Database\Seeders;

use App\Models\Lecture;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LectureSeeder::class,

        ]);
        // \App\Models\User::factory(10)->create();
    }
}
