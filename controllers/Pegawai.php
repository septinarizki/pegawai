<?php
class Pegawai extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };
        $this->load->helper(array('form', 'url')); 
        $this->load->model('M_Pegawai');
    }

    function index(){
        $data=array(
            'title'=>'Data Pegawai',
            'active_pegawai'=>'active',
            'data_user'=>$this->M_Pegawai->getAllData('user'),
            'data_pegawai'=>$this->M_Pegawai->getAllData('pegawai'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('element/v_sidebar',$data);
        $this->load->view('admin/master/pegawai/v_pegawai', array('error' => ' ' ));
        $this->load->view('element/v_footer');
    }

    function profile(){
        $data=array(
            'title'=>'Data Profile',
            'active_profile'=>'active',
            'data_user'=>$this->M_Pegawai->getAllData('user'),
            'data_pegawai'=>$this->M_Pegawai->getAllData('pegawai'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('element/v_sidebar',$data);
        $this->load->view('admin/master/profile/v_profile', array('error' => ' ' ));
        $this->load->view('element/v_footer');
    }

//
//    ===================== INSERT =====================
    
    function add(){
        $data=array(
            'title'=>'Add Pegawai',
            'data_user'=>$this->M_Pegawai->getAllData('user'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('element/v_sidebar',$data);
        $this->load->view('admin/master/pegawai/v_add', array('error' => ' ' ));
        $this->load->view('element/v_footer');
    }


    function tambah_pegawai(){
        $config['upload_path'] = './assets/fotopegawai/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '90720';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        $this->upload->do_upload('foto'); 
        $foto=$this->upload->data();

        $data=array(
            'nip'=>$this->input->post('nip'),
            'nama_pegawai'=>$this->input->post('nama_pegawai'),
            'tgl_lahir'=>$this->input->post('tgl_lahir'),
            'jabatan'=>$this->input->post('jabatan'),
            'nohp'=>$this->input->post('nohp'),
            'password'=>$this->input->post('password'),
            'level'=>$this->input->post('level'),
            'foto'=>$foto['file_name'],
        );
        $this->M_Pegawai->insertData('pegawai',$data);
        $this->session->set_flashdata('success','Data Berhasil Disimpan');
        redirect("Pegawai");
    }


//    ======================== EDIT =======================

    function update($id){
        $data['title'] = 'Edit Pegawai';
        $data['data_pegawai'] = $this->M_Pegawai->getEdit($id);
        $data['data_user'] = $this->M_Pegawai->getAllData('user');
        
        $this->load->view('element/v_header',$data);
        $this->load->view('element/v_sidebar',$data);
        $this->load->view('admin/master/pegawai/v_edit', array('error' => ' ' ));
        $this->load->view('element/v_footer');
    }

    function edit_pegawai(){
        $id['id'] = $this->input->post('id');
        
        $config['upload_path'] = './assets/fotopegawai/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '90720';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        $this->upload->do_upload('foto'); 
        $foto=$this->upload->data();
        
        $data=array(
            'nip'=>$this->input->post('nip'),
            'nama_pegawai'=>$this->input->post('nama_pegawai'),
            'tgl_lahir'=>$this->input->post('tgl_lahir'),
            'jabatan'=>$this->input->post('jabatan'),
            'nohp'=>$this->input->post('nohp'),
            'password'=>$this->input->post('password'),
            'level'=>$this->input->post('level'),
            'foto'=>$foto['file_name'],
        );
        $this->M_Pegawai->updateData('pegawai',$data,$id);
        $this->session->set_flashdata('success','Data Berhasil Diubah');
        redirect("Pegawai");
    }

    function edit_profile(){
        $id['id'] = $this->input->post('id');
        
        $data=array(
            'username'=>$this->input->post('username'),
            'password'=>$this->input->post('password'),
            'level'=>$this->input->post('level'),
        );
        $this->M_Pegawai->updateData('user',$data,$id);
        $this->session->set_flashdata('success','Data Berhasil Diubah');
        redirect("Pegawai/profile");
    }

//    ========================== DELETE =======================
    function hapus_pegawai(){
        $id['id'] = $this->input->post('id');
        $this->M_Pegawai->deleteData('pegawai',$id);
        $this->session->set_flashdata('success','Data Berhasil Dihapus');
        redirect("Pegawai");
    }
}