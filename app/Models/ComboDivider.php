<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Combo;
use App\Models\Product;

class ComboDivider extends Model
{
    public function getId()
    {
        return $this->attributes["id"];
    }

    public function setId($id)
    {
        $this->attributes["id"] = $id;
    }

    public function getQuantity()
    {
        return $this->attributes["quantity"];
    }

    public function setQuantity($quantity)
    {
        $this->attributes["quantity"] = $quantity;
    }

    public function getSubtotal()
    {
        return $this->attributes["subtotal"];
    }

    public function setSubtotal($subtotal)
    {
        $this->attributes["subtotal"] = $subtotal;
    }

    public function combo()
    {
        return $this->belongsTo(Combo::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
}




?>