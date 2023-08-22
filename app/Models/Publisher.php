<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;

    protected $primaryKey = 'publisher_id';

    protected $fillable = [
        'publisher_name', 'address', 'contact_number', 'email', 'website', 
        'establish_date', 'contact_person', 'isactive', 'created_by', 'updated_by'
    ];

    protected $casts = [
        'isactive' => 'boolean',
        'establish_date' => 'date',
    ];

    protected $dates = [
        'establish_date',
    ];
}
