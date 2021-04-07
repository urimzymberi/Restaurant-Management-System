<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function order_lines()
    {
        return $this->hasMany('\App\Models\OrderLine');
    }

    public function ingredients()
    {
        return $this->hasMany(ItemIngredient::class);
    }
}
