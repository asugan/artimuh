<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postimage extends Model
{
    use HasFactory;
    protected $fillable = ['baslik', 'text' , 'category' ,'basimage', 'image1', 'image2', 'image3' ,'image4'];
}