<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $genreId = DB::table('genres')->InsertGetId(
            ['nama' => 'Acer Aspire 5 Slim Laptop']
        );

        DB::table('films')->insert([
            'judul' => Str::random(20),
            'ringkasan' => Str::random(100),
            'tahun' => random_int(1990,2007),
            'poster' => Str::random(45),
            'genre_id' => $genreId,
        ]);
    }
}
