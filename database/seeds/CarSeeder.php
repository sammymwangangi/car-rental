<?php

use Illuminate\Database\Seeder;
use App\Car;
use Carbon\Carbon;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $n1 = 'Mercedes Benz Z-Series';
        $n2 = 'Mercedes Benz Sedan';
        $n3 = 'Mercedes Benz Van';

        $c1 = [
        	'name' => $n1,
        	'description' => 'No amet molestie qui, mediocrem maluisset voluptatum an sit, ignota volumus epicuri cum ad. Ei atqui similique mei, an stet iudico dicant has. In liber partem suavitate eum. Ad pro moderatius inciderint, nec choro diceret veritus id. Ea porro paulo vel. Ex vix debitis postulant definitiones. Ad per novum lobortis sententiae, latine luptatum lobortis et quo, doctus sadipscing ius at.',
        	'category_id' => 1,
        	'brand_id' => 1,
            'likes' => 20,
            'status' => 1,
        	'nop' => 5,
            'price' => 700.00,
            'image' => 'images/car-fleet1.jpg',
            'created_at' => Carbon::now(), # \Datetime(),
            'updated_at' => Carbon::now(),  # \Datetime()

        ];

        $c2 = [
        	'name' => $n2,
        	'description' => 'NCicero famously orated against his political opponent Lucius Sergius Catilina. Occasionally the first Oration against Catiline is taken for type specimens: Quo usque tandem abutere, Catilina, patientia nostra? Quam diu etiam furor iste tuus nos eludet? (How long, O Catiline, will you abuse our patience? And for how long will that madness of yours mock us?',
        	'category_id' => 2,
        	'brand_id' => 2,
            'likes' => 43,
            'status' => 0,
        	'nop' => 7,
            'price' => 1000.00,
            'image' => 'images/car-fleet2.jpg',
            'created_at' => Carbon::now(), # \Datetime(),
            'updated_at' => Carbon::now(),  # \Datetime()

        ];

        $c3 = [
        	'name' => $n3,
        	'description' => 'Pri quodsi recteque ad. Idque virtute detraxit nec an. Et his numquam perfecto petentium. Mei eu persequeris intellegebat, an amet invenire cum. No porro postea corrumpit vim, ex est hinc nibh voluptaria, cu mea volumus insolens voluptaria.',
        	'category_id' => 3,
            'brand_id' => 3,
            'likes' => 12,
            'status' => 1,
        	'nop' => 4,
            'price' => 500.00,
            'image' => 'images/car-fleet3.jpg',
            'created_at' => Carbon::now(), # \Datetime(),
            'updated_at' => Carbon::now(),  # \Datetime()

        ];

        Car::create($c1);

        Car::create($c2);

        Car::create($c3);
    }
}
