<?php
class M_UsulBelajar extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    //    TAMPILKAN SEMUA DATA
    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }

    //    SELECT WHERE
    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data);
    }

    //    UPDATE DATA
    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }

    //    DELETE DATA
    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }

    //    INSERT DATA
    function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }

    //    MANUAL QUERY
    function manualQuery($q)
    {
        return $this->db->query($q);
    }

    //    GET WHERE DATA
    function edit_data($where,$table){      
    return $this->db->get_where($table,$where);
    }

    function getAllDataUsulBelajar(){
        $this->db->select('UB.*, P.nama_pegawai, P.nip');
        $this->db->from('usul_belajar UB');
        $this->db->join('pegawai P', 'P.id=UB.id_pegawai');
        return $this->db->get()->result();
    }

    function getEdit($id){
        $this->db->select('UB.*, P.nama_pegawai, P.nip');
        $this->db->from('usul_belajar UB');
        $this->db->join('pegawai P', 'P.id=UB.id_pegawai');
        $this->db->where('UB.id', $id);
        return $this->db->get()->result();
    }

}