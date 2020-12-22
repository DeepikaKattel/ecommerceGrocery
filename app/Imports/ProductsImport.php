<?php

namespace App\Imports;

use App\ExcelProduct;
use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ExcelProduct([
            'id'     => $row[0],
            'name'    => $row[2],
            'category'    => $row[1],
            'quantity' => $row[3],
            'rate' => $row[4]
        ]);
    }
}
