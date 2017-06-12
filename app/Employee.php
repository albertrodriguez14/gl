<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    //
    protected $table = "employees";
     protected $primarykey ="id";
    protected $fillable = ["name_employee"];
}
