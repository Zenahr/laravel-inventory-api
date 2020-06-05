<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
{
    protected $fillable = ['itemName','itemDescription', 'itemQuantity', 'itemIsAvailable'];
}
