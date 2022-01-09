<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->with('code', 1);
        }

        // dd($request->all());

        $user = new User();
        $user->nama = $request->nama;
        $user->level = 'user';
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(60);

        $save = $user->save();

        // $input = $request->all();
        // $input['password'] = Hash::make($input['password']);

        // dd($input);

        // $save = User::create($input);

        if ($save) {
            Session::flash('success', 'Registrasi berhasil! Silakan login');
            return redirect()->back()->with('code', 2);
        }
        Session::flash('error', 'Registrasi gagal');
        return redirect()->back()->with('code', 2);
    }

    public function login(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->back();
        } elseif ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->with('code', 2);
        }
        Session::flash('error', 'Email atau password salah');
        return redirect()->back()->with('code', 2);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
