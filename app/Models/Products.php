<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Products extends Model
{
    use HasFactory;
    
    protected $casts = [
        'price'     => 'integer',
        'discount'  => 'integer',
        'inventory' => 'integer'
    ];
    
    protected $appends = ['discounted_price','in_stock'];

    public $timestamps = true;
    protected $fillable = [
                           'title',
                           'slug',
                           'description',
                           'price',
                           'discount',
                           'inventory',
                           'image',
                           'voted',
                           'approved',
                           'hidden',
                           'category_id'
                        ];
    

    public function category()
    {
       return $this->belongsTo(Category::class,'category_id');
    }        
    
    public function getApprovedAttribute($value)
    {
        return ($value == 1) ? true : false;
    }

    public function getHiddenAttribute($value)
    {
        return ($value == 1) ? true : false;
    }

  


    public function getDiscountedPriceAttribute(){
        return  $this->price - ($this->price  * ($this->discount  / 100));
    }

    public function getInStockAttribute(){
        return  ($this->inventory > 0) ? true : false;
        
    }

     public  function scopeCard($query){
         return $query->select('id','title','slug','price','image','discount','inventory');
     }

}
