<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Combo;
use App\Models\Item;

class Product extends Model
{
    // attributes id, name, model, category, brand, stock, price, isPromoted, combos, items
    protected $fillable = ['id', 'name', 'model', 'category', 'brand', 'stock', 'price', 'isPromoted'];
    
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

    public $table = 'product';

    public function combo()
    {
        return $this->belongsTo(Combo::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}

?>
