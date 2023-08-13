<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class FacultadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos =[
            [
                'codFacultad' => '10',
                'nomFacultad' => 'Artes'
            ],
            [
                'codFacultad' => '20',
                'nomFacultad' => 'Ingeniería'
            ],
            [
                'codFacultad' => '30',
                'nomFacultad' => 'Salud'
            ]
        ];
        DB::table('facultades')->insert($datos);
    }
}
