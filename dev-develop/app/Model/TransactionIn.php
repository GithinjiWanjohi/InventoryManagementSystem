<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class TransactionIn extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dateTime_in', 'staff_no', 'material_id', 'place_id', 'description', 'quantity',
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Materials(){
        return $this->belongsTo(Materials::class);
    }

    public function Place(){
        return $this->belongsTo(Place::class);
    }
}
