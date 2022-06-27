<?php

namespace App\Controllers\Backend;

use CodeIgniter\RESTful\ResourceController;

class PerusahaanController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        //
        $data = [
            "title" => "perusahaan",
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
            'perusahaan_uniqid' => $perusahaan_uniqid,
            'nama_perusahaan' => $this->request->getPost('nama-perusahaan'),
            'alamat_perusahaan' => $this->request->getPost('alamat-perusahaan'),
            'negara_perusahaan' => $this->request->getPost('nama-negara'),
            'deskripsi_perusahaan' => $this->request->getPost('deskripsi-perusahaan'),
            'saldo-perusahaan' => $this->request->getPost('saldo-perusahaan'),
            'keuangan_perusahaan_uniqid' => $keuangan_perusahaan_uniqid,
            'update_by' => 'owner',
            'create_at' => date("d-m-Y"),
            'update_at' => date("d-m-Y")
        ];

        $data_saldo = [
            'keuangan_perusahaan_uniqid' => $keuangan_perusahaan_uniqid,
            'nama_perusahaan' => $this->request->getPost('nama-perusahaan'),
            'debit_saldo' => $this->request->getPost('saldo-perusahaan'),
            'kredit_saldo' => 0,
            'update_at' => date("d-m-Y")
        ];


        dd($data_perusahaan, $data_saldo);

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
