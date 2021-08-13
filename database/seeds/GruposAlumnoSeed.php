<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GruposAlumnoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos_alumnos')->insert([
            'grupo_id' => 2,
            'alumno_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('grupos_alumnos')->insert([
            'grupo_id' => 4,
            'alumno_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('grupos_alumnos')->insert([
            'grupo_id' => 5,
            'alumno_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('grupos_alumnos')->insert([
            'grupo_id' => 2,
            'alumno_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('grupos_alumnos')->insert([
            'grupo_id' => 4,
            'alumno_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('grupos_alumnos')->insert([
            'grupo_id' => 2,
            'alumno_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('grupos_alumnos')->insert([
            'grupo_id' => 1,
            'alumno_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('grupos_alumnos')->insert([
            'grupo_id' => 2,
            'alumno_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('grupos_alumnos')->insert([
            'grupo_id' => 3,
            'alumno_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('grupos_alumnos')->insert([
            'grupo_id' => 4,
            'alumno_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
