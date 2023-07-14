<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function brand(){
        return $this->belongsTo(Brand::class,);
     }

    public function category(){
        return $this->belongsTo(Category::class,'categories_id','id');
     }
    public function subcategory(){
        return $this->belongsTo(SubCategory::class,'subcategories_id','id');
     }
}
