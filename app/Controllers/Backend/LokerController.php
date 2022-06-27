<?php

namespace App\Controllers\Backend;

use CodeIgniter\RESTful\ResourceController;

class LokerController extends ResourceController
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
            "title" => "loker",
        ];

        return view("backend/pages/loker/index-loker", $data);

    }

     /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function indexCreate()
    {
        // code here
        return view("backend/pages/loker/create-loker");
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
        echo "loker method show id - {$id}";
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    function new () {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
        $perusahaanRow = "";

        $loker = [
            'status' => 1,
            'nama_posisi' => $this->request->getPost('posisi-loker'),
            'nama_perusahaan' => $this->request->getPost('nama-perusahaan'),
            'negara_perusahaan' => $this->request->getPost('negara-perusahaan'),
            'jobdesk_deskription' => $this->request->getPost('jobsdesk-loker'),
            'kualifikasi_deskription' => $this->request->getPost('kualifikasi-loker'),
            'update_by' => 'owner',
            'create_at' => date('d-m-Y'),
            'update_at' => date("d-m-Y")
        ];

        dd($loker);

       dd($this->request->getPost());

    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
        echo "loker method edit id - {$id}";
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
