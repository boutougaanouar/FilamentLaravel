<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title'];
    
public function author()

{
    return $this->belongsTo(Author::class);
}
public function getBooksCount($author)
{
    return (string)$author->books()->count();
}
public function books()
{
    return $this->hasMany(Book::class);
}
}
