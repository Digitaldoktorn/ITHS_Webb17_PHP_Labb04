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


     factory(App\User::class, 50)->create();

    App\User::create([

    'name'   => 'dentist',
    'email'    => 'dentist@gmail.com',
    'password'   =>  Hash::make('admin'),
    'remember_token' =>  str_random(10),
    'type' => 'admin',
]);

    }
}
