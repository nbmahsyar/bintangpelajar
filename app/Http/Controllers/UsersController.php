<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UsersController extends Controller
{
    
    public function show(Request $request){

        $user = User::where('email',$request->email)->first();

        $user->status === 'karyawan' ? 
            $users = User::select('name','email','status')->where('email',$request->email)->get()
            : $users = User::select('name','email','status')->get();

        return response()->json([
            'users' => $users
        ]);

    }
}
