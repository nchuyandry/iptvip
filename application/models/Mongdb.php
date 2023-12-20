<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mongdb extends CI_Model {
	function viewmaster() {
		return $this->mongo_db->sort(array('tgl' => -1))->get('masterp');
	}
	function viewdepo() {
		return $this->mongo_db->get('depo');
	}
	function insertMasterp() {
		$tgl = $this->input->post('tgl');
		$kode = $this->input->post('kode');
		$model = $this->input->post('model');
		$tipe = $this->input->post('tipe');
		$sn = $this->input->post('sn');
		$data = array(
			'tgl' => new MongoDB\BSON\UTCDateTime(new \DateTimeImmutable($tgl)),
			'kodebrg' => $kode,
			'model' => $model,
			'tipe' => $tipe,
			'serialnumber' => $sn,
			'status' => ""
		);
		$this->mongo_db->insert('masterp', $data);
		return true; 
	}
	function saveLog($data) {
		$sn = $this->input->post('sn');
		$datalog = array(
			'logtgl' => new MongoDB\BSON\UTCDateTime(),
			'serialnumber' => $sn,
			'loguser' => $this->session->userdata('name'),
			'logdata'  => "Input data printer " . $model ." - " . $sn
		);
		$this->mongo_db->insert('log', $datalog);
		return true; 
	}
	
}