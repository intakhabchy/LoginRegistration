<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $primaryKey = 'author_id';

    protected $fillable = [
        'author_name', 'country', 'website', 'date_of_birth', 
        'date_of_death', 'created_by', 'updated_by'
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'date_of_death' => 'date',
    ];

    protected $dates = [
        'date_of_birth','date_of_death'
    ];
}
