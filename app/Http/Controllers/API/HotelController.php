<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;   
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Flash;
use Response; 

class HotelController extends Controller {
    public $successStatus = 200;

    public function getAllHotels(Request $request) {
        $token = $request['t']; // t = token
        $id = $request['u']; // u = userid

        $user = User::where('id', $id)->where('remember_token', $token)->first();


        if ($user != null) {
            $hotel = Hotel::all();

            return response()->json($hotel, $this->successStatus);
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }        
    }  




public function getHotelName(Request $request) {
    $HotelName = $request['HotelName']; // pid = post id
    $token = $request['t']; // t = token
    $id = $request['u']; // u = userid

    $user = User::where('id', $id)->where('remember_token', $token)->first();

    if ($user != null) {
        $hotel = Hotel::where('HotelName', $HotelName)->first();

        if ($hotel != null) {
            return response()->json($hotel, $this->successStatus);
        } else {
            return response()->json(['response' => 'Booked Hotel Not Found!'], 404);
        }            
    } else {
        return response()->json(['response' => 'Bad Call'], 501);
    }  
}
public function searchAddress(Request $request) {
    $address = $request['address']; // address
    $token = $request['t']; // t = token
    $userid = $request['u']; // u = userid

    $user = User::where('id', $userid)->where('remember_token', $token)->first();

    if ($user != null) {
        $hotel = Hotel::where('address', 'LIKE', '%' . $address . '%')
            ->orWhere('address', 'LIKE', '%' . $address . '%')
            ->get();
        // SELECT * FROM posts WHERE address LIKE '%address%' OR address LIKE '%HotelName%'
        if ($hotel != null) {
            return response()->json($hotel, $this->successStatus);
        } else {
            return response()->json(['response' => 'Not found!'], 404);
        }            
    } else {
        return response()->json(['response' => 'Bad Call'], 501);
    }  
}
}
