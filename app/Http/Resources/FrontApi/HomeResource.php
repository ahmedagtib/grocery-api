<?php

namespace App\Http\Resources\FrontApi;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\FrontApi\ProductsCardResource;
use App\Http\Resources\FrontApi\CategoryResource;
class HomeResource extends JsonResource
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
            'products'   => ProductsCardResource::collection($this->products),
            'categories' => CategoryResource::collection($this->categories)
        ];
    }

    public function with($request){
        return [
           'message'=> 'success',
           'code'   => 200 
        ];
    }
}
