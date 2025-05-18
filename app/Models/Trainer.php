<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trainer extends Model
{
    use HasFactory;

    protected $table = 'trainers';
    protected $fillable = [
        'trainer_id',
        'user_id',
        'name',
        'specialty',
        'experience',
        'contact',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');  // In case you need to fetch the related user
    }
    
        
}
