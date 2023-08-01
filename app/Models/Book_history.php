<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_history extends Model
{
    protected $fillable = ['book_id', 'user_id', 'date'];
}
