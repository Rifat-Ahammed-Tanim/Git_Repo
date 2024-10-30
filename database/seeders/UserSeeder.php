<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'tanim',
                'email' => 'tanim@mediusware.com',
                'password' => Hash::make('tanim123123'),
                'role' => 'admin'
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'mosha manger nati',
                'email' => 'mangernati@mosha.com',
                'password' => Hash::make('mosha123123'),
                'role' => 'normal'
            ],
        ]);
    }
}
