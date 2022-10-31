<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    use HasFactory;

    protected $table = "customers";
     
    protected $fillable = ['branch_id','name','lastname','age','product','description'];

    public static function getCustomer()
    {
        $customer = DB::table('customers')->select('branch_id','name','lastname','age','product','description')->get()->toArray();
        return $customer;
    }
}
