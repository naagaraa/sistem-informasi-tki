<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class RegisterController extends BaseController
{
    public function index()
    {
        //
        return view("auth/register");
    }
}