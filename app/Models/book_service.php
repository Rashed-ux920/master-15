<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function service(){
        return $this->belongsTo(service::class);
    }

}
