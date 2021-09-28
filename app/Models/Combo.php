<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Item;
use App\Models\ComboHistory;

class Combo extends Model
{
    // attributes id, name, model, category, brand, stock, price, isPromoted, combos, items
    protected $fillable = [
        "id",
        "name",
        "type",
        "price",
        "description",
        "lowSale",
        "validity",
        "creationDate",
        "quantityAvailable",
    ];

    public static function validateCombo(Request $request)
    {
        $request->validate([
            "name" => "required",
            "type" => "required",
            "description" => "required",
            "validity" => "required|gt:0",
            "quantityAvailable" => "required|gt:0",
        ]);
    }

    public function getId()
    {
        return $this->attributes["id"];
    }

    public function setId($id)
    {
        $this->attributes["id"] = $id;
    }

    public function getName()
    {
        return $this->attributes["name"];
    }

    public function setName($name)
    {
        $this->attributes["name"] = $name;
    }

    public function getType()
    {
        return $this->attributes["type"];
    }

    public function setType($type)
    {
        $this->attributes["type"] = $type;
    }

    public function getPrice()
    {
        return $this->attributes["price"];
    }

    public function setPrice($price)
    {
        $this->attributes["price"] = $price;
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
        $this->attributes["validity"] = $validity;
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

    public $table = "combo";

    public function comboDivider()
    {
        return $this->hasMany(ComboDivider::class);
    }

    public function item()
    {
        return $this->hasMany(Item::class);
    }

    public function comboHistory()
    {
        return $this->hasMany(ComboHistory::class);
    }
}

?>
