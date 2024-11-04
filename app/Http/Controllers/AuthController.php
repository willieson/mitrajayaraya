<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{

    public function index()
    {
        $user_email = session()->get('user_email');
        $user = User::where('email', $user_email)->first();

        if (is_null($user->email_verified_at)) {
            return redirect('/verify-email');
        }
        return view('home', [
            "title" => "Home"
        ]);
    }
    public function login(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Coba untuk login menggunakan JWT
        $credentials = $request->only('email', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return redirect('/login')->withErrors(['email' => 'Invalid credentials.']);
        }


        $user_email = $request->input('email');
        session(['user_email' => $user_email]);
        // Setelah login sukses, simpan token ke dalam session
        session(['jwt_token' => $token]);


        // Ambil user yang login
        $user = Auth::user();
        // Cek apakah email sudah terverifikasi
        if (is_null($user->email_verified_at)) {
            // Jika belum terverifikasi, redirect ke halaman verifikasi email
            return redirect('/verify-email')->with('error', 'Please verify your email first.');
        }

        return redirect('/admin');
    }


    public function logout(Request $request)
    {
        $request->session()->forget('jwt_token');

        // Redirect ke halaman login setelah logout
        return redirect('/login')->with('success', 'You have been logged out successfully.');
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Buat user baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect setelah registrasi berhasil
        return redirect('/login')->with('success', 'Registration successful. You can now log in.');
    }

    public function verifyEmail()
    {
        $user_email = session()->get('user_email');
        $user = User::where('email', $user_email)->first();

        if (!is_null($user->email_verified_at)) {
            return redirect('/');
        }

        $user_email = session()->get('user_email');
        return view('verify-email', [
            'title' => 'Verify Email',
            'user' => $user_email
        ]);
    }
    public function sendVerificationCode()
    {

        $user_email = session()->get('user_email');
        $user = User::where('email', $user_email)->first();
        // Debugging user
        if (is_null($user)) {
            return response()->json(['message' => 'User is not authenticated.'], 401);
        }

        if (!is_null($user->email_verified_at)) {
            return response()->json(['message' => 'User is already verified.'], 400);
        }

        // Jika email belum diverifikasi, lanjutkan logika berikutnya
        $verificationCode = Str::random(6);

        // Simpan kode verifikasi di remember_token
        $user->remember_token = $verificationCode;

        if ($user instanceof \App\Models\User) {
            $user->save();
        }

        // Kirim email verifikasi
        Mail::raw("Your verification code is: $verificationCode", function ($message) use ($user) {
            $message->to($user->email)
                ->subject('[Toko Soul] - Email Verification Code');
        });

        return response()->json(['message' => 'Verification code has been sent to your email.']);
    }

    public function verifyCode(Request $request)
    {
        $user_email = session()->get('user_email');
        $user = User::where('email', $user_email)->first();

        // Validasi input kode verifikasi
        $request->validate([
            'verification_code' => 'required|string',
        ]);

        // Cek apakah kode verifikasi cocok dengan remember_token di database
        if ($user->remember_token === $request->verification_code) {
            // Update kolom email_verified_at
            $user->email_verified_at = now();
            // Pastikan method save() digunakan pada instance User yang valid
            if ($user instanceof User) {
                $user->save();
            } else {
                return response()->json(['message' => 'User is not an instance of User model.'], 500);
            }


            return redirect('/')->with('success', 'Your email has been successfully verified.');
        }

        return redirect('/verify-email')->with('error', 'Invalid verification code.');
    }
}
