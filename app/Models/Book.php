<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'year', 'price', 'author', 'user', 'language', 'path'];
    
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
    public function categories() {
        return $this->belongsToMany(Category::class);
      }
    

      public function users()
        {
            return $this->belongsToMany(User::class, 'book_history')->withTimestamps();
        }
}
