<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 20)->create();
        User::create([
            'name' => 'Denis',
            'lastname' => 'Espinosa',
            'email' => 'dlespinosa365@gmail.com',
            'password' => bcrypt('dlespinosa2015'),
            'role' => User::ROLE_ADMIN,
            'active' => 1,
        ]);

    }
}
