<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Products;
class Category extends Model
{
    use HasFactory;
    protected $hidden = ['id'];

    public $timestamps = true;
    protected $fillable = ['title','slug','description','icon','is_parent','category_id'];

    public function children()
    {
      return $this->hasMany(Category::class,'category_id');
    }

    public function products()
    {
      return $this->hasMany(Category::class,'category_id');
    }
}
