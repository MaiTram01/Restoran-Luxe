<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Mail\VerifyEmail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function Register(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            
        ]);
        $user = User::create([
            'username' => $input['name'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
            'verification_token' => Str::random(32),
        ]);

        if ($user) {
            Mail::to($user->email)->send(new VerifyEmail($user));

            return redirect('login')->with('error', 'Đăng ký thành công! Vui lòng kiểm tra email để xác nhận.');
        }

        return redirect('register')->with('error', 'Đăng ký thất bại, vui lòng thử lại.');
        }

    public function Login(Request $request)
    {
        $login = [
            'email' => $request->input('email'),
            'password' => $request->input('pw')
        ];
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->with('error', 'Email hoặc mật khẩu không đúng.');
        }
        if (!$user->is_verified) {
            return back()->with('error', 'Vui lòng xác nhận email trước khi đăng nhập.');
        }
        if (Auth::attempt($login)) {
            session()->put('user', Auth::user());
            if ($user->role === 'admin') {
                return redirect('/admin')->with('message', 'Chào mừng Admin!');
            } else {
                return redirect('/home')->with('message', 'Đăng nhập thành công.');
            }
        }
    
        return back()->with('error', 'Email hoặc mật khẩu không đúng.');
    }
    

    public function Logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/home')->with('message', 'Bạn đã đăng xuất.');
    }
}