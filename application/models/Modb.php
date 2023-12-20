<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modb extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
		date_default_timezone_set('Asia/Jakarta');
		$this->db = $this->load->database('default', TRUE);
		$this->db2 = $this->load->database('db2', TRUE);
	}
	public function login($data)
	{
		//$query = $this->db2->query("SELECT tbl_karyawan_struktur.*, tbl_jabatan_karyawan.jabatan_karyawan FROM  tbl_karyawan_struktur  RIGHT JOIN  tbl_jabatan_karyawan ON no_jabatan_karyawan  =  tbl_karyawan_struktur.jabatan_struktur  WHERE  tbl_karyawan_struktur.nik_baru = '".$data."'");
		$this->db2->select('*, tbl_jabatan_karyawan.jabatan_karyawan');
		$this->db2->from('tbl_karyawan_struktur');
		$this->db2->join('tbl_jabatan_karyawan', 'tbl_jabatan_karyawan.no_jabatan_karyawan  =  tbl_karyawan_struktur.jabatan_struktur' );
		$this->db2->where($data);
		$query = $this->db2->get();
		return $query;
	}
	
    public function simpan($data,$ipaddr)
	{
		$this->db->where('ipaddr',$ipaddr);
		$query = $this->db->get('devices');
		$num = $query->num_rows();
		if($num > 0){
			$this->session->set_flashdata('error', 'Data Already exist!');
		}else{
			$this->db->insert('devices', $data);
			$this->session->set_flashdata('saved', 'Data Inserted');
		}
		
	}
	public function total()
	{
		$query = $this->db->query("SELECT jenisp, COUNT(*) AS total FROM devices GROUP BY jenisp");
		return $query->result();
	}
	public function report()
	{
		$query = $this->db->select('devices.*, depo.namadepo')
		                  ->join('depo','devices.depo=depo.no')           
		                  ->order_by('tgl', 'DESC')
		                  ->get('devices');
		return $query->result();
	}
	public function dataall()
	{
		$query = $this->db->order_by('depo', 'ASC')->get('devices');
		return $query->result();
		/*if($query->num_rows() > 0){
			return $query->result();
		}else{
			return array();
		}*/
	}
	public function depo()
	{
		$query = $this->db->order_by('namadepo', 'ASC')->get('depo');
		return $query->result();
	}
	public function listd()
	{
		$query = $this->db->query("SELECT devices.*, depo.namadepo FROM devices JOIN depo ON devices.depo = depo.no ORDER BY namadepo ASC");
		return $query->result();
	}
	public function remove($id)
	{
		return $this->db->delete('devices', array('id' => $id));
	}
	public function getdetail($table, $id)
	{
		//$query = "SELECT datafastel.namadepo, datafastel.alamat, layanan.jenis, layanan.nosid FROM datafastel RIGHT JOIN layanan ON datafastel.iddepo = layanan.iddepo WHERE datafastel.iddepo = " . $id ."GROUP BY jenis";
		//return $query;

	//	$query =  $this->db->select('datafastel.namadepo, datafastel.alamat, layanan.jenis, layanan.nosid')
	//					->join('layanan', 'layanan.iddepo = datafastel.iddepo')						
	//					->group_by('layanan.jenis')
	//					->get_where($table, array('layanan.iddepo' => $id))->row();
		return $this->db->get_where($table, array('iddepo' => $id))->row();
	}
	public function getlayanan($table, $id)
	{
		return $this->db->get_where($table, array('iddepo' => $id))->result();
    	//$this->db->where($id);
    	//$query = $this->db->where(array('iddepo' => $id))->get($table);
    	//$query = $this->db->get_where($table, array('iddepo' => $id));
 
    	//return $query->result();
		//return $this->db->get_where($table, array('iddepo' => $id))->row();
	}
	
}