<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Appointment
 * @package App\Models
 * @version October 28, 2021, 5:59 am UTC
 *
 * @property string $patient
 * @property string|\Carbon\Carbon $date
 * @property string $dentist
 * @property number $cost
 * @property string $procedure
 */
class Appointment extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'appointment';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patient',
        'date',
        'dentist',
        'cost',
        'procedure'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patient' => 'string',
        'date' => 'datetime',
        'dentist' => 'string',
        'cost' => 'decimal:2',
        'procedure' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patient' => 'required|string|max:255',
        'date' => 'required',
        'dentist' => 'required|string|max:255',
        'cost' => 'required|numeric',
        'procedure' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
