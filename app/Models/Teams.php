<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use Notifiable;
    protected $guard = 'teams';
    protected $fillable = [
        'teamname', 'score', 'password',
    ];
    protected $hidden = [
      'password', 'remember_token',
    ];

    public function users() {
      return $this ->hasMany(User::class);
    }
    public function scopeOrderByScore($query)
{
    return $query->orderBy('score', 'desc');
}
}
