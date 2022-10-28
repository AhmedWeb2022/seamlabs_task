<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request) {
        User::create([
        'name' =>  $request->name,
        'email' => $request->email,
        'date_of_birth'=>Carbon::parse($request->date_of_birth),
        'phone_number'=>$request->phone_number,
        'password' => Hash::make($request->password)
        ]);

        return response()->json("Register Done");
    }
    public function login (Request $request) {
        $user= request(['email','password']);
        if(!Auth::attempt($user)){
            return response()->json("login failed");
        }
        return response()->json("login Done");
    }
    public function users (Request $request) {
$users=User::all();
return $users;
    }
    public function view (Request $request , $userId) {
        $user = User::find($userId);
        return $user;
    }
    public function update (Request $request , $userId) {
        User::find($userId)->update([
            'name' =>  $request->name,
            'email' => $request->email,
            'date_of_birth'=>Carbon::parse($request->date_of_birth),
            'phone_number'=>$request->phone_number,
            'password' => Hash::make($request->password)
        ]);
        return response()->json("user updated");
    }
    public function destroy(Request $request , $userId) {
        User::find($userId)->delete();
        return response()->json("user deleted");
    }
}
