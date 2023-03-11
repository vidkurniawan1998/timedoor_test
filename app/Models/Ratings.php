<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    use HasFactory;
    public $incrementing = true;
    protected $table = 'ratings';

    protected $fillable = [
        'rating',
        'average_rating',
        'voter',
        'books_id'
    ];
}
