<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Weedie Buenaonda',
            'email' => 'carlos_cerati@hotmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('12312312'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Sir McMotin',
            'email' => 'ing.carlos.cerati@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('12312312'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
