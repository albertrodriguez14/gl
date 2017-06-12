<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assigned extends Model
{
  protected $table = "assigneds";
   protected $primarykey ="id";
    protected $fillable =["employee_id","ticket_id"];


 public function employee(){

      return $this->hasMany("App\Employee","id");
 }

  public function Ticket(){

      return $this->hasMany("App\Ticket","id");
  }
  public function sale(){
    return $this->belongsTo("App\Sale","assigned_id");

  }
}
