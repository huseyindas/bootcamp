<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use SoftDeletes;
    protected $table = 'sliders';
    protected $fillable = ['slider_name', 'photo'];
}
