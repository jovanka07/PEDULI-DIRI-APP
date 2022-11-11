<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\data_diri;
use Auth;
use Hash;

class AuthController extends Controller
{
    public function index(){
        return view('Login/login');
    }

    public function register(){
        return view('login/register');
    }

    public function postRegister(Request $request){
        $model = new Login;
        $model->nama_lengkap = $request->nama_lengkap;
        $model->email = $request->email;
        $model->password = Hash::make($request->password);
        $model->save();
        return redirect('auth/register')->with('pesan', 'Akun Berhasil di buat');
    }

    public function postLogin(Request $request){
        Auth::attempt($request->only('email', 'password'));
        if(Auth::check()){
            return redirect('home');
        }else{
            return redirect('auth');
        }
    }

    public function berhasil(){
        return view('Login/berhasil');
    }

    public function logout(){
        Auth::logout();
        
        return redirect('auth')->with('pesan', 'Anda Berhasil Logout');
    }

    public function catatan(Request $request){
        $keyword = $request->keyword;
        $session = Auth()->user()->id;
        $model = data_diri::with('Login')->where('user_id', $session)->where('lokasi', 'LIKE', '%' . $keyword . '%')->get();
        return view('home/catatan', compact(
            'model'
        ));
    }
}
