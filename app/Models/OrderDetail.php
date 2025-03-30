<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Dish;

class OrderDetail extends Model
{
    /** @use HasFactory<\Database\Factories\OrderDetailFactory> */
    use HasFactory;

    public function orders() {
        return $this->belongsTo(Order::class);
    }

    public function dishes() {
        return $this->belongsTo(Dish::class);
    }    

}
