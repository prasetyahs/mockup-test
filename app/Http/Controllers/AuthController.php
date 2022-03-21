<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    private $users;
    public function __construct()
    {
        $this->users = new Users();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }


    public function auth(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if ($validate->fails()) {
            Session::flash('message', $validate->errors()->first());
            return redirect("/");
        }
        $data = $this->users->where('email', $request->email)->where('password', $request->password)->first();
        if (!$data) {
            Session::flash('message', 'Username dan password Anda Salah!');
            return redirect("/");
        }
        session(['user' => $data]);
        return redirect("dashboard");
    }

    public function registerIndex()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validate->fails()) {
            Session::flash('message', $validate->errors()->first());
            return redirect("/");
        }
        
        $this->users->create($request->all());
        Session::flash('message', "akun berhasil didaftarkan");
        return redirect("/");
    }
}
