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

    //   factory(App\User::class, 50)->create();
      
       App\User::create([
        'id' => 'AUTO_INCREMENT',
        'name'    => 'John Smith',
        'email'    => 'john_smith@gmail.com',
        'password'   =>  Hash::make('password'),
        'remember_token' =>  str_random(10),
        'created_at' => '',
        'updated_at' => '',
        'type' => 'admin',
    ]);

    }
}
