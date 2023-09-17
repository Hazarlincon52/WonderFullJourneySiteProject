<?php

use Illuminate\Database\Seeder;

class categories_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Beach'],
            ['name' => 'Mountain'],
            ['name' => 'Forest'],
        ]);
    }
}
