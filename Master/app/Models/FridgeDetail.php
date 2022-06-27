<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FridgeDetail extends Model
{
    use HasFactory,SoftDeletes;

    protected $keyType = 'string';

    public function fridge(){
        return $this->belongsTo(Fridge::class);
    }

    public function item(){
        return $this->belongsTo(Item::class);
    }
}
