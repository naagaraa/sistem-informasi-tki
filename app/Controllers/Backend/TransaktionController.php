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
        if ($this->session->get('login') === null) {
            return redirect()->to(base_url("login"));
            exit(); 
        }

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
        if ($this->session->get('login') === null) {
            return redirect()->to(base_url("login"));
            exit(); 
        }

        return view("backend/pages/transaksi-users/index-transaksi-users");
    }

    /**
     * show data transaksi detail perusahaan
     *
     * @return void
     */
    public function showTransaksiPerusahaan($id)
    {
        if ($this->session->get('login') === null) {
            return redirect()->to(base_url("login"));
            exit(); 
        }

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
        if ($this->session->get('login') === null) {
            return redirect()->to(base_url("login"));
            exit(); 
        }
        
        echo "transaksi users - {$id}";
        $id_keuangan_user = $id;
    }
}
