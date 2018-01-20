<?php

namespace App\Food\Order;

use App\Food\Address\Address;
use App\Food\User\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'user_id','address_id','amount',
        'delivery_day', 'delivery_time','status', 'delivered'
        ];

    protected $dates  = ['created_at','deleted_at','updated_at'];

    protected  function user(){
        return $this->belongsTo(User::class);
    }

    public function address(){
        return $this->belongsTo(Address::class);
    }

}
