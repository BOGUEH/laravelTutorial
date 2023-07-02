<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i<=50; $i++) {

            DB::table('posts')->insert([
                'title'=> str::random(10),
                'description' => str::random(100),
                'status'=> 1,
                'published_date' => date('d-m-y'),
                'User ID'=> 1
            ]);
        }
    }
}
