<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
           DB::table('states')->insert([[
            'id'=>6,
            'name'=>'new south wales',
            'country_id'=>10,
            'created_at'=> now(),
            'updated_at'=> now()
           ],[
            'id'=>12,
            'name'=>'uk',
            'country_id'=>8,
            'created_at'=> now(),
            'updated_at'=> now()
           ],
        ]);
        
    }
    }
}
