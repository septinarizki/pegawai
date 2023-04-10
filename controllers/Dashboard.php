<?php
class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };
        $this->load->helper(array('form', 'url')); 
        $this->load->model('M_Dashboard');
        $this->load->model('M_Pegawai');
    }

    function index(){
        $data=array(
            'title'=>'Dashboard',
            'active_dashboard'=>'active',
            'data_user'=>$this->M_Pegawai->getAllData('user'),
            'count_pegawai'=>$this->M_Dashboard->getCountPegawai(),
            'count_usulcuti'=>$this->M_Dashboard->getCountCuti(),
            'count_usulbelajar'=>$this->M_Dashboard->getCountBelajar(),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('element/v_sidebar',$data);
        $this->load->view('v_dashboard', array('error' => ' ' ));
        $this->load->view('element/v_footer');
    }

    function pegawai(){
        $data=array(
            'title'=>'Dashboard',
            'active_dashboardpegawai'=>'active',
            'data_pegawai'=>$this->M_Pegawai->getAllData('pegawai'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('element/v_sidebar',$data);
        $this->load->view('v_dashboard', array('error' => ' ' ));
        $this->load->view('element/v_footer');
    }

}
