<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // public function create(){
    //     return view('register');
    // }

    public function register()
    {
        return view('register');
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => ['required','email','unique:users'],
            'password' => 'required|min:3|max:255',
        ]);
    
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->save();
    
        return redirect()->route('login')->with('Success', 'Registration success. You may now login.');
    } 

    // public function store(Request $request){
    //     // dd(Hash::make($request->newPassword));
    //     $validData = $request->validate([
    //         'name' => 'required|max:255',
    //         'email' => ['required','email','unique:users'],
    //         'password' => 'required|min:3|max:255'
    //     ]);

    //     // $request->user()->fill([
    //     //     'password' => Hash::make($request->newPassword)
    //     // ])->save();

    //     // dd(Hash::make($validData['password']));
    //     // $validData['password'] = Hash::make($validData['password']);
    //     // dd($validData);
    //     User::create($validData);
    //     return redirect('/login');
    // }
}