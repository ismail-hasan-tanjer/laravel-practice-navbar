<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static function allData()
    {
        return[
          0  => [
                'ptype'=>'tanjer',
                'brand'=>'Bay-Ban',
                'price'=>'100USD',
                'garranty'=>'1 Month'
                ],
          1 => [
                'ptype'=>'tanjer',
                'brand'=>'Bay-Ban',
                'price'=>'100USD',
                'garranty'=>'1 Month'
                ],
          2 => [
                'ptype'=>'tanjer',
                'brand'=>'Bay-Ban',
                'price'=>'100USD',
                'garranty'=>'1 Month'
               ]

        ];
    }
}
