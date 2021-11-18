<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Hotel
 * @package App\Models
 * @version November 17, 2021, 10:18 pm PST
 *
 * @property string $HotelName
 * @property string $address
 * @property string|\Carbon\Carbon $date_time_checkin
 * @property string|\Carbon\Carbon $date_time_checkout
 * @property number $room_price
 */
class Hotel extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'hotel';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'HotelName',
        'address',
        'date_time_checkin',
        'date_time_checkout',
        'room_price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'HotelName' => 'string',
        'address' => 'string',
        'date_time_checkin' => 'datetime',
        'date_time_checkout' => 'datetime',
        'room_price' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'HotelName' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'date_time_checkin' => 'required',
        'date_time_checkout' => 'required',
        'room_price' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
