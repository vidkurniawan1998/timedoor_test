<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    public $incrementing = true;
    protected $table = 'categories';

    protected $fillable = [
        'category_name'
    ];
}
