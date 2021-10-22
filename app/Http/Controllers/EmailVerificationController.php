<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class EmailVerificationController extends Controller
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

    function index(User $user)
    {
        return view('dashboard.verify')->with('user', $user);
    }

    function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect()->route('verification.notice')->with('success', 'Email Verified Successfully!');
    }

    function sendEmail(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('success', 'Verification Email Sended!');
    }
}
