<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uni_Major extends Model
{
    protected $table = 'uni_majors';
    protected $fillable = ['id','university_id','major_id','budget'];
    public function major()
    {
        return $this->belongsTo('App\Major');
    }
    public function university()
    {
        return $this->belongsTo('App\University');
    }
}
