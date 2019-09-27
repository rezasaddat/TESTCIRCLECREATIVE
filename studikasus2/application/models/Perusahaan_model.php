<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Perusahaan_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
        $this->load->database();
        $this->db    = $this->load->database('default', true);
    }

    public function getPerusahaan(){
        return $this->db->select("*")
                        ->from("perusahaan")
                        ->get()
                        ->result();
    }

    public function getPerusahaanById($perusahaan_id){
        return $this->db->select("*")
                        ->from("perusahaan")
                        ->where('perusahaan_id',$perusahaan_id)
                        ->get()
                        ->row();
    }

    public function postPerusahaan($data){
        if($this->db->insert('perusahaan', $data)){
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

    public function updatePerusahaan($id, $data){
        if($this->db->update('perusahaan', $data, array('perusahaan_id' => $id))){
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

    public function deletePerusahaan($perusahaan_id){
        if($this->db->where('perusahaan_id', $perusahaan_id)->delete('perusahaan')){
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