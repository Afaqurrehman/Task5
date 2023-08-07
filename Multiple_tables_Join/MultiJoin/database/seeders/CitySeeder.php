<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           DB::table('cities')->insert([[
            'id'=>9,
            'name'=>'sydney',
            'state_id'=>6,
            'created_at'=> now(),
            'updated_at'=> now()
           ],[
            'id'=>11,
            'name'=>'London',
            'state_id'=>12,
            'created_at'=> now(),
            'updated_at'=> now()
           ],
        ]);
        }
    }

