<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

class Order extends Model
{
    use HasFactory;
    const ORDER_STATUS_PAID = 'Paid',
    ORDER_STATUS_CANCELLED='Cancelled',
    ORDER_STATUS_CREATED='Created';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
    public function orderItem(){

        return $this->hasMany(OrderItem::class);

}
}
