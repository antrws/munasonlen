<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';
    protected $fillable = ['nama_pengirim','no_tujuan','gambar','berkas','uuid','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function getAvatar()
	{
		if (!$this->gambar) {
			return asset('frontend/assets/img/users/default.png');
		} else {
			return asset('frontend/assets/img/payments/' . $this->gambar);
		}
	}
}
