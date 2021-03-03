<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Item extends Model {
    protected $table = 'items';
    protected $primaryKey = 'item_id';

    protected $fillable = [
        'name',
        'description',
        'rating',
        'photo',
        'user_id'
    ];
    
    
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
