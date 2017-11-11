<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class LoginSeeder extends Seeder
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
        'email'    => 'jaytholiday2017@gmail.com',
        'password' => Hash::make('abcd123'),
         ));
    }
}
