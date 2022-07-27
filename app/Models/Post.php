<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug','image','link','body','tag_id'];
    public function getRouteKeyName(){
        return 'slug';
    }
    public function tag(){
        return $this->belongsTo(Tag::class);
    }
}
