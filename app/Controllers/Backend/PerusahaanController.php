<?php

namespace App\Controllers\Backend;

use CodeIgniter\RESTful\ResourceController;

class PerusahaanController extends ResourceController
{
    private $db;
    private $session;

    public function __construct()
    {
        $this->db = db_connect();
        $this->session = session();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        //
        $tb_perusahaan = $this->db->table('tb_perusahaan');
        $perusahaan = $tb_perusahaan->get();

        $data = [
            "title" => "perusahaan",
            "perusahaan" => $perusahaan->getResultObject(),
        ];
        
        return view("backend/pages/perusahaan/index-perusahaan", $data);

    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
        echo "perusahaan method show id - {$id}";
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    function indexCreate() {
        // code
        return view("backend/pages/perusahaan/create-perusahaan");
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //

        $perusahaan_uniqid = uniqid();
        $keuangan_perusahaan_uniqid = uniqid();

        $data_perusahaan = [
            'uniqid_perusahaan' => $perusahaan_uniqid,
            'nama_perusahaan' => $this->request->getPost('nama-perusahaan'),
            'alamat_perusahaan' => $this->request->getPost('alamat-perusahaan'),
            'negara_perusahaan' => $this->request->getPost('nama-negara'),
            'deskripsi_perusahaan' => $this->request->getPost('deskripsi-perusahaan'),
            // 'saldo-perusahaan' => $this->request->getPost('saldo-perusahaan'),
            'uniqid_keuangan_perusahaan' => $keuangan_perusahaan_uniqid,
            'update_by' => 'owner',
            'create_at' => date("Y-m-d H:i:s"),
            'update_at' => date("Y-m-d H:i:s")
        ];

        $data_saldo_perusahaan = [
            'uniqid_keuangan_perusahaan' => $keuangan_perusahaan_uniqid,
            'nama_perusahaan' => $this->request->getPost('nama-perusahaan'),
            'debit_saldo' => $this->request->getPost('saldo-perusahaan'),
            'kredit_saldo' => 0,
            'update_at' => date("Y-m-d H:i:s")
        ];

        $perusahaan = $this->db->table('tb_perusahaan');
        $saldo = $this->db->table('tb_saldo_perusahaan');
        $perusahaan->insert($data_perusahaan);
        $saldo->insert($data_saldo_perusahaan);

        return redirect()->back()->with('success', 'data berhasil di tambah');

    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
        echo "perusahaan method edit id - {$id}";
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
