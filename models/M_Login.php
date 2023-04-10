<?php
class M_Login extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    // GET DATA LOGIN + CHECK SESSION
    function login($username, $password) {
        //create query to connect user login database
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);

        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }

    function loginPegawai($nip, $password) {
        //create query to connect user login database
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->where('nip', $nip);
        $this->db->where('password', $password);
        $this->db->limit(1);

        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }

}