<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;

    public $timestamps = false;


    function cards(){
        return $this->belongsToMany(card::class, "card_items", "items_id", "cards_id");
    }

    function users(){
        return $this->belongsToMany(user::class, "surfs", "items_id", "users_id");
    }




}
