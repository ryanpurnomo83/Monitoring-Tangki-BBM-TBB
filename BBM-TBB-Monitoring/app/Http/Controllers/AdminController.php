<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard()
    {
        return view('ADMIN/dashboard');
    }

    public function Users()
    {
        return view('ADMIN/users');
    }

    public function Message()
    {
        return view('ADMIN/message');
    }

    public function DetailMessage()
    {
        return view('ADMIN/detail-message');
    }

    public function SignUp()
    {   
        $data = 0;
        return view('ADMIN/check-status', ['data' => $data]);
    }

    public function SignIn()
    {
        $data = 1;
        return view('ADMIN/check-status', ['data' => $data]);
    }

    public function Orders()
    {
        return view('ADMIN/orders');
    }

    public function Settings()
    {
        return view('ADMIN/settings');
    }
}
