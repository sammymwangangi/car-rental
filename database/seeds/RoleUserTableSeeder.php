<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('role_user')->delete();
        
        \DB::table('role_user')->insert(array (
            0 => 
            array (
                'role_id' => 1,
                'user_id' => 1,
                'user_type' => 'App\\User',
            ),
        ));
    }
}
