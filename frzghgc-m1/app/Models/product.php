<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = "products";

    protected $fillable = [
        'id',
        'name',
        'price',
        'year',
        'id_cat',
        'photo',
        'country',
        'model',
        'count',
        'created_at',
        'updated_at',
    ];
}
