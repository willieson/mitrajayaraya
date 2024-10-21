<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    function index()
    {
        $user_email = session()->get('user_email');
        $user = User::where('email', $user_email)->first();

        if (is_null($user->email_verified_at)) {
            return redirect('/verify-email');
        }
        return view('transaction', [
            "title" => "History"
        ]);
    }
}
