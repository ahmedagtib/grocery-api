<?php

namespace App\Http\Controllers\FrontApi;
use App\Http\Controllers\FrontApi\TraitApi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;
use App\Http\Resources\FrontApi\HomeResource;

class ProductsController extends Controller
{
  use TraitApi;
  
    public function index(){
        try{
            $categories =   Category::where('is_parent',true)->get();
            $products   =   Products::Card()->take(8)->get();
      
            $data = (object)['products'=>$products,'categories'=>$categories]; 

             return   new HomeResource($data);

        }catch(\Exception $e) { 
            return   $this->server_errors($e->getMessage());
        }
     
    }


    public function search(Request $request){
        try{
     
           $products  =  Products::where('approved',true);
      
           if(!$request->has('search','price','discount')) {
              return 'no';  
           }


           $products->where('title','like','%'.$request->search.'%')->orWhere('description','like','%'.$request->search.'%');
            
         return $products->paginate(5);  


        }catch(\Exception $e) { 
            return   $this->server_errors($e->getMessage());
        }
     
    }










    public function cart(Request $request){
        try{



         return $request->all();


          $products = [];



           
           foreach($request->cart as  $key=>$item){
                $product  =  Products::select('id','image','title','slug','discount','price')->where('id',$item['product_id'])->get();

                $products[$key]['quantity'] = $item['quantity'];  
                $products[$key]['product'] = $product; 
           }

            return $products;
           //return   array_merge($products);;
   

        }catch(\Exception $e) { 
            return   $this->server_errors($e->getMessage());
        }
     
    }




    
}
