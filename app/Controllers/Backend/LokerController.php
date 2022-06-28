<?php

namespace App\Controllers\Backend;

use CodeIgniter\RESTful\ResourceController;

class LokerController extends ResourceController
{
    private $db;
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */

    public function __construct()
    {
        $this->db = db_connect();
    }


    public function index()
    {

        $tb_loker = $this->db->table("tb_loker");
        $loker = $tb_loker->get();
        //
        $data = [
            "title" => "loker",
            "loker" => $loker->getResultObject()
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
        $tb_perusahaan = $this->db->table("tb_perusahaan");
        $perusahaan = $tb_perusahaan->select("uniqid_perusahaan,nama_perusahaan, negara_perusahaan")->get();
        //
        $data = [
            "title" => "loker",
            "perusahaan" => $perusahaan->getResultObject()
        ];
        

        return view("backend/pages/loker/create-loker", $data);
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
        $nama_perusahaan = explode("-", $this->request->getPost("nama-perusahaan"));
        $negara_perusahaan = explode("-", $this->request->getPost("negara-perusahaan"));
        $uniqid_perusahaan = array_shift($nama_perusahaan);

        $lokerdata = [
            'uniqid_loker' => uniqid(),
            'uniqid_perusahaan' => $uniqid_perusahaan,
            'status_loker' => 1,
            'nama_posisi' => $this->request->getPost('posisi-loker'),
            'nama_perusahaan' => end($nama_perusahaan),
            'negara_perusahaan' => end($negara_perusahaan),
            'jobdesk_deskription' => $this->request->getPost('jobsdesk-loker'),
            'kualifikasi_deskription' => $this->request->getPost('kualifikasi-loker'),
            'update_by' => 'owner',
            'create_at' => date("Y-m-d H:i:s"),
            'update_at' => date("Y-m-d H:i:s")
        ];

        // insert  data
        $tb_loker = $this->db->table("tb_loker");
        $tb_loker->insert($lokerdata);

        // redirect
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
