<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EmployeeJobRequire;

class Employee extends Model
{
  protected $table = 'employees';
  //public $timestamps = false;
  protected $casts = [
      'skill' => 'array',
      'job_intent' => 'array',
      'make_food' => 'array',
  ];
  public function job_require(){
    return $this->hasOne(EmployeeJobRequire::class, 'employee_id');
  }
  
}
