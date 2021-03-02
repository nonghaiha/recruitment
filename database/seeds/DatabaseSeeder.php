<?php

use Core\Modules\Admin\Database\Seeds\SampleAuthSeeder;
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
         $this->call(SampleAuthSeeder::class);
    }
}
