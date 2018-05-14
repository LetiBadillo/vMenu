<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        if($request->ws == "all"){
            return User::where('user_type', 4)->where('enabled', 1)->get();
        }
    }
}
