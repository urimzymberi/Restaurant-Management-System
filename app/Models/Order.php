<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function items()
    {
        return $this->hasMany(ItemOrder::class);
    }

    public function table()
    {
        return $this->belongsTo(Table::class);
    }

    public function bill()
    {
        return $this->hasOne(Bill::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
