<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table ="sales";
    protected $primarykey =" id";
    protected $fillable = ["employee_id","assigned_id","sale_value","sale_date"];

public function  employee(){

    return $this->hasMany("App\Employee","id");

}

public function assigned(){

   return $this->hasMany("App\Assigned","id");
}


}
