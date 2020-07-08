<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Ramsey\Uuid\Uuid as Generator;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','uuid','email', 'password','role','kontak','status','pembayaran',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function biodata()
    {
        return $this->hasOne(Biodata::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
    
    protected static function boot()
    {
        parent::boot();
        static::creating(function($model){
            try {
                $model->uuid = Generator::uuid4()->toString();
            } catch (UnsatisfiedDependencyException $e) {
                abort(500,$e->getMessage());
            }
        });
    }
}
