<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function store(Request $request)
    {git status
        dd ($request->username);
        dd ($request->email);
        dd ($request->password);
    }
}
