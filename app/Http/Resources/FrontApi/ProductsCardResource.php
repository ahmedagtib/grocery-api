<?php

namespace App\Http\Resources\FrontApi;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductsCardResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id'          => $this->id,  
            'title'       => $this->title,
            'slug'        => $this->slug,
            'price'       => $this->price,
            'discount'    => $this->discount,
            'image'       => $this->image,
            'discounted_price'=>$this->discounted_price,
            'in_stock'       =>$this->in_stock

         
        ];
    }
}
