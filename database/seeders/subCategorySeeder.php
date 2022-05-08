<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;
class subCategorySeeder extends Seeder
{
 
     protected   $categories = [];

    public function __construct(){
        $this->categories = [
            

          ["image" =>  asset('storage/categories/vegetables_fruits.png'),'is_parent'=> false,'category_id'=> Category::where('title','like','vegetables & fruits')->pluck('id')[0] ,"category"  =>"vegetables"],
          ["image" =>  asset('storage/categories/vegetables_fruits.png'),'is_parent'=> false,'category_id'=> Category::where('title','like','vegetables & fruits')->pluck('id')[0] ,"category"  =>"fruits"],
        
       ];
      
      // Category::where('title','like','vegetables & fruits')->pluck('id')[0]
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
                 'is_parent'  => $item['is_parent'],
                 'category_id'  => $item['category_id'],
            ]);
        }   
    }
}
