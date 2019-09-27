<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

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
        $this->load->model('Perusahaan_model');
    }
	public function index()
	{
        $param['list'] = $this->Perusahaan_model->getPerusahaan();
		$this->load->view('perusahaan_list', $param);
    }
    
    public function formPerusahaan(){
        $this->load->view('perusahaan_form');
    }

    public function addPerusahaan(){
        $data = array(
            'nama_perusahaan' => $this->input->post('nama_perusahaan'),
            'kontak_perusahaan' => $this->input->post('kontak_perusahaan'),
            'email_perusahaan' => $this->input->post('email_perusahaan'),
        );
        $r = $this->Perusahaan_model->postPerusahaan($data);
        echo json_encode($r);
    }

    public function editPerusahaan($perusahaan_id){
        $param['perusahaan'] = $this->Perusahaan_model->getPerusahaanById($perusahaan_id);
        $this->load->view('perusahaan_edit', $param);
    }

    public function updatePerusahaan($id){
        $data = array(
            'nama_perusahaan' => $this->input->post('nama_perusahaan'),
            'kontak_perusahaan' => $this->input->post('kontak_perusahaan'),
            'email_perusahaan' => $this->input->post('email_perusahaan'),
        );
        $r = $this->Perusahaan_model->updatePerusahaan($id, $data);
        echo json_encode($r);
    }

    public function hapusPerusahaan($perusahaan_id){
        $r = $this->Perusahaan_model->deletePerusahaan($perusahaan_id);
        redirect(base_url('index.php/Perusahaan'));
    }
}
