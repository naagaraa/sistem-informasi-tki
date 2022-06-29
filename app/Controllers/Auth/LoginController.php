<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class LoginController extends BaseController
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
     * view login page
     *
     * @return void
     */
    public function index()
    {
        if ($this->session->get('login') == true) {
            header('Location: '.base_url("/"));
            exit(); 
        }
        return view("auth/login");
    }

    /**
     * validation auth login
     *
     * @return void
     */
    public function auth()
    {
        $email = $this->request->getPost("email");
        $password = $this->request->getPost("password");

        // extream native email validation
        if ($email == "") {
            echo "
                 <script>
                    alert('harap isi email terlebih dahulu');
                    window.location.href = 'http://localhost:8080/login';
                </script>
            ";
            die;
        }

        // root akses
        if(($email == "admin@mail.co") & ($password == "admin")){
            $this->session->set('login', true);
            $this->session->set('uniqid', 0001);
            $this->session->set('nama', "admin");
            $this->session->set('role', "2");
            $this->session->set('email', $email);
            $this->session->set('status', 1);
            
            return redirect()->to(base_url('/'));
            exit;
        }

        $tb_user = $this->db->table("tb_users");
        $user = $tb_user->where("email_user", $email)->get()->getRow();

       

        // validation
        if ($user == null) {
            echo "
                 <script>
                    alert('user tidak ditemukan');
                    window.location.href = 'http://localhost:8080/login';
                </script>
            ";
            die;
        }


        if(password_verify($password, $user->password_user)) {
            $this->session->set('login', true);
            $this->session->set('uniqid', $user->uniqid_user);
            $this->session->set('nama', $user->nama_user);
            $this->session->set('role', $user->role_user);
            $this->session->set('email', $user->email_user);
            $this->session->set('status', $user->status_user);
            
            return redirect()->to(base_url('/'));
        } else {
            echo "
                 <script>
                    alert('password salah');
                    window.location.href = 'http://localhost:8080/login';
                </script>
            ";
            die;
        }
    }

    /**
     * function untuk logout
     *
     * @return void
     */
    public function logout()
    {
        if ($this->session->get("login") === true) {
            $this->session->destroy();
            header('Location: '.base_url("login"));
            exit(); 
        }else{
            $this->session->destroy();
            header('Location: '.base_url("login"));
            exit(); 
        }
    }
}
