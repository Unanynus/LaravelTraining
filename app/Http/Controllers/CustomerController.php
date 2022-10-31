<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
     public function addData(){
        $customers = [
            ['branch_id' => 301, 'name'=>'Premsai ','lastname'=>'Ardhi','age'=>21,'product'=>'Redmi Note 12 pro plus','description'=>'This is the phone with dimensity 1080'],
            ['branch_id' => 302, 'name'=>'Hiren ','lastname'=>'Parkar','age'=>21,'product'=>'Samsung A 53','description'=>'A samsung midrange phone'],
            ['branch_id' => 303, 'name'=>'Gaurang ','lastname'=>'Ahinave','age'=>21,'product'=>'Samsung M53','description'=>'The Samsun '],
            ['branch_id' => 304, 'name'=>'Sahil ','lastname'=>'Shelke','age'=>21,'product'=>'Vivo v23','description'=>'This is the phone with dimensity 1080'],
            ['branch_id' => 305, 'name'=>'Shashanrt ','lastname'=>'Dudam','age'=>21,'product'=>'iphone 7s','description'=>'This is the phone with dimensity 1080'],
        ];

        Customer::insert($customers);
        return "The data of customers has been added";
     }
}
