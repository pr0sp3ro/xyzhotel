<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function forgot(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink($request->only('email'));

        return response()->json([
            'message' => $status === Password::RESET_LINK_SENT ? 'Reset link sent to your email' : 'Unable to send reset link',
        ]);
    }
}
