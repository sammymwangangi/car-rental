<?php

namespace App\Imports;

use App\Car;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportCars implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Car([
            'name' => $row[0],
            'description' => $row[1],
            'price' => $row[2],
            'image' => $row[3],
            'nop' => $row[4],
            'category_id' => $row[5],
            'brand_id' => $row[6],
            'likes' => $row[7],
            'status' => $row[8],
        ]);
    }
}
