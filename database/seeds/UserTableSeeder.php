<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Rizki Maulana',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('password')
        ]);
    }
}
