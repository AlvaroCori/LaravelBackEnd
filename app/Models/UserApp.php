<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserApp extends Model{
    use HasFactory;
    protected $table = 'users_app';
    protected $fillable = ["name", "email"];
}