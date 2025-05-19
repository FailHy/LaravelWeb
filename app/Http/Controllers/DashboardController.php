<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
public function index()
    {
    $user = Auth::user();
    if (!$user || !isset($user->role)) {
        #code...
        abort(403, 'tida di izinkan akses halaman ini');
    }
    return $user->role == 'admin' ? view('dashboard.admin') : view('dashboard.user');
    }
}