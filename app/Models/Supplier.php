<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Supplier extends Model
{
    use HasFactory;

    public function getAllSuppliers(){
        $result = DB::table('suppliers')
                    ->select('*')
                    ->get();

        return $result;
    }

    public function getSupplier( $supplierID ){
        $result = DB::table('suppliers')
                    ->select('*')
                    ->where('id','=',$supplierID)
                    ->get();

        return $result;
    }
}
