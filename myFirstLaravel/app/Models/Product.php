<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $table = "products";  
    //No es necesario. La tabla (Products) en la base de datos está en la convención
    // de Laravel; es decir, está en plural


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'quantity', 'status'
    ];

}
