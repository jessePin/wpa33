<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $fillable = ['name','nrc','address','center']; 

    public function scopeSearch($query,$search){
        return $query->where('center','like','%'.$search.'%');
    }
}
