<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
   
  protected   $categories = [];
  
  //$slug = Str::of('Laravel Framework')->slug('-');
 

  public function __construct(){
      $this->categories = [

        ["image" =>  asset('storage/categories/cleaning_matirles.png')     ,"category"  => "Clean materials"],
        ["image" =>  asset('storage/categories/Noodles_Spices.png')    ,"category"  =>"Noodles & Spices"],
        ["image" =>  asset('storage/categories/Personnel_care.png')    ,"category"  =>"Personnel Care"],
        ["image" =>  asset('storage/categories/Petcare.png')    ,"category"  =>"Pet Care"],
        ["image" =>  asset('storage/categories/Meat_Seafood.png')    ,"category"  =>"Meat & Seafood"],
        ["image" =>  asset('storage/categories/Electronic.png')    ,"category"  =>"Electronic"],
        ["image" =>  asset('storage/categories/vegetables_fruits.png')    ,"category"  =>"vegetables & fruits"],
        ["image" =>  asset('storage/categories/Grocery-Staples.jpg')    ,"category"  =>"Grocery & Staples"],
        ["image" =>  asset('storage/categories/Dairy_Eggs.png')    ,"category"  =>"Dairy  & Eggs"],
        ["image" =>  asset('storage/categories/Beverages.png')    ,"category"  =>"Beverages"],
        ["image" =>  asset('storage/categories/Snacks.png')    ,"category"  =>"Snacks"]
     ];
    
    
  }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       foreach($this->categories as $item){
           Category::insert([
                'title' => $item['category'],
                'slug'  => Str::of($item['category'])->slug('-'),
                'description' => $item['category'],
                'icon'       =>   $item['image'],
                'is_parent'  => true
           ]);
       }   
    }
}
