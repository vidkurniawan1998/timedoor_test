<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    use HasFactory;

    public $incrementing = true;
    protected $table = 'authors';

    protected $fillable = [
        'authors_name',
    ];
}
