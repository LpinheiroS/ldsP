<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReuniaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('reuniao')->insert([
            'nome'=>'Reunião mensal',
            'descricao'=>'Reunião realizada mensalmente',
            'data'=>'2022-06-01 00:00:00'
        ]);
    }
}
