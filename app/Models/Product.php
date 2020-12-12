<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['product_name', 'price', 'photo', 'user_id', 'category_id', 'status', 'category_name'];


  public function user(){
      return $this->belongsTo(User::class);
    }

  public function category(){
       return $this->belongsTo(Category::class);
  }
}
