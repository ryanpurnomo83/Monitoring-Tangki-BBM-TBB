<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard()
    {
        return view('ADMIN/dashboard');
    }

    public function Message()
    {
        return view('ADMIN/message');
    }

    public function SignUp()
    {
        return view('ADMIN/check-status');
    }

    public function SignIn()
    {
        return view('ADMIN/check-status');
    }
}
