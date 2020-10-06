<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upc extends Model
{
    use HasFactory;

protected $table = 'apl_upc';


    public function getIngre()
    {


        return $this->hasOne('App\Models\Ingredient','upc','upc');
        //return $this->belongsTo(Staff::class,'verify_staff','no');

    }


    public function news()
    {


        return $this->hasMany('App\Models\News');
        //return $this->belongsTo(Staff::class,'verify_staff','no');

    }
}
