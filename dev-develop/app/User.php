<?php

namespace App;

use App\Model\TransactionIn;
use App\Model\TransactionOut;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function TransactionIn(){
        return $this->hasMany(TransactionIn::class);
    }

    public function TransactionOut(){
        return $this->hasMany(TransactionOut::class);
    }
}
