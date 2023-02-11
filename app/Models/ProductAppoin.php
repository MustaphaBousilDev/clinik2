<?php

namespace App\Models;
use  App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAppoin extends Model
{ 
    protected $table='product_appoins';
    
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    use HasFactory;
}
