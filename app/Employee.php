<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
 
        protected $fillable = [
            'dept_id',
            'name',
        ];
     
        //belongsTo設定
        public function depts()
        {
            return $this->belongsTo('AppDept','dept_id','dept_id');
        }
}
