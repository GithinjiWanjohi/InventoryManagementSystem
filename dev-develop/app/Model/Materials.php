<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Materials extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'categories_id'
    ];

    public function Categories(){
        return $this->belongsTo(Categories::class);
    }

    public function TransactionIn(){
        return $this->hasMany(TransactionIn::class);
    }

    public function TransactionOut(){
        return $this->hasMany(TransactionOut::class);
    }
}
