<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        //
        $data = [
            "title" => "dashboard",
        ];

        return view("backend/pages/dashboard/dashboard", $data);
    }
}
