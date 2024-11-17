<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_service extends Model
{
    use HasFactory;

    protected $fillable = [
        'time',
        'name',
        'date',
        'location',
        'phonenumber',
        'note',
        'email',
        'user_id',
        'service_id',
    ];
}
