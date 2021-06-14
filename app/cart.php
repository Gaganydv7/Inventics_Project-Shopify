<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    public function inventories()
    {
        return $this->belongsToMany(Inventory::class, 'cart_items')
        ->withPivot('item_description', 'quantity', 'unit_price')->withTimestamps();
    }
}
