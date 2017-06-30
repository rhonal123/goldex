<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Log;
use Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function password_edit()
    {
       return view('auth.passwords.password');
    }

    public function password(Request $request)
    {
        $user  =Auth::user();
        $values = $request->all(); 
        $validator = User::validadorPassword($values,$user);
        if ($validator->fails()) {
            Log::info($validator->errors()->all());
            return redirect('password')
          ->withErrors($validator)
          ->withInput();
        }
        else {
            $values['password'] = Hash::make($values['password']);
            $user->update($values);
            return redirect()->route('root')->with('success', 'Contraseña Cambiada correctamente');
        } 
    }

}
