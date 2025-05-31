<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'gym_id', 'first_name', 'age', 'contact', 'membership_status'];


    public function user()
{
    return $this->belongsTo(User::class);
}

}
