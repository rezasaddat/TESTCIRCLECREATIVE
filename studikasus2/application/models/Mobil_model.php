<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Mobil_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
        $this->load->database();
        $this->db    = $this->load->database('default', true);
    }

    public function getMobil(){
        return $this->db->select("mobil.*, perusahaan.nama_perusahaan, tipe_mobil.nama_tipe")
                        ->from("mobil")
                        ->join("perusahaan", 'mobil.perusahaan_id = perusahaan.perusahaan_id', 'left')
                        ->join("tipe_mobil", 'mobil.tipe_id = tipe_mobil.tipe_id', 'left')
                        ->get()
                        ->result();
    }

    public function getMobilById($mobil_id){
        return $this->db->select("mobil.*, perusahaan.perusahaan_id, tipe_mobil.tipe_id")
                        ->from("mobil")
                        ->join("perusahaan", 'mobil.perusahaan_id = perusahaan.perusahaan_id', 'left')
                        ->join("tipe_mobil", 'mobil.tipe_id = tipe_mobil.tipe_id', 'left')
                        ->where('mobil_id',$mobil_id)
                        ->get()
                        ->row();
    }

    public function postMobil($data){
        if($this->db->insert('mobil', $data)){
            return [
                'status' => 200,
                'message' => 'insert successfull'
            ];
        }else{
            return [
                'status' => 400,
                'message' => 'insert failed'
            ];
        }
    }

    public function updateTipe($id, $data){
        if($this->db->update('mobil', $data, array('mobil_id' => $id))){
            return [
                'status' => 200,
                'message' => 'update successfull'
            ];
        }else{
            return [
                'status' => 400,
                'message' => 'update failed'
            ];
        }
    }

    public function deleteMobil($mobil_id){
        if($this->db->where('mobil_id', $mobil_id)->delete('mobil')){
            return [
                'status' => 200,
                'message' => 'delete successfull'
            ];
        }else{
            return [
                'status' => 400,
                'message' => 'delete failed'
            ];
        }
    }
}
?>