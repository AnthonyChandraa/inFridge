<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory, SoftDeletes;

    public function fridgeDetail(){
        return $this->hasMany(FridgeDetail::class);
    }

    public function recipeDetail(){
        return $this->hasMany(RecipeDetail::class);
    }

    public function itemCategory(){
        return $this->belongsTo(ItemCategory::class);
    }
}
