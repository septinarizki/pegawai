<?php
class UsulCuti extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };
        $this->load->helper(array('form', 'url')); 
        $this->load->model('M_UsulCuti');
        $this->load->model('M_Pegawai');
    }

    function index(){
        $data=array(
            'title'=>'Data Cuti',
            'active_usulcuti'=>'active',
            'data_user'=>$this->M_Pegawai->getAllData('user'),
            'data_usulcuti'=>$this->M_UsulCuti->getAllDataUsulCuti(),
            'data_pegawai'=>$this->M_Pegawai->getAllData('pegawai'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('element/v_sidebar',$data);
        $this->load->view('admin/transaksi/cuti/v_cuti', array('error' => ' ' ));
        $this->load->view('element/v_footer');
    }

    function pegawai(){
        $data=array(
            'title'=>'Data Cuti',
            'active_usulcutipegawai'=>'active',
            'data_usulcuti'=>$this->M_UsulCuti->getAllDataUsulCuti(),
            'data_pegawai'=>$this->M_Pegawai->getAllData('pegawai'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('element/v_sidebar',$data);
        $this->load->view('pegawai/transaksi/cuti/v_cuti', array('error' => ' ' ));
        $this->load->view('element/v_footer');
    }

//
//    ===================== INSERT =====================
    
    function add(){
        $data=array(
            'title'=>'Add Cuti',
            'data_pegawai'=>$this->M_Pegawai->getAllData('pegawai'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('element/v_sidebar',$data);
        $this->load->view('pegawai/transaksi/cuti/v_add', array('error' => ' ' ));
        $this->load->view('element/v_footer');
    }


    function tambah_usulcuti(){
        $data=array(
            'id_pegawai'=>$this->input->post('id_pegawai'),
            'jenis_cuti'=>$this->input->post('jenis_cuti'),
            'tgl_mulai'=>$this->input->post('tgl_mulai'),
            'tgl_selesai'=>$this->input->post('tgl_selesai'),
            'jml_hari'=>$this->input->post('jml_hari'),
            'status'=>$this->input->post('status'),
        );
        $this->M_UsulCuti->insertData('usul_cuti',$data);
        $this->session->set_flashdata('success','Data Berhasil Disimpan');
        redirect("UsulCuti/pegawai");
    }


//    ======================== EDIT =======================

    function update($id){
        $data['title'] = 'Edit Pegawai';
        $data['data_usulcuti'] = $this->M_UsulCuti->getEdit($id);
        $data['data_pegawai'] = $this->M_Pegawai->getAllData('pegawai');
        
        $this->load->view('element/v_header',$data);
        $this->load->view('element/v_sidebar',$data);
        $this->load->view('pegawai/transaksi/cuti/v_edit', array('error' => ' ' ));
        $this->load->view('element/v_footer');
    }

    function edit_usulcuti(){
        $id['id'] = $this->input->post('id');
        
        $data=array(
            'id_pegawai'=>$this->input->post('id_pegawai'),
            'jenis_cuti'=>$this->input->post('jenis_cuti'),
            'tgl_mulai'=>$this->input->post('tgl_mulai'),
            'tgl_selesai'=>$this->input->post('tgl_selesai'),
            'jml_hari'=>$this->input->post('jml_hari'),
            'status'=>$this->input->post('status'),
        );
        $this->M_UsulCuti->updateData('usul_cuti',$data,$id);
        $this->session->set_flashdata('success','Data Berhasil Diubah');
        redirect("UsulCuti/pegawai");
    }

    function tolak_usulcuti(){
        $id['id'] = $this->input->post('id');
        $data['status'] = $this->input->post('status');
        $this->M_UsulCuti->updateData('usul_cuti',$data,$id);
        $this->session->set_flashdata('success','Data Cuti Ditolak');
        redirect("UsulCuti");
    }

    function terima_usulcuti(){
        $id['id'] = $this->input->post('id');
        $data['status'] = $this->input->post('status');
        $this->M_UsulCuti->updateData('usul_cuti',$data,$id);
        $this->session->set_flashdata('success','Data Cuti Diterima');
        redirect("UsulCuti");
    }

//    ========================== DELETE =======================
    function hapus_usulcuti(){
        $id['id'] = $this->input->post('id');
        $this->M_UsulCuti->deleteData('usul_cuti',$id);
        $this->session->set_flashdata('success','Data Berhasil Dihapus');
        redirect("UsulCuti/pegawai");
    }

}