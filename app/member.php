<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    //
    //protected $fillable = ['empno', 'name','typeflag','email'];
    protected $fillable = [
        'id',
        'empno',
        'name',
        'typeflag',
        'dep',
        'gender',
        'email',
    ]; 


    public function contracts()
    {   
        //return $this->hasMany('App\contract','id','emp_id');
        //return $this->hasOne('App\contract','emp_id');
        return $this->hasOne('App\contract','emp_id');
    }
}