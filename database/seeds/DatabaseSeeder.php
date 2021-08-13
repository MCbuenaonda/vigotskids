<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeed::class);
        $this->call(CursoSeed::class);
        $this->call(AlumnoSeed::class);
        $this->call(StatusSeed::class);
        $this->call(GrupoSeed::class);
        $this->call(GruposAlumnoSeed::class);

    }
}
