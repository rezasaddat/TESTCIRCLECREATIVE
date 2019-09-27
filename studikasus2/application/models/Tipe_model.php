<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Tipe_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
        $this->load->database();
        $this->db    = $this->load->database('default', true);
    }

    public function getTipe(){
        return $this->db->select("*")
                        ->from("tipe_mobil")
                        ->get()
                        ->result();
    }

    public function getTipeById($tipe_id){
        return $this->db->select("*")
                        ->from("tipe_mobil")
                        ->where('tipe_id',$tipe_id)
                        ->get()
                        ->row();
    }

    public function postTipe($data){
        if($this->db->insert('tipe_mobil', $data)){
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
        if($this->db->update('tipe_mobil', $data, array('tipe_id' => $id))){
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

    public function deleteTipe($tipe_id){
        if($this->db->where('tipe_id', $tipe_id)->delete('tipe_mobil')){
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