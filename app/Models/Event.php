<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';

    protected $fillable = [
        'start_date',
        'end_date',
        'title',
        'description',
        'location',
        'campus_code'
    ];

    public $timestamps = true;
}
