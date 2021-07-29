<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'careers';
    protected $fillable = ['id','jobtitle','major_id','r','i','a','s','e','c','overview','jobdesc','basicskill','socialskill','peopleskill','personality','img'];
    public function major()
    {
        return $this->belongsTo('App\Major');
    }
}
