<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
            'nombre' => 'John',
            'ap_paterno' => 'Weed',
            'ap_materno' => 'Lopex',
            'clave' => 'JOWELOVK-0001',
            'activo' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('alumnos')->insert([
            'nombre' => 'Patricio',
            'ap_paterno' => 'Estrella',
            'ap_materno' => 'Miri',
            'clave' => 'PAESMIVK-0002',
            'activo' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('alumnos')->insert([
            'nombre' => 'Weedie',
            'ap_paterno' => 'Buenaonda',
            'ap_materno' => 'Cann',
            'clave' => 'WEBUCAVK-0003',
            'activo' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('alumnos')->insert([
            'nombre' => 'Don',
            'ap_paterno' => 'Toallin',
            'ap_materno' => 'Joint',
            'clave' => 'DOTOJOVK-0004',
            'activo' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('alumnos')->insert([
            'nombre' => 'Hugo',
            'ap_paterno' => 'Sanchez',
            'ap_materno' => 'Mogollon',
            'clave' => 'HUSAMOVK-0005',
            'activo' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
