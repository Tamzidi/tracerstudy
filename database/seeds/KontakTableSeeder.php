<?php

use Illuminate\Database\Seeder;

class KontakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Berita::class, 10)->create();
    }
}
