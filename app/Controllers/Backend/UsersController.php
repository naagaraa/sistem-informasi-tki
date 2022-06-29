<?php

namespace App\Controllers\Backend;

use CodeIgniter\RESTful\ResourceController;

class UsersController extends ResourceController
{
    private $db;
    private $session;
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */

    public function __construct()
    {
        $this->db = db_connect();
        $this->session = session();
    }

    public function index()
    {
        //
        if ($this->session->get('login') === null) {
            return redirect()->to(base_url("login"));
            exit();
        }

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
        if ($this->session->get('login') === null) {
            return redirect()->to(base_url("login"));
            exit();
        }

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
        if ($this->session->get('login') === null) {
            return redirect()->to(base_url("login"));
            exit();
        }

        $tb_user =  $this->db->table("tb_users");
        $user = $tb_user->where("uniqid_user", $id)->get()->getRow();

        if (empty($user)) {
            echo "
                <script>
                    alert('user tidak ditemukan');
                    window.location.href = 'http://localhost:8080/users';
                </script>
            ";
            die;
        }

        $data = [
            "user" => $user
        ];

        return view('backend/pages/users/edit-users', $data);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        if ($this->session->get('login') === null) {
            return redirect()->to(base_url("login"));
            exit();
        }

        $email = $this->request->getPost("email-user");
        $tb_users = $this->db->table("tb_users");
        $users = $tb_users->where("email_user", $email)->get()->getResultObject();
        if (!empty($users)) {
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
        $uniqid_user = $this->request->getPost('uniqid');

        if ($this->session->get('login') === null) {
            return redirect()->to(base_url("login"));
            exit();
        }

        $tb_user =  $this->db->table("tb_users");
        $user = $tb_user->where("uniqid_user", $uniqid_user)->get()->getRow();

        if (empty($user)) {
            echo "
                <script>
                    alert('user tidak ditemukan');
                    window.location.href = 'http://localhost:8080/users';
                </script>
            ";
            die;
        }

        $tb_user->set('nama_user', $this->request->getPost('nama-user'));
        $tb_user->set('email_user', $this->request->getPost('email-user'));
        $tb_user->set('handphone_user', $this->request->getPost('handphone-user'));
        $tb_user->set('alamat_user', $this->request->getPost('alamat-user'));
        $tb_user->where('uniqid_user', $uniqid_user);
        $tb_user->update();

        return redirect()->back()->with('success', 'data berhasil di tambah');
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
