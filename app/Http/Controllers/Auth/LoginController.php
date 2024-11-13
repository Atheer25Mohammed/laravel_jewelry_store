<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');  // عرض صفحة تسجيل الدخول
    }

    public function login(Request $request)
    {
        // التحقق من البيانات المدخلة
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // تسجيل الدخول وتوجيه المستخدم بناءً على الدور
            $user = Auth::user();
            if ($user->isAdmin()) {
                return redirect()->route('admin.dashboard');  // توجيه المسؤول
            } else {
                return redirect()->route('dashboard');  // توجيه المستخدم العادي
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}

