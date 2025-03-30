<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderDetail;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;

    public function dishes() {
        return $this->hasManyThrough(
            Dish::class, 
            OrderDetail::class,
            'order_id', // Clave fóranea de order_details relacionada con la tabla orders,
            'id', // id de la tabla dishes
            'id', // id de la tabla orders,
            'dish_id'); // Clave fóranea de la tabla order_details relacionada con la tabla dishes

    }
    public function orderDetails() {
        return $this->hasMany(OrderDetail::class);
    }
}
