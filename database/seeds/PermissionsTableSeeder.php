<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'CREATE-CAR',
                'display_name' => 'CREATE-CAR',
                'description' => 'CREATE-CAR',
                'created_at' => '2018-01-17 23:14:15',
                'updated_at' => '2018-01-17 23:14:15',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'EDIT-CAR',
                'display_name' => 'EDIT-CAR',
                'description' => 'EDIT-CAR',
                'created_at' => '2018-01-17 23:14:35',
                'updated_at' => '2018-01-17 23:14:35',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'VIEW-CAR',
                'display_name' => 'VIEW-CAR',
                'description' => 'VIEW-CAR',
                'created_at' => '2018-01-17 23:14:52',
                'updated_at' => '2018-01-17 23:14:52',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'DELETE-CAR',
                'display_name' => 'DELETE-CAR',
                'description' => 'DELETE-CAR',
                'created_at' => '2018-01-17 23:15:11',
                'updated_at' => '2018-01-17 23:15:11',
            ),
        ));
    }
}
