<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function showDashboard(){
        return view('dashboard.index');
    }

    public function createUser(){

        if (!session('user_id')) {
            return redirect()->route('login')->with('error', 'You must be logged in to create a user.');
        }
        return view('dashboard.create');
    }


    public function storeUser(Request $request){
            // dd($request->all());

            $userId = Session::get('user_id');
            // dd($userId);

            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'is_admin' => $userId
            ]);

            return redirect()->route('create_user')->with('success', 'User created successfully!');
        }



}
