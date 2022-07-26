<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug'];
    public function getRouteKeyName(){
        return 'slug';
    }
    public function image(){
        return $this->hasMany(Image::class);
    }
}
