<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public $timestamps = false;

    function users(){
        return $this->belongsTo(user::class, 'users_id');
    }

    function cards(){
        return $this->belongsTo(card::class, 'cards_id');
    }
}
