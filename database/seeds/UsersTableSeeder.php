<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        User::create(array(
         'name'     => 'TeeJay',
        'email'    => 'admin123',
        'password' => Hash::make('abcd123'),
         ));
    }
}
