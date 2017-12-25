<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected function getDateFormat()
    {
   	   return time();
    }

    protected function asDateTime($val)
    {
    	return $val;
    }

}