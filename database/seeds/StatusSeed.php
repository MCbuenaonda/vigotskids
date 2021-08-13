<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'nombre' => 'Nuevo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('statuses')->insert([
            'nombre' => 'Abierto',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('statuses')->insert([
            'nombre' => 'Cerrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('statuses')->insert([
            'nombre' => 'Finalizado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
