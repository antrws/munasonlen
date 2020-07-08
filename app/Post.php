<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','admin_id','content','slug','thumbnail',];

    public function admin()
    {

    	return $this->belongsTo('App\Admin');
    }

    public function thumbnail()
    {
    	if ($this->thumbnail) {
		    	return $this->thumbnail;
		    }else
		    {
		    	return asset('landing/assets/images/thumbnail.jpg');
		    }
    }
}
