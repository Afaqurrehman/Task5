<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('countries')->insert([[
        'id'=>8,
        'name'=>'europe',
        'created_at'=> now(),
        'updated_at'=> now()
       ],[
        'id'=>10,
        'name'=>'Austrillia',
        'created_at'=> now(),
        'updated_at'=> now()
       ],
    ]);
    }
}
