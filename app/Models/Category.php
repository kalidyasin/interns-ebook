<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description', 'editor'];
    
    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
