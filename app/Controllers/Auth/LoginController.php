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
        d($this->session->get('login'));
    }

    /**
     * view login page
     *
     * @return void
     */
    public function index()
    {
        
        d($this->session->get());
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

        $tb_user = $this->db->table("tb_users");
        $user = $tb_user->where("email_user", $email)->get()->getRow();

        if(password_verify($password, $user->password_user)) {
            // If the password inputs matched the hashed password in the database
            // Do something, you know... log them in.
            $this->session->set('login', true);
            $this->session->set('uniqid', $user->uniqid_user);
            $this->session->set('nama', $user->nama_user);
            $this->session->set('role', $user->role_user);
            $this->session->set('email', $user->email_user);
            $this->session->set('status', $user->status_user);
            
            return redirect('/');
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

    public function logout()
    {
        $this->session->destroy();
        return redirect("login");
    }
}
