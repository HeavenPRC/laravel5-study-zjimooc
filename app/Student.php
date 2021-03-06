<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    const SEX_UN = 10;

    const SEX_BOY = 20;

    const SEX_GRIL = 30;

    protected $table = 'student';

    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'age', 'sex'];

    protected function getDateFormat()
    {
   	   return time();
    }

    protected function asDateTime($val)
    {
    	return $val;
    }

    public static function sex($ind = null)
    {
       $arr = [
            self::SEX_UN => '未知',
            self::SEX_BOY => '男',
            self::SEX_GRIL => '女'
       ];

       if ($ind!==null) {
          return array_key_exists($ind, $arr) ? $arr[$ind] : $arr[self::SEX_UN];
       }
       return $arr;
    }
}