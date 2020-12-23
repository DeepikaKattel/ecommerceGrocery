<?php

namespace App\Imports;

use App\ExcelProduct;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function startRow(): int
    {
        return 6;
    }
    public function model(array $col)
    {
        return new ExcelProduct([
            'id'     => $col[0],
            'name'    => $col[1],
            'category'    => $col[2],
            'quantity' => $col[3],
            'rate' => $col[4]
        ]);
    }
}
