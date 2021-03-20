<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    //


    public function members()
    {   
        //return $this->belongsTo('App\member','id','emp_id');
        //return $this->belongsTo('App\member','id','empno');
        return $this->belongsTo('App\member','empno');
    }
}
