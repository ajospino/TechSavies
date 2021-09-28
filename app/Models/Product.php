<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\ComboDivider;
use App\Models\Item;

class Product extends Model
{
    // attributes id, name, model, category, brand, stock, price, isPromoted, combos, items
    protected $fillable = [
        "id",
        "name",
        "model",
        "category",
        "brand",
        "stock",
        "price",
        "isPromoted",
    ];

    public static function validateProduct(Request $request)
    {
        $request->validate([
            "name" => "required",
            "model" => "required",
            "category" => "required",
            "brand" => "required",
            "stock" => "required|gt:0",
            "price" => "required|gt:0",
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

    public function getModel()
    {
        return $this->attributes["model"];
    }

    public function setModel($model)
    {
        $this->attributes["model"] = $model;
    }

    public function getCategory()
    {
        return $this->attributes["category"];
    }

    public function setCategory($category)
    {
        $this->attributes["category"] = $category;
    }

    public function getBrand()
    {
        return $this->attributes["brand"];
    }

    public function setBrand($brand)
    {
        $this->attributes["brand"] = $brand;
    }

    public function getStock()
    {
        return $this->attributes["stock"];
    }

    public function setStock($stock)
    {
        $this->attributes["stock"] = $stock;
    }

    public function getPrice()
    {
        return $this->attributes["price"];
    }

    public function setPrice($price)
    {
        $this->attributes["price"] = $price;
    }

    public function getIsPromoted()
    {
        return $this->attributes["isPromoted"];
    }

    public function setIsPromoted($isPromoted)
    {
        $this->attributes["isPromoted"] = $isPromoted;
    }

    public $table = "product";

    public function comboDivider()
    {
        return $this->hasMany(ComboDivider::class);
    }

    public function item()
    {
        return $this->hasMany(Item::class);
    }
}

?>
