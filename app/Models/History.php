<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'book_history';
    protected $fillable = [
        'user_id',
        'book_id',
        'time',
    ];
}