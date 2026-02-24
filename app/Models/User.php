<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\softDeletes;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];


        protected $hidden =[
            'password' , 
            'remmber_token',
        ] 
    ;
    public function isAdmin(): bool
    {
        return $this->role === 'admin' ;
    }



}
