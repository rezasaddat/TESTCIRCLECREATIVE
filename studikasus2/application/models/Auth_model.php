<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Auth_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
        $this->load->database();
        $this->db    = $this->load->database('default', true);
    }

    public function getUserData($username, $password){
        return $this->db->select("*")
                        ->from("users")
                        ->where('username', $username)
                        ->where('password', md5($password))
                        ->get()
                        ->row();
    }
}
?>