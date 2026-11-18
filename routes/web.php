<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::view('/register', 'register');
Route::view('/login', 'login');

Route::post('/register', function (Request $request) {
    User::create([
        'name'     => $request->name,
        'email'    => $request->email,
        'password' => Hash::make($request->password),
    ]);
    return redirect('/login');
});

Route::post('/login', function (Request $request) {
    if (Auth::attempt($request->only('email', 'password'))) {
        $request->session()->regenerate();
        return "Přihlášení funguje! Jsi přihlášený jako: " . Auth::user()->name;
    }
    return "Špatné údaje!";
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
