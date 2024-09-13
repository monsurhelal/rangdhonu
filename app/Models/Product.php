<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function getCategory(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function getSubCategory(){
        return $this->belongsTo(SubCategory::class,'sub_category_id','id');
    }
    public function getColour(){
        return $this->hasMany(ProductColour::class,'product_id','id');
    }
    public function getSize(){
        return $this->hasMany(ProductSize::class,'product_id','id');
    }



}
