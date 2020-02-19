<?php

use Illuminate\Database\Seeder;
use App\Category;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'Coupe',
                'created_at' => Carbon::now(), # \Datetime()
                'updated_at' => Carbon::now(),  # \Datetime()
            ],
            [
                'name' => 'Crossover',
                'created_at' => Carbon::now(), # \Datetime()
                'updated_at' => Carbon::now(),  # \Datetime()
            ],
            [
                'name' => 'SUV',
                'created_at' => Carbon::now(), # \Datetime()
                'updated_at' => Carbon::now(),  # \Datetime()
            ],
            [
                'name' => 'MPV',
                'created_at' => Carbon::now(), # \Datetime()
                'updated_at' => Carbon::now(),  # \Datetime()
            ],
        ]);
    }
}
