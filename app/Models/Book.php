<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'book_id';

    protected $fillable = [
        'book_name', 'author_id', 'publisher_id', 'genre', 
        'language', 'country_of_origin', 'publication_date', 'created_by', 'updated_by'
    ];

    protected $casts = [
        'publication_date' => 'date',
    ];

    protected $dates = [
        'publication_date'
    ];
}
