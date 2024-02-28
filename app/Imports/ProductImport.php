<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'name' => $row[1],
            'title' => $row[2],
            'description'  => $row[3],
            'stock' => $row[4],
            'category' => $row[5],
            'price' => $row[6],
            'photo' => $row[7]
        ]);
    }
}
