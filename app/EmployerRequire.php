<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employer;

class EmployerRequire extends Model
{
  protected $table = 'employer_require';
  public $timestamps = false;
  public function employer(){
    return $this->belongsTo(Employer::class, 'employer_id');
  }
}
