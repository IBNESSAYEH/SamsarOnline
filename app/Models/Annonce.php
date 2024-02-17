<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function type(){
        return $this->belongsTo(Type::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function caracteristiques(){
        return $this->hasMany(Caracteristique::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
