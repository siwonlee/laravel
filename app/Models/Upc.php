<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upc extends Model
{
    use HasFactory;

protected $table = 'apl_upc';
protected $fillable = [

    'upc'  , 
    'category' ,
     'subcategory' ,     
     'brand'   , 
   'description' ,
    'size' ,
    'uom' ,               
     
    'verify'  ,
    'add_date'  ,
    'edit_date'  ,
    'verify_date'  ,

    'add_staff',
    'edit_staff',
    'verify_staff',

    'pic' ,       
    'pic1' ,
    'pic2',
    'created_at' 


];


    public function getIngre()
    {


        return $this->hasOne('App\Models\Ingredient','upc','upc');
        //return $this->belongsTo(Staff::class,'verify_staff','no');

    }



}
