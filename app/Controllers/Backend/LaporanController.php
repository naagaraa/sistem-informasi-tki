<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class LaporanController extends BaseController
{
    public function index()
    {
        //
        $data = [
            "title" => "laporan",
        ];

        return view("backend/pages/laporan/index-laporan", $data);
    }
}
