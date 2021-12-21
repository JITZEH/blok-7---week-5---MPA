<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Song;


class SongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Song::factory(20)->create();
    }
}
