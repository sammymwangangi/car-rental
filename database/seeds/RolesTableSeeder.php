<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ADMIN',
                'display_name' => 'ADMIN',
                'description' => 'ADMIN',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            )
        ));
    }
}
