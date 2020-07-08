<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table = 'biodata',
	          $fillable = ['user_id','uuid','nim','agama','ttl','jk','alamat','jurusan','prodi','perguruan','gambar'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function getGambar()
	{
		if (!$this->gambar) {
			return asset('frontend/assets/img/users/default.png');
		} else {
			return asset('frontend/assets/img/profiles/' . $this->gambar);
		}
	}
}
