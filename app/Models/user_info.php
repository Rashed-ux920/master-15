<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_info extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',
        'phonenumber',
        'image',
        'dateofbirth',
        'user_id',
        'role'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
