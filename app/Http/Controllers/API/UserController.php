<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Logs;
use App\Models\Hotel;
use App\Models\User;
use Flash;
use Response;

class UserController extends Controller
{
    public $successStatus = 200;

    public function login() {
        if (Auth::attempt(['username' => request('username'), 'password' => request('password')])) {

            $user = Auth::user();

            $success['token'] = Str::random(64);
            $success['username'] = $user->username;
            $success['id'] = $user->id;
            $success['name'] = $user->name;

             // SAVE TOKEN
             $user->remember_token = $success['token'];
             $user->save();
             return response()->json($success, $this->successStatus);

            $logs = new Logs();
            $logs->userid = $user->id;
            $logs->log = "Login";
            $logs->logdetails = "User $user->name has logged in to my system";
            $logs->logtype = "API login";
            $logs->save();

           


        } else {
            return response()->json(['response' => 'User not found'], 404);
        }
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['response' => $validator->errors()], 401);
        } else {
            $input = $request->all();

            if (User::where('email', $input['email'])->exists()) {
                return response()->json(['response' => 'Email already exists'], 401);
            } elseif(User::where('username', $input['username'])->exists()) {
                return response()->json(['response' => 'Username already exists'], 401);
            } else {
                $input['password'] = bcrypt($input['password']);
                $user = User::create($input);

                $success['token'] = Str::random(64);
                $success['username'] = $user->username;
                $success['id'] = $user->id;
                $success['name'] = $user->name;

                return response()->json($success, $this->successStatus);
            }
        }
    }


    
public function booked(Request $request) {
    $validator = Validator::make($request->all(), [
        'HotelName' => 'required',
        'address' => 'required',
        'date_time_checkin' => 'required',
        'date_time_checkout' => 'required',
        'room_price' => 'required',
    
    ]);

    if ($validator->fails()) {
        return response()->json(['response' => $validator->errors()], 401);
  
    } else {
        $input = $request->all();

    if(Hotel::where('HotelName', $input['HotelName'])->exists()) {
        return response()->json(['response' => 'Hotel Name is Invalid'], 401);
    }else{
            $hotel = Hotel::create($input);

            $success['HotelName'] = $hotel->HotelName;
            $success['address'] = $hotel->address;
            $success['date_time_checkin'] = $hotel->date_time_checkin;
            $success['date_time_checkout'] = $hotel->date_time_checkout;
            $success['room_price'] = $hotel->room_price;
           

            return response()->json($success, $this->successStatus);
        }
    }

}



    public function resetPassword(Request $request) {
        $user = User::where('email', $request['email'])->first();

        if ($user != null) {
            $user->password = bcrypt($request['password']);
            $user->save();

            return response()->json(['response' => 'User has successfully resetted his/her password'], $this->successStatus);
        } else {
            return response()->json(['response' => 'User not found'], 404);
        }
    }
} 



?>