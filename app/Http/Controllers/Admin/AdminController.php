<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home() {
        return view('admin.index');
    }

    public function user() {
        return view('admin.page.user');
    }

    public function admin() {
        return view('admin.page.admin');
    }

    public function permission() {
        return view('admin.page.nopermission');
    }
}
