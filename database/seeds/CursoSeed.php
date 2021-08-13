<?php

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'nombre' => 'Estimulacion Temprana',
            'slug' => Str::slug('Estimulacion Temprana'),
            'siglas' => 'ETIM',
            'precio' => 1500,
            'activo' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('cursos')->insert([
            'nombre' => 'Estimulacion 0-6 Meses',
            'slug' => Str::slug('Estimulacion 0-6 Meses'),
            'siglas' => 'ET06',
            'precio' => 1700,
            'activo' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('cursos')->insert([
            'nombre' => 'Estimulacion 1-3 Años',
            'slug' => Str::slug('Estimulacion 1-3 Años'),
            'siglas' => 'ET13',
            'precio' => 1900,
            'activo' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('cursos')->insert([
            'nombre' => 'Estimulacion 4-8 Años',
            'slug' => Str::slug('Estimulacion 4-8 Años'),
            'siglas' => 'ET48',
            'precio' => 2100,
            'activo' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('cursos')->insert([
            'nombre' => 'Estimulacion 10 Años',
            'slug' => Str::slug('Estimulacion 10 Años'),
            'siglas' => 'ET10',
            'precio' => 2100,
            'activo' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
