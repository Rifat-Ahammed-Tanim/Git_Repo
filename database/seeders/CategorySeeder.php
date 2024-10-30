<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'Animal'
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'Gaming'
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'Ridoy'
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'Ridoy gay'
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'Mosha manger nati'
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'Flat suchi'
            ]
        ]);
    }
}
