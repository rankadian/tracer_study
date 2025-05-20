<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['id' => 1, 'nama' => 'Administrator'],
            ['id' => 2, 'nama' => 'Alumni'],
        ];
        DB::table('level')->insert($data);
    }
}
