<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class SaldoUsersController extends BaseController
{
    public function index()
    {
        //
        return view("backend/pages/saldo-users/saldo-users");

    }
}
