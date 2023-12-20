<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");		
		$this->load->model('Modb');
		$this->db = $this->load->database('default', TRUE);
		$this->db2 = $this->load->database('db2', TRUE);
		if ($this->session->userdata('status') != "login") {
			redirect(base_url('login'));
		}	
	}
	public function index()
	{
		$data['total'] = $this->Modb->total();
		$this->template->load('template', 'dashboard', $data);
	}	
	public function listdepo()
	{
		$data['list'] = $this->Modb->listd();
		$this->template->load('template', 'listdepo', $data);
	}
	public function remove()
	{
		$id = $this->input->post('id');
		$result = $this->Modb->remove($id);
		echo json_encode($result);
	}
	public function listd()
	{
		$arr = array();
        $datax = $this->Modb->listd();
		foreach($datax as $row){
			$depo = $row->namadepo;
			$jenis = $row->jenisp;
			$ip = $row->ipaddr;
			$merk = $row->merk;
			$wifich = $row->wifich;
			$lokasi = $row->lokasi;
			$arr[] = array(
				"namadepo"	=> $depo,
				"jenisp" => $jenis,
				"ipaddr" => $ip,
				"wifich" => $wifich,
				"lokasi" => $lokasi,
				"merk" => $merk);
		}
		echo json_encode($arr); 
	}
	public function input()
	{
		$data['report'] = $this->Modb->report();
		$data['depo'] = $this->Modb->depo();
		$this->template->load('template','input', $data);
	}
	/*public function adddata()
	{
		$data['nomer'] = $this->Modb->getnomor();
		$data['fastel'] = $this->Modb->dataall();
		$this->template->load('template','adddata', $data);
	}*/
	
	public function submitdata()
	{
		$tgl = $this->input->post('tgl');
		$depo = $this->input->post('depo');
		$jenis = $this->input->post('jenis');
		$ipaddr = $this->input->post('ipaddr');
		$merk = $this->input->post('merk');
		$lokasi = $this->input->post('lokasi');
		$wch = $this->input->post('wch');
		$keterangan = $this->input->post('keterangan');
		$data = array(
			'tgl' => $tgl,
			'depo' => $depo,
			'jenisp' => $jenis,
			'ipaddr' => $ipaddr,
			'merk' => $merk,
			'lokasi' => $lokasi,
			'wifich' => $wch,
			'keterangan' => $keterangan
		);
		//var_dump($data);
		$this->Modb->simpan($data,$ipaddr);
		//$this->session->set_flashdata('saved', 'Data Saved!');
		redirect(base_url('input'));
	}
}