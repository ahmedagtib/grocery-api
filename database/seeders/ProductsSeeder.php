<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{


    protected   $products = [];

    public function __construct(){
        $this->products = [
            [
                'title' => 'apple',
                'slug' => Str::of('apple')->slug('-'),
                'description'=>'apple',
                'price' => rand(1,6),
                'discount' => rand(1,10),
                'inventory' => rand(20,150),
                'image'=> asset('storage/products/fruits/apple.jpg') ,
                'voted'=> rand(10,90),
                'approved' => true,
                'hidden' => false,
                'category_id' => Category::where('title','like','fruits')->pluck('id')[0]
            ],
            [
                'title' => 'banane',
                'slug' => Str::of('banane')->slug('-'),
                'description'=>'banane',
                'price' => rand(1,6),
                'discount' => rand(1,10),
                'inventory' => rand(20,150),
                'image'=> asset('storage/products/fruits/banane.jpg') ,
                'voted'=> rand(10,90),
                'approved' => true,
                'hidden' => false,
                'category_id' => Category::where('title','like','fruits')->pluck('id')[0]
            ],
            [
                'title' => 'cucumber',
                'slug' => Str::of('cucumber')->slug('-'),
                'description'=>'cucumber',
                'price' => rand(1,6),
                'discount' => rand(1,10),
                'inventory' => rand(20,150),
                'image'=> asset('storage/products/fruits/cucumber.jpg') ,
                'voted'=> rand(10,90),
                'approved' => true,
                'hidden' => false,
                'category_id' => Category::where('title','like','fruits')->pluck('id')[0]
            ],
            [
                'title' => 'grapes',
                'slug' => Str::of('grapes')->slug('-'),
                'description'=>'grapes',
                'price' => rand(1,6),
                'discount' => rand(1,10),
                'inventory' => rand(20,150),
                'image'=> asset('storage/products/fruits/grapes.jpg') ,
                'voted'=> rand(10,90),
                'approved' => true,
                'hidden' => false,
                'category_id' => Category::where('title','like','fruits')->pluck('id')[0]
            ],
            [
                'title' => 'leamon',
                'slug' => Str::of('leamon')->slug('-'),
                'description'=>'leamon',
                'price' => rand(1,6),
                'discount' => rand(1,10),
                'inventory' => rand(20,150),
                'image'=> asset('storage/products/fruits/leamon.jpg') ,
                'voted'=> rand(10,90),
                'approved' => true,
                'hidden' => false,
                'category_id' => Category::where('title','like','fruits')->pluck('id')[0]
            ],
            [
                'title' => 'orange',
                'slug' => Str::of('orange')->slug('-'),
                'description'=>'orange',
                'price' => rand(1,6),
                'discount' => rand(1,10),
                'inventory' => rand(20,150),
                'image'=> asset('storage/products/fruits/orange.jpg') ,
                'voted'=> rand(10,90),
                'approved' => true,
                'hidden' => false,
                'category_id' => Category::where('title','like','fruits')->pluck('id')[0]
            ],
            [
                'title' => 'peach',
                'slug' => Str::of('peach')->slug('-'),
                'description'=>'peach',
                'price' => rand(1,6),
                'discount' => rand(1,10),
                'inventory' => rand(20,150),
                'image'=> asset('storage/products/fruits/peach.jpg') ,
                'voted'=> rand(10,90),
                'approved' => true,
                'hidden' => false,
                'category_id' => Category::where('title','like','fruits')->pluck('id')[0]
            ],
            [
                'title' => 'pear',
                'slug' => Str::of('pear')->slug('-'),
                'description'=>'pear',
                'price' => rand(1,6),
                'discount' => rand(1,10),
                'inventory' => rand(20,150),
                'image'=> asset('storage/products/fruits/pear.jpg') ,
                'voted'=> rand(10,90),
                'approved' => true,
                'hidden' => false,
                'category_id' => Category::where('title','like','fruits')->pluck('id')[0]
            ],
            [
                'title' => 'pineapple',
                'slug' => Str::of('pineapple')->slug('-'),
                'description'=>'pineapple',
                'price' => rand(1,6),
                'discount' => rand(1,10),
                'inventory' => rand(20,150),
                'image'=> asset('storage/products/fruits/pineapple.jpg') ,
                'voted'=> rand(10,90),
                'approved' => true,
                'hidden' => false,
                'category_id' => Category::where('title','like','fruits')->pluck('id')[0]
            ],
            [
                'title' => 'strawberry',
                'slug' => Str::of('strawberry')->slug('-'),
                'description'=>'strawberry',
                'price' => rand(1,6),
                'discount' => rand(1,10),
                'inventory' => rand(20,150),
                'image'=> asset('storage/products/fruits/strawberry.jpg') ,
                'voted'=> rand(10,90),
                'approved' => true,
                'hidden' => false,
                'category_id' => Category::where('title','like','fruits')->pluck('id')[0]
            ],
            [
                'title' => 'tomato',
                'slug' => Str::of('tomato')->slug('-'),
                'description'=>'tomato',
                'price' => rand(1,6),
                'discount' => rand(1,10),
                'inventory' => rand(20,150),
                'image'=> asset('storage/products/fruits/tomato.jpg') ,
                'voted'=> rand(10,90),
                'approved' => true,
                'hidden' => false,
                'category_id' => Category::where('title','like','fruits')->pluck('id')[0]
            ],
            [
                'title' => 'watermelon',
                'slug' => Str::of('watermelon')->slug('-'),
                'description'=>'watermelon',
                'price' => rand(1,6),
                'discount' => rand(1,10),
                'inventory' => rand(20,150),
                'image'=> asset('storage/products/fruits/watermelon.jpg') ,
                'voted'=> rand(10,90),
                'approved' => true,
                'hidden' => false,
                'category_id' => Category::where('title','like','fruits')->pluck('id')[0]
            ],
            [
                'title' => 'carrot',
                'slug' => Str::of('carrot')->slug('-'),
                'description'=>'carrot',
                'price' => rand(1,6),
                'discount' => rand(1,10),
                'inventory' => rand(20,150),
                'image'=> asset('storage/products/vegetables/carrot.jpg') ,
                'voted'=> rand(10,90),
                'approved' => true,
                'hidden' => false,
                'category_id' => Category::where('title','like','vegetables')->pluck('id')[0]
            ],
            [
                'title' => 'corn',
                'slug' => Str::of('corn')->slug('-'),
                'description'=>'corn',
                'price' => rand(1,6),
                'discount' => rand(1,10),
                'inventory' => rand(20,150),
                'image'=> asset('storage/products/vegetables/corn.jpg') ,
                'voted'=> rand(10,90),
                'approved' => true,
                'hidden' => false,
                'category_id' => Category::where('title','like','vegetables')->pluck('id')[0]
            ],
            [
                'title' => 'eggplant',
                'slug' => Str::of('eggplant')->slug('-'),
                'description'=>'eggplant',
                'price' => rand(1,6),
                'discount' => rand(1,10),
                'inventory' => rand(20,150),
                'image'=> asset('storage/products/vegetables/eggplant.jpg') ,
                'voted'=> rand(10,90),
                'approved' => true,
                'hidden' => false,
                'category_id' => Category::where('title','like','vegetables')->pluck('id')[0]
            ],
            [
                'title' => 'garlic',
                'slug' => Str::of('garlic')->slug('-'),
                'description'=>'garlic',
                'price' => rand(1,6),
                'discount' => rand(1,10),
                'inventory' => rand(20,150),
                'image'=> asset('storage/products/vegetables/garlic.jpg') ,
                'voted'=> rand(10,90),
                'approved' => true,
                'hidden' => false,
                'category_id' => Category::where('title','like','vegetables')->pluck('id')[0]
            ],
            [
                'title' => 'lattuce',
                'slug' => Str::of('lattuce')->slug('-'),
                'description'=>'lattuce',
                'price' => rand(1,6),
                'discount' => rand(1,10),
                'inventory' => rand(20,150),
                'image'=> asset('storage/products/vegetables/lattuce.jpg') ,
                'voted'=> rand(10,90),
                'approved' => true,
                'hidden' => false,
                'category_id' => Category::where('title','like','vegetables')->pluck('id')[0]
            ],
            [
                'title' => 'onion',
                'slug' => Str::of('onion')->slug('-'),
                'description'=>'onion',
                'price' => rand(1,6),
                'discount' => rand(1,10),
                'inventory' => rand(20,150),
                'image'=> asset('storage/products/vegetables/onion.jpg') ,
                'voted'=> rand(10,90),
                'approved' => true,
                'hidden' => false,
                'category_id' => Category::where('title','like','vegetables')->pluck('id')[0]
            ],
            [
                'title' => 'potato',
                'slug' => Str::of('potato')->slug('-'),
                'description'=>'potato',
                'price' => rand(1,6),
                'discount' => rand(1,10),
                'inventory' => rand(20,150),
                'image'=> asset('storage/products/vegetables/potato.jpg') ,
                'voted'=> rand(10,90),
                'approved' => true,
                'hidden' => false,
                'category_id' => Category::where('title','like','vegetables')->pluck('id')[0]
            ],
            [
                'title' => 'squash',
                'slug' => Str::of('squash')->slug('-'),
                'description'=>'squash',
                'price' => rand(1,6),
                'discount' => rand(1,10),
                'inventory' => rand(20,150),
                'image'=> asset('storage/products/vegetables/squash.jpg') ,
                'voted'=> rand(10,90),
                'approved' => true,
                'hidden' => false,
                'category_id' => Category::where('title','like','vegetables')->pluck('id')[0]
            ]
        
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
        Products::insert($this->products);
       
    }
}
