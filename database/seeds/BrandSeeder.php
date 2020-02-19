<?php

use Illuminate\Database\Seeder;
use App\Brand;
use Carbon\Carbon;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::insert([
            [
                'name' => 'Porsche',
                'created_at' => Carbon::now(), # \Datetime()
                'updated_at' => Carbon::now(),  # \Datetime()
            ],
            [
                'name' => 'Ferrari',
                'created_at' => Carbon::now(), # \Datetime()
                'updated_at' => Carbon::now(),  # \Datetime()
            ],
            [
                'name' => 'Audi',
                'created_at' => Carbon::now(), # \Datetime()
                'updated_at' => Carbon::now(),  # \Datetime()
            ],
            [
                'name' => 'Ford',
                'created_at' => Carbon::now(), # \Datetime()
                'updated_at' => Carbon::now(),  # \Datetime()
            ],
            [
                'name' => 'Honda',
                'created_at' => Carbon::now(), # \Datetime()
                'updated_at' => Carbon::now(),  # \Datetime()
            ],
        ]);
    }
}
