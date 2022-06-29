<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class DashboardController extends BaseController
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
        if ($this->session->get('login') === null) {
            return redirect()->to(base_url("login"));
            exit(); 
        }
        // code here
        $data = [
            "title" => "dashboard",
        ];

        return view("backend/pages/dashboard/dashboard", $data);
    }
}
