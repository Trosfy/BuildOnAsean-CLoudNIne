<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $table = 'universities';
    protected $fillable = ['id','name','details','img'];

    public function uni_majors()
    {
        return $this->hasMany('App\Uni_Major');
    }
}
