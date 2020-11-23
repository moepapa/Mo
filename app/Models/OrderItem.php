<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';

    protected $fillable = [
        'order_id', 'seedling_id', 'quantity', 'price'
    ];

    public function seedling()
    {
        return $this->belongsTo(Seedling::class, 'seedling_id');
    }
}
