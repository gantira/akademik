<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Session;

class LoginController extends Controller
{
    public function login(Request $request) {

        $credentials = $request->only('name', 'password');

        $credentials = [
            'name' => $request->input('name'),
            'password' => $request->input('password')
        ];

        if(Auth::attempt($credentials)){

            /*
            Jika username dan password match, lakukan logika if berikut ini.
            kalau user belum mengaktifkan accountnya, maka logout, dan tampilka message untuk mengaktifkannya
            */
            if (Auth::user()) {
                return redirect('/pendaftaran');
            }
        }
        else {
                Session::flash('message', 'Wrong Username and Password');
                return back();
        }
    }

    public function logout() {
        Auth::logout();

        return redirect('/login');
    }
}
