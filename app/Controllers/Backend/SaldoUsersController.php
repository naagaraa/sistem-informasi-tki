<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class SaldoUsersController extends BaseController
{
    
    private $db;
    private $session;

    /**
     * load db di constructor
     */
    public function __construct()
    {
        $this->db = db_connect();
        $this->session = session();
    }
    
    public function index()
    {
        //
        return view("backend/pages/saldo-users/saldo-users");

    }
}
