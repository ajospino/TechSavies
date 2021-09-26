<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Item;
use App\Models\ComboHistory;

class Combo extends Model
{
    // attributes id, name, model, category, brand, stock, price, isPromoted, combos, items
    public function getId()
    {
        return $this->attributes["id"];
    }

    public function setId($id)
    {
        $this->attributes["id"] = $id;
    }

    public function getType()
    {
        return $this->attributes["name"];
    }

    public function setType($type)
    {
        $this->attributes["type"] = $type;
    }

    public function getLowSale()
    {
        return $this->attributes["lowSale"];
    }

    public function setLowSale($lowSale)
    {
        $this->attributes["lowSale"] = $lowSale;
    }

    public function getValidity()
    {
        return $this->attributes["validity"];
    }

    public function setValidity($validity)
    {
        $this->attributes["validity"] = $validity
    }

    public function getQuantityAvailable()
    {
        return $this->attributes["quantityAvailable"];
    }

    public function setQuantityAvailable($quantityAvailable)
    {
        $this->attributes["quantityAvailable"] = $quantityAvailable;
    }

    public function getCreationDate()
    {
        return $this->attributes["creationDate"];
    }

    public function setCreationDate($creationDate)
    {
        $this->attributes["creationDate"] = $creationDate;
    }

    public function product()
    {
        return $this->belongsTo(Combo::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function comboHistory()
    {
        return $this->belongsTo(ComboHistory::class);
    }
}

?>