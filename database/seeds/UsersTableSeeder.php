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

        User::create([
            'name'    => 'test',
            'email'    => 'test@gmail.com',
            'password'   =>  Hash::make('test'),
            'remember_token' =>  str_random(10),
        ]);
    }
}
