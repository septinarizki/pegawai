<?php
class M_Dashboard extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    //    MANUAL QUERY
    function manualQuery($q)
    {
        return $this->db->query($q);
    }

    function getCountPegawai()
	{
		return $this->db->query("SELECT count(*) as pegawai from pegawai")->result();
	}

	function getCountCuti()
	{
		return $this->db->query("SELECT count(*) as cuti from usul_cuti")->result();
	}

	function getCountBelajar()
	{
		return $this->db->query("SELECT count(*) as belajar from usul_belajar")->result();
	}

    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }
}