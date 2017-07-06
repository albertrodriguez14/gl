<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assigned extends Model
{
  protected $table = "assigneds";
   protected $primarykey ="id";
    protected $fillable =["employee_id","ticket_id"];


 public function employee(){

      return $this->belongsTo("App\Employee");
 }

  public function ticket(){

      return $this->belongsTo("App\Ticket");
  }
  public function sale(){
    return $this->hasMany("App\Sale");

  }
 public function scopeAssigneds(){

   return  $this->select('assigneds.id', 'employees.name_employee','tickets.ticket_number')
                           ->join('employees','assigneds.employee_id','=','employees.id')
                           ->join( 'tickets' , 'assigneds.ticket_id' ,'=' ,'tickets.id')
                           ->get();

 }

}
