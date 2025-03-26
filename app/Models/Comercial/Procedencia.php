<?php

namespace App\Models\Comercial;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Procedencia extends Model{
  
  use SoftDeletes;

  protected $table ='comercial_procedencias';
  protected $primaryKey = 'id';
  protected $fillable = ['id','procedencia'];

}
