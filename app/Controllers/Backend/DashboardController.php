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
        d($this->session->get('login') == null);
        if ($this->session->get('login') == null) {
            redirect()->to("login");
        }
    }

    public function index()
    {
        //
        $data = [
            "title" => "dashboard",
        ];

        return view("backend/pages/dashboard/dashboard", $data);
    }
}
