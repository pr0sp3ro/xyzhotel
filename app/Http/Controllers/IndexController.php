<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index() {
        $user = Auth::user();

        // $userId = $user->id;
        $userEmail = $user->email;

        return view('index', [
            "userEmail" => $userEmail
        ]);
    }
}
