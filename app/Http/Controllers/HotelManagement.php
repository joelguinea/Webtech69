<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\HotelManagement;


class HotelManagerControllerAPI extends Controller
{
    public function index()
    {
        $hotels = HotelManagement::all();

        return response()->json(['hotels'=>$hotels],200);
    }
}