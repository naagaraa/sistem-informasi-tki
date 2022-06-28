<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class RegisterController extends BaseController
{
    
    private $db;

    /**
     * load db di constructor
     */
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function index()
    {
        //
        return view("auth/register");
    }

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

        // d($password);
        // d($password_hash);
        // dd(password_verify($password,$password_hash));
        // data users
        $datauser = [
            'uniqid_user' => uniqid(),
            'nama_user' => $this->request->getPost('nama-user'),
            'email_user' => $this->request->getPost('email-user'),
            'password_user' => $password_hash,
            'handphone_user' => "",
            'alamat_user' => "",
            'role_user' => 1,
            'status_user' => 1,
            'update_by' => "owner",
            'create_at' => date("Y-m-d H:i:s"),
            'update_at' => date("Y-m-d H:i:s")
        ];

       
        $tb_users->insert($datauser);

        return redirect()->back()->with('success', 'data berhasil di tambah');
    }
}
