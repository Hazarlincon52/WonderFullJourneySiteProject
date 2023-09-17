<?php

use Illuminate\Database\Seeder;

class users_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'skipper', 'email' => 'skipper@gmail.com', 'phone' => '07118569','role' => 'admin','password' => bcrypt('skipper123')],
            ['name' => 'private', 'email' => 'private@gmail.com', 'phone' => '07114756','role' => 'admin','password' => bcrypt('private123')],
            ['name' => 'kowalski', 'email' => 'kowalski@gmail.com', 'phone' => '07112589','role' => 'user','password' => bcrypt('kowalski123')],
            ['name' => 'rico', 'email' => 'rico@gmail.com', 'phone' => '07113487','role' => 'user','password' => bcrypt('rico123')],
        ]);
    }
}
