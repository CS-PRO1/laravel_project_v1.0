<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_link',
        'expiration_date',
        'contact_info',
        'quantity',
        'initial_price',
        'first_evaluation_date',
        'second_evaluation_date',
        'first_discount_ratio',
        'second_discount_ratio',
        'third_discount_ratio',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    }