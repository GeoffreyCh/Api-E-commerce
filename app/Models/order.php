<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    function users(){
        return $this->belongsTo(user::class);
    }

    function cards(){
        return $this->belongsTo(card::class);
    }
}
