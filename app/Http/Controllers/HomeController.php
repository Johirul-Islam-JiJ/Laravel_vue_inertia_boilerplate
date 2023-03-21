<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function dashboard()
    {
        if (auth()->user()->hasRole('super-admin'))
            return inertia('SuperAdminDashboard');
        elseif (auth()->user()->hasRole('admin'))
            return inertia('AdminDashboard');
        elseif (auth()->user()->hasRole('designer'))
            return inertia('DesignerDashboard');
        else
            return inertia('Dashboard');
    }
}
