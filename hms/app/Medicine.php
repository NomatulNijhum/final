<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{


  protected $fillable = [

              'medicine_name',
              'category_name'.
              'description',
              'price',
              'manufactured_by',


  ];



}
