<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // doctor,user,admin,supervisor
        $views = [
            'user' => 'src.user.dashboard',
            'doctor' => 'src.doctor.dashboard',
            'admin' => 'src.admin.dashboard',
            'supervisor' => 'src.supervisor.dashboard'
        ];
        return view($views[Auth::user()->role] ?? redirect()->route('logout'));
    }
}
