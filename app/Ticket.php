<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table ="tickets";
    protected $primarykey = "id";
    protected $fillable = ["ticket_number"];


    public function assigned(){

      return $this->belongsTo("App\Assigned");
    }
}
