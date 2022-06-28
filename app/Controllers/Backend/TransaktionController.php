<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class TransaktionController extends BaseController
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
    
    /**
     * show index perusahaan
     *
     * @return void
     */
    public function indexPerusahaan()
    {
        // code 
        return view("backend/pages/transaksi-perusahaan/index-transaksi-perusahaan");
    }

    /**
     * show index users
     *
     * @return void
     */
    public function indexUsers()
    {
        // code 
        return view("backend/pages/transaksi-users/index-transaksi-users");
    }

    /**
     * show data transaksi detail perusahaan
     *
     * @return void
     */
    public function showTransaksiPerusahaan($id)
    {
        echo "transaksi perusahaan - {$id}";
        $id_keuangan_perusahaan = $id;
    }


    /**
     * show data transaksi detail user / TKI
     *
     * @return void
     */
    public function showTransaksiUsers($id)
    {
        echo "transaksi users - {$id}";
        $id_keuangan_user = $id;
    }
}
