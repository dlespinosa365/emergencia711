<?php

use Illuminate\Database\Seeder;
use App\Pago;


class PagosTableSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pago::class, 1000)->create();
    }
}
