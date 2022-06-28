<?php

namespace App\Controllers\Backend;

use CodeIgniter\RESTful\ResourceController;

class UsersController extends ResourceController
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
        //
        $tb_user = $this->db->table("tb_users");
        $users = $tb_user->get();

        $data = [
            "title" => "user management",
            "users" => $users->getResultObject(),
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
        echo "users method show id - {$id}";
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
        $email = $this->request->getPost("email-user");
        $tb_users = $this->db->table("tb_users");
        $users = $tb_users->where("email_user",$email)->get()->getResultObject();
        if(!empty($users)){
            echo "
                <script>
                    alert('email data sudah ada');
                    window.location.href = 'http://localhost:8080/users/create';
                </script>
            ";
            die;
        }

        $password = $this->request->getPost('password-user');
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        d($password);
        d($password_hash);
        dd(password_verify($password,$password_hash));
        // data users
        $datauser = [
            'uniqid_user' => uniqid(),
            'nama_user' => $this->request->getPost('nama-user'),
            'email_user' => $this->request->getPost('email-user'),
            'password_user' => $password_hash,
            'handphone_user' => $this->request->getPost('handphone-user'),
            'alamat_user' => $this->request->getPost('alamat-user'),
            'role_user' => $this->request->getPost('akses-user'),
            'status_user' => 1,
            'update_by' => "owner",
            'create_at' => date("Y-m-d H:i:s"),
            'update_at' => date("Y-m-d H:i:s")
        ];

       
        $tb_users->insert($datauser);

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
        echo "users method edit id - {$id}";
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
