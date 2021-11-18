<?php

namespace App\Repositories;

use App\Models\Hotel;
use App\Repositories\BaseRepository;

/**
 * Class HotelRepository
 * @package App\Repositories
 * @version November 17, 2021, 10:18 pm PST
*/

class HotelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'HotelName',
        'address',
        'date_time_checkin',
        'date_time_checkout',
        'room_price'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Hotel::class;
    }
}
