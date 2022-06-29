<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class DaftarTkiController extends BaseController
{
    private $session;
    private $db;

    public function __construct()
    {
        $this->session = session();
        $this->db = db_connect();
    }


    /**
     * tki terdaftar
     *
     * @return void
     */
    public function index()
    {
        $tb_pendaftaran = $this->db->table("tb_tki_terdaftar");
        $pendaftaran = $tb_pendaftaran->get()->getResultObject();

        $data = [
            "pendaftaran" => $pendaftaran
        ];
        
        return view("backend/pages/pendaftaran/index-pendaftaran", $data);
    }
    /**
     * method untuk create pendaftaran 
     *
     * @return mixed
     */
    public function create()
    {
        if ($this->session->get('login') === null) {
            return redirect()->to(base_url("login"));
            exit(); 
        }

        $uniqid_loker = $this->request->getPost("uniqid");

        $data_perndaftaran = [
            "uniqid_tki_terdaftar" => uniqid(),
            "uniqid_loker" => $uniqid_loker,
            "uniqid_user" => $this->session->get("uniqid"),
            "nama_user" => $this->session->get("nama"),
            "status_user" => 1,
            "create_at" => date("Y-m-d H:i:s"),
            "update_at" => date("Y-m-d H:i:s"),
        ];

        

        $tki_terdaftar = $this->db->table("tb_tki_terdaftar");
        $tki_terdaftar->insert($data_perndaftaran);

        return redirect()->back()->with('success', 'data berhasil di tambah');

        
    }

    public function delete($id = null)
    {
         if ($this->session->get('login') === null) {
            return redirect()->to(base_url("login"));
            exit(); 
        }

        $uniqid_tki_terdaftar = $id;

        if ($this->session->get('login') === null) {
            return redirect()->to(base_url("login"));
            exit(); 
        }

        $tb_tki_terdaftar =  $this->db->table("tb_tki_terdaftar");
        $tki_terdaftar = $tb_tki_terdaftar->where("uniqid_tki_terdaftar", $uniqid_tki_terdaftar)->get()->getRow();

        if (empty($tki_terdaftar)) {
            echo "
                <script>
                    alert('TKI terdaftar tidak ditemukan');
                    window.location.href = 'http://localhost:8080/pendaftaran';
                </script>
            ";
            die;
        }

        $tb_tki_terdaftar->where('uniqid_tki_terdaftar', $uniqid_tki_terdaftar);
        $tb_tki_terdaftar->delete();

        return redirect()->to(base_url("pendaftaran"));
    }
}
