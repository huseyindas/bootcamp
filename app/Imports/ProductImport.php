<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return Product
     */
    public function model(array $row)
    {
        return new Product([
            "product_name" => $row[0],
            "price" => $row[1],
            "photo" => $row[2],
            "description" => $row[3],
            "user_id" => $row[4],
            "category_id" => $row[5]
        ]);
    }
}
