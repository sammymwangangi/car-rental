<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'Sammy Mwangangi',
                'email' => 'sammymwinzi2@gmail.com',
                'password' => bcrypt('12345678'),
                'created_at' => Carbon::now(), # \Datetime()
                'updated_at' => Carbon::now(),  # \Datetime()
            ],
        ]);
    }
}
