<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * Form create for candidate
     * 
     * 
    */
    public function create()
    {
        return view('user.candidate.register');
    }

    public function store(Request $request)
    {
        // 
    }
}
