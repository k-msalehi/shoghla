<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'category_id', 'title', 'slug','tel','image','keywords','address','description','note'];
    // protected $guarded = [];

}
