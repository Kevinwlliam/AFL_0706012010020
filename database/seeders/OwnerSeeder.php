<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            'owner_code'=>'KEV',
            'fullname'=>'Kevin William',
            'age'=>'18',
            'gender'=>'Male',
            'contactperson'=>'082252292050',
            'description'=>'This store has a dark background color and a white text.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
