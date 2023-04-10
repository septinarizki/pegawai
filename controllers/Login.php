<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_Login');
    }

    function index(){
        $data=array(
            'title'=>'Login Page',
        );
        $this->load->view('v_login',$data);
    }

    function cek_login() {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //query the database
        $result = $this->M_Login->login($username, $password);
        if($result) {
            $sess_array = array();
            foreach($result as $row) {
                //create the session
                $sess_array = array(
                    'ID' => $row->id,
                    'USERNAME' => $row->username,
                    'PASS'=>$row->password,
                    'LEVEL' => $row->level,
                    'login_status'=>true,
                );
                //set session with value from database
                $this->session->set_userdata($sess_array);
                $this->session->set_flashdata('success','Login Berhasil');
                redirect('Dashboard','refresh');
            }
            return TRUE;
        } else {
            //if form validate false
            $this->session->set_flashdata('error','Username atau Password Salah');
            redirect('Login','refresh');
            return FALSE;
        }
    }

    function cek_loginPegawai() {
        //Field validation succeeded.  Validate against database
        $nip       = $this->input->post('nip');
        $password  = $this->input->post('password');
        //query the database
        $result = $this->M_Login->loginPegawai($nip, $password);
        if($result) {
            $sess_array = array();
            foreach($result as $row) {
                //create the session
                $sess_array = array(
                    'ID' => $row->id,
                    'NAMA' => $row->nama_pegawai,
                    'NIP' => $row->nip,
                    'PASSWORD'=>$row->password,
                    'LEVEL'=>$row->level,
                    'login_status'=>true,
                );
                //set session with value from database
                $this->session->set_userdata($sess_array);
                $this->session->set_flashdata('success','Login Berhasil');
                redirect('Dashboard/pegawai','refresh');
            }
            return TRUE;
        } else {
            //if form validate false
            $this->session->set_flashdata('error','Username atau Password Salah');
            redirect('Login','refresh');
            return FALSE;
        }
    }

    function logout() {
        $this->session->unset_userdata('ID');
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('PASS');
        $this->session->unset_userdata('LEVEL');
        $this->session->unset_userdata('login_status');
        redirect('Login');
    }

    function logoutPegawai() {
        $this->session->unset_userdata('ID');
        $this->session->unset_userdata('NAMA');
        $this->session->unset_userdata('NIP');
        $this->session->unset_userdata('PASSWORD');
        $this->session->unset_userdata('LEVEL');
        $this->session->unset_userdata('login_status');
        redirect('Login');
    }
}
