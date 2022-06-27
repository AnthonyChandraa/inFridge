<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecipeDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $keyType = 'string';

    public function recipe(){
        return $this->belongsTo(Recipe::class);
    }

    public function item(){
        return $this->belongsTo(Item::class);
    }
}
