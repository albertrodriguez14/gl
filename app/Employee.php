<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    //
    protected $table = "employees";
     protected $primarykey ="id";
    protected $fillable = ["employee_name"];

    public function assigned(){

      return $this->belongsTo("App\Assigned","employee_id");
    }

      public function sale(){
           return $this->belongsTo("App/Sale","employee_id");
      }
}
