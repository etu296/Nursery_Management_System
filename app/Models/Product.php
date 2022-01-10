<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='_products';
    protected $guarded=[];

    public function pcategory()
    {
        return $this->belongsTo(Pcetagory::class,'product_cetagory','id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'plant_cetagory','id');
    }
}
