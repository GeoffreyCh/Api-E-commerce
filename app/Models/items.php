<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;


    function cards(){
        $this->belongsToMany(card::class, "card_items", "cards_id", "items_id");
    }

    function users(){
        return $this->belongsToMany(user::class, "surfs", "items_id", "users_id");
    }




}
