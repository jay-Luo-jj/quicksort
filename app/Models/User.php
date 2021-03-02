<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        'username',
        'email',
        'contact_details',
        'photo',
        'location',
        'marketing_consent',
        'password',
    ];

    protected $hidden = [
        'password',
        'marketing_consent',
        'remember_token',
    ];

    public function setPasswordAttribute($password) {
        $this->attributes['password'] = bcrypt($password);
    }
    
    public function item(){
        return $this->hasMany(Items::class);
    }
}
