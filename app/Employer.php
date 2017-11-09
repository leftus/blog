<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EmployerRequire;

class Employer extends Model
{
  protected $table = 'employers';
  //public $timestamps = false;
  public function employer_require(){
    return $this->hasOne(EmployerRequire::class, 'employer_id');
  }
  
}
