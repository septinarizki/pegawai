<?php
class M_UsulCuti extends CI_Model{
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

    function getAllDataUsulCuti(){
        $this->db->select('US.*, P.nama_pegawai, P.nip');
        $this->db->from('usul_cuti US');
        $this->db->join('pegawai P', 'P.id=US.id_pegawai');
        return $this->db->get()->result();
    }

    function getEdit($id){
        $this->db->select('US.*, P.nama_pegawai, P.nip');
        $this->db->from('usul_cuti US');
        $this->db->join('pegawai P', 'P.id=US.id_pegawai');
        $this->db->where('US.id', $id);
        return $this->db->get()->result();
    }

}