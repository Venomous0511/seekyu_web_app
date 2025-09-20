<?php

namespace App\Http\Controllers;

use App\Models\User;
use Devrabiul\ToastMagic\Facades\ToastMagic;

class DashboardController extends Controller
{
    public function index()
    {
        // $activeGuards = User::activeGuards()->count();
        // $activeClients = User::activeClients()->count();
        // $pendingRequests = User::pendingRequests()->count();

        ToastMagic::success('Welcome to the Super Admin Dashboard!', 'Login Successful');
        // return view('dashboards.super_admin.index', compact('activeGuards', 'activeClients', 'pendingRequests'));
        return view('dashboards.super_admin.index');
    }
}
