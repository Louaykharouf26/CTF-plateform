<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Challenges extends Model
{
    use Notifiable;
    protected $guard = 'challenge';
    protected $fillable = [
        'taskname', 'score', 'answer',
    ];
    protected $hidden = [
      'remember_token',
    ];

    
}
