<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PasswordReset extends Model {
    protected $table = 'password_resets';
    protected $primaryKey = 'token';
    const UPDATED_AT = null;

    protected $fillable = [
        'email',
        'token',
        'created_at'
    ];
}
