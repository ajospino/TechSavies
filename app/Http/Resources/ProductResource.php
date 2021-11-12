<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->getId() ,
            'name' => $this->getName() ,
            'model' => $this->getModel(),
            'category' => $this->getCategory() ,
            'brand' => $this->getBrand() ,
            'stock' => $this->getStock() ,
            'price' => $this->getPrice() ,
        ];
    }
}
