<?php
class UsulBelajar extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };
        $this->load->helper(array('form', 'url', 'download')); 
        $this->load->model('M_UsulBelajar');
        $this->load->model('M_Pegawai');
    }

    function index(){
        $data=array(
            'title'=>'Data Cuti',
            'active_usulcuti'=>'active',
            'data_user'=>$this->M_Pegawai->getAllData('user'),
            'data_usulbelajar'=>$this->M_UsulBelajar->getAllDataUsulBelajar(),
            'data_pegawai'=>$this->M_Pegawai->getAllData('pegawai'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('element/v_sidebar',$data);
        $this->load->view('admin/transaksi/belajar/v_belajar', array('error' => ' ' ));
        $this->load->view('element/v_footer');
    }

    function pegawai(){
        $data=array(
            'title'=>'Data Cuti',
            'active_usulbelajarpegawai'=>'active',
            'data_usulbelajar'=>$this->M_UsulBelajar->getAllDataUsulBelajar(),
            'data_pegawai'=>$this->M_Pegawai->getAllData('pegawai'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('element/v_sidebar',$data);
        $this->load->view('pegawai/transaksi/belajar/v_belajar', array('error' => ' ' ));
        $this->load->view('element/v_footer');
    }

//
//    ===================== INSERT =====================
    
    function add(){
        $data=array(
            'title'=>'Add Ijin Belajar',
            'data_pegawai'=>$this->M_Pegawai->getAllData('pegawai'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('element/v_sidebar',$data);
        $this->load->view('pegawai/transaksi/belajar/v_add', array('error' => ' ' ));
        $this->load->view('element/v_footer');
    }


    function tambah_usulbelajar(){
        $config['upload_path'] = './assets/dokumenpersetujuan/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '90720';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        $this->upload->do_upload('dokumen_persetujuan'); 
        $dokumen_persetujuan=$this->upload->data();

        $data=array(
            'id_pegawai'=>$this->input->post('id_pegawai'),
            'jenis_pengajuan'=>$this->input->post('jenis_pengajuan'),
            'nama_kampus'=>$this->input->post('nama_kampus'),
            'jurusan_kampus'=>$this->input->post('jurusan_kampus'),
            'akreditasi_kampus'=>$this->input->post('akreditasi_kampus'),
            'tgl_pengajuan'=>$this->input->post('tgl_pengajuan'),
            'dokumen_persetujuan'=>$dokumen_persetujuan['file_name'],
            'status'=>$this->input->post('status'),
        );
        $this->M_UsulBelajar->insertData('usul_belajar',$data);
        $this->session->set_flashdata('success','Data Berhasil Disimpan');
        redirect("UsulBelajar/pegawai");
    }


//    ======================== EDIT =======================

    function update($id){
        $data['title'] = 'Edit Pegawai';
        $data['data_usulbelajar'] = $this->M_UsulBelajar->getEdit($id);
        $data['data_pegawai'] = $this->M_Pegawai->getAllData('pegawai');
        
        $this->load->view('element/v_header',$data);
        $this->load->view('element/v_sidebar',$data);
        $this->load->view('pegawai/transaksi/belajar/v_edit', array('error' => ' ' ));
        $this->load->view('element/v_footer');
    }

    function edit_usulbelajar(){
        $id['id'] = $this->input->post('id');
        
        $config['upload_path'] = './assets/dokumenpersetujuan/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '90720';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        $this->upload->do_upload('dokumen_persetujuan'); 
        $dokumen_persetujuan=$this->upload->data();

        $data=array(
            'id_pegawai'=>$this->input->post('id_pegawai'),
            'jenis_pengajuan'=>$this->input->post('jenis_pengajuan'),
            'nama_kampus'=>$this->input->post('nama_kampus'),
            'jurusan_kampus'=>$this->input->post('jurusan_kampus'),
            'akreditasi_kampus'=>$this->input->post('akreditasi_kampus'),
            'tgl_pengajuan'=>$this->input->post('tgl_pengajuan'),
            'dokumen_persetujuan'=>$dokumen_persetujuan['file_name'],
            'status'=>$this->input->post('status'),
        );
        $this->M_UsulBelajar->updateData('usul_belajar',$data,$id);
        $this->session->set_flashdata('success','Data Berhasil Diubah');
        redirect("UsulBelajar/pegawai");
    }

    function tolak_usulbelajar(){
        $id['id'] = $this->input->post('id');
        $data['status'] = $this->input->post('status');
        $this->M_UsulBelajar->updateData('usul_belajar',$data,$id);
        $this->session->set_flashdata('success','Data Belajar Ditolak');
        redirect("UsulBelajar");
    }

    function terima_usulbelajar(){
        $id['id'] = $this->input->post('id');
        $data['status'] = $this->input->post('status');
        $this->M_UsulBelajar->updateData('usul_belajar',$data,$id);
        $this->session->set_flashdata('success','Data Belajar Diterima');
        redirect("UsulBelajar");
    }

//    ========================== DELETE =======================
    function hapus_usulbelajar(){
        $id['id'] = $this->input->post('id');
        $this->M_UsulBelajar->deleteData('usul_belajar',$id);
        $this->session->set_flashdata('success','Data Berhasil Dihapus');
        redirect("UsulBelajar/pegawai");
    }

    function downloadDokumen($id){
        $data = $this->db->get_where('usul_belajar',['id'=>$id])->row();
        force_download('./assets/dokumenpersetujuan/'.$data->dokumen_persetujuan,NULL);
    }
}