<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('casts')->Insert([
            'nama' => Str::random(45),
            'umur' => random_int(1,100),
            'bio' => Str::random(255),
        ]);
    }
}
