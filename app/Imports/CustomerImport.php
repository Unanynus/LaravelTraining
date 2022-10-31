<?php

namespace App\Imports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CustomerImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Customer([
            'branch_id' => $row['branch_id'],
            'name' => $row['name'],
            'lastname' => $row['lastname'],
            'age' => $row['age'],
            'product' => $row['product'],
            'description'=>$row['description']

        ]);
    }
}
