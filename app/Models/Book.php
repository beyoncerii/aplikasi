<?php

namespace App\Models;

use App\Models\Author;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'price', 'synopsis', 'author_id'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
