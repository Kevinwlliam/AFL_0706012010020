<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            'code'=>'KRE',
            'store'=>'KevStore',
            'owner'=>'KEV',
            'datestore'=>'18 August 2021',
            'typestore'=>'Fashion',
            'description'=>'This store has a dark background color and a white text.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

    }
}
