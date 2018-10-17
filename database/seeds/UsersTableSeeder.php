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

/*creating 300 users */
     factory(App\User::class, 150)->create();

   /* App\User::create([

    'name'   => 'kamau',
    'email'    => 'kamau@kenya.com',
    'password'   =>  Hash::make('admin'),
    'remember_token' =>  str_random(10),
    'type' => 'admin',
]);

    }
}



*/
}
}