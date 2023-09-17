<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(users_seed::class);
        $this->call(categories_seed::class);
        $this->call(articles_seed::class);
        
    }
}
