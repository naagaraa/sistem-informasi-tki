<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class TransaktionController extends BaseController
{
    public function indexPerusahaan()
    {
        // code 
        return view("backend/pages/transaksi-perusahaan/index-transaksi-perusahaan");
    }

    public function indexUsers()
    {
        // code 
        return view("backend/pages/transaksi-users/index-transaksi-users");
    }
}
