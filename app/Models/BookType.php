<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookType extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function books(){
        return $this->belongsToMany(Book::class);
    }
}
