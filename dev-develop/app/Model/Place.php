<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Place extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'place_name', 'description'
    ];

    public function TransactionIn(){
        return $this->hasMany(TransactionIn::class);
    }

    public function TransactionOut(){
        return $this->hasMany(TransactionOut::class);
    }
}
