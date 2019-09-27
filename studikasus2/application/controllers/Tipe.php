<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipe extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct() {
        parent::__construct();
        $this->load->model('Tipe_model');
    }
	public function index()
	{
        $param['list'] = $this->Tipe_model->getTipe();
		$this->load->view('tipe_list', $param);
    }
    
    public function formTipe(){
        $this->load->view('tipe_form');
    }

    public function addTipe(){
        $data = array(
            'nama_tipe' => $this->input->post('nama_tipe')
        );
        $r = $this->Tipe_model->postTipe($data);
        echo json_encode($r);
    }

    public function editTipe($tipe_id){
        $param['tipe'] = $this->Tipe_model->getTipeById($tipe_id);
        $this->load->view('tipe_edit', $param);
    }

    public function updateTipe($id){
        $data = array(
            'nama_tipe' => $this->input->post('nama_tipe')
        );
        $r = $this->Tipe_model->updateTipe($id, $data);
        echo json_encode($r);
    }

    public function hapusTipe($tipe_id){
        $r = $this->Tipe_model->deleteTipe($tipe_id);
        redirect(base_url('index.php/Tipe'));
    }
}
