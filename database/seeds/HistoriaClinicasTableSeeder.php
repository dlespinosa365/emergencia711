<?php

use Illuminate\Database\Seeder;
use App\HistoriaClinica;

class HistoriaClinicasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(HistoriaClinica::class, 1000)->create();
    }
}
