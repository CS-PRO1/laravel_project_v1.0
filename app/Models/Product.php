<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'owner_id',
        'category_id',
        'image',
        'contact_info',
        'quantity',
        'initial_price',
        'expiration_date',
        'first_evaluation_date',
        'second_evaluation_date',
        'first_discount_percentage',
        'second_discount_percentage',
        'third_discount_percentage',
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