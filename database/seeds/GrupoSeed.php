<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrupoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos')->insert([
            'nombre' => 'GPO 01',
            'fecha' => Carbon::now(),
            'curso_id' => 3,
            'status_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'GPO 02',
            'fecha' => Carbon::now(),
            'curso_id' => 1,
            'status_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'GPO 03',
            'fecha' => Carbon::now(),
            'curso_id' => 2,
            'status_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'GPO 04',
            'fecha' => Carbon::now(),
            'curso_id' => 3,
            'status_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'GPO 05',
            'fecha' => Carbon::now(),
            'curso_id' => 5,
            'status_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'GPO 06',
            'fecha' => Carbon::now(),
            'curso_id' => 5,
            'status_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'GPO 07',
            'fecha' => Carbon::now(),
            'curso_id' => 1,
            'status_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'GPO 08',
            'fecha' => Carbon::now(),
            'curso_id' => 3,
            'status_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'GPO 09',
            'fecha' => Carbon::now(),
            'curso_id' => 2,
            'status_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'GPO 10',
            'fecha' => Carbon::now(),
            'curso_id' => 4,
            'status_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
