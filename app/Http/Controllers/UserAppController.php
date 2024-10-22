<?php

namespace App\Http\Controllers;

use Auth;


use App\Models\UserApp;
use Illuminate\Validation\ValidationException;





class UserAppController extends Controller
{
    public function index(){

    }
    public function create(){
        request()->validate([
            'name' => ['required', 'min:4'],
            'email' => ['required','email', 'unique'],
            'password'=> ['required','confirmed'],
        ]);
        $new_user = [
            'name' => request('name'),
            'email'=> request('email'),
            'password'=> request('password'),
            'phone' => request('phone'),
            'remember_token' => 0,
            'created_at' => now(),
            'updated_at'=> null,
        ];
        UserApp::create($new_user);
        return $new_user; 
    }
    public function showAll(){
        $users_app = UserApp::get();//UserApp::with('UserApp')->get();
        return $users_app;
    }
    public function show(){
        $users_app = UserApp::paginate();//UserApp::with('UserApp')->get();
        //$users_app.link()
        return $users_app;
    }
    public function edit($id){
        request()->validate([
            'name' => ['required', 'min:4']
        ]);
        $user = UserApp::findOrFail($id);
        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');
        $user->phone = request('phone');
        $user->updated_at = now();
        return $user; 
    }
    public function store(){
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages(["Data doesn't match."]);
        }
        request()->session()->regenerate();
    }
    public function delete($id){
        $user = UserApp::findOrFail($id);
        $user->delete();
        return true; 
    }
}
