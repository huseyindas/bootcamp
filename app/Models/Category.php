<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $fillable = ['name'];

    public function product_category(){
     return $this->hasMany("App/Models/Product", "category_id", "id");
    }
}
