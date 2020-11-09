<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{   

    protected $table = 'books';
    protected $fillable = ['book_name','book_description','author_name'];
    use HasFactory;
    public function User()
    {
        return $this->belongsToMany(User::class,'pivots', 'book_id', 'user_id');
    }
}
