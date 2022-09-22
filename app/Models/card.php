<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class card extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nb_items',
        'total_price',
    ];

    function orders(){
        return $this->hasMany(order::class, "cards_id");
    }

    function items(){
        return $this->belongsToMany(items::class, "card_items", "cards_id", "items_id");
    }

    function users(){
        return $this->belongsTo(user::class, 'users_id');
    }
}
