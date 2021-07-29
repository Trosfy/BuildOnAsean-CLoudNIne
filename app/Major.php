<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    //
    protected $table = 'majors';
    protected $fillable = ['id','name','stream-science','stream-social','description','img'];
    public function uni_majors()
    {
        return $this->hasMany('App\Uni_Major');
    }
    public function careers()
    {
        return $this->hasMany('App\Career', 'major_id','id');
    }
}
