<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Offer extends Model
{
    //
    const REMEMBER_TRUE = 'ON';
    const REMEMBER_FALSE = 'OFF';


    use Notifiable;

    protected $table = 'offers';

    const CURRENCY_UAH = 'UAH';
    const CURRENCY_EUR = 'EUR';
    const CURRENCY_USD = 'USD';

    public static $typeCurrency = [
        self::CURRENCY_UAH, self::CURRENCY_USD, self::CURRENCY_EUR,
    ];



    protected $fillable = [
        'type_object', 'price', 'type_price', 'type_wall', 'number_rooms', 'user_id', 'phone', 'information', 'status'
    ];
}
