<?php
namespace App\Models;

class ComboHistory extends Model
{
    public function getId()
    {
        return $this->attributes["id"];
    }

    public function setId($id)
    {
        $this->attributes["id"] = $id;
    }

    public function getDate()
    {
        return $this->attributes["date"];
    }

    public function setDate($date)
    {
        $this->attributes["date"] = $date;
    }

    public function getAction()
    {
        return $this->attributes["action"];
    }

    public function setAction($action)
    {
        $this->attributes["action"] = $action;
    }

    public function combo()
    {
        return $this->belongsTo(Combo::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}