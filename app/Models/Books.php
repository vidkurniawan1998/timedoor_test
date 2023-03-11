<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = 'books';

    protected $fillable = [
        'id',
        'book_name',
        'category_name',
        'author_name',
        'average_rating',
        'voter',
    ];
}
