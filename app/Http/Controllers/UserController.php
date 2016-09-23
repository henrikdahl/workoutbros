<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('ajax');
    }

    public function update(Request $request)
    {
        $user = $request->user();
        $user->fill($request->all());
        $user->save();
    }
}
