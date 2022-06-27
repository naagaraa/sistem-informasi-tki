<?php

namespace App\Controllers\Backend;

use CodeIgniter\RESTful\ResourceController;

class UsersController extends ResourceController
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
            "title" => "user management",
        ];

        return view('backend/pages/users/index-users', $data);

    }

    public function indexCreate()
    {
        // code
        return view('backend/pages/users/create-users');
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
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
        $datauser = [
            'nama_user' => $this->request->getPost('nama-user'),
            'email_user' => $this->request->getPost('email-user'),
            'hanphone_user' => $this->request->getPost('handphone-user'),
            'alamat_user' => $this->request->getPost('alamat-user'),
            'akses_user' => $this->request->getPost('akses-user')
        ];

        dd($datauser);
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
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
