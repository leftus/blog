<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class EmployeeJobRequire extends Model
{
  protected $table = 'employee_job_require';
  public $timestamps = false;
  public function employee(){
    return $this->belongsTo(Employee::class, 'employee_id');
  }
}
