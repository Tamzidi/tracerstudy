<?php

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
		factory('App\Role', 'admin')->create();
        factory('App\Role', 'mahasiswa')->create();
        factory('App\User', 'admin')->create();
        factory('App\User', 'mahasiswa')->create();
        factory('App\User', 'user', 10)->create();
    }
}
