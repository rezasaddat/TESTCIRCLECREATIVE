<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

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
        $this->load->model('Mobil_model');
        $this->load->model('Perusahaan_model');
        $this->load->model('Tipe_model');
    }
	public function index()
	{
        $param['list'] = $this->Mobil_model->getMobil();
		$this->load->view('mobil_list', $param);
    }
    
    public function formMobil(){
        $param['perusahaan'] = $this->Perusahaan_model->getPerusahaan();
        $param['tipe'] = $this->Tipe_model->getTipe();
        $this->load->view('mobil_form', $param);
    }

    public function addMobil(){
        $data = array(
            'nama_mobil' => $this->input->post('nama_mobil'),
            'tanggal_release' => $this->input->post('tanggal_release'),
            'harga' => $this->input->post('harga'),
            'perusahaan_id' => $this->input->post('perusahaan'),
            'tipe_id' => $this->input->post('tipe'),
        );
        $r = $this->Mobil_model->postMobil($data);
        echo json_encode($r);
    }

    public function editMobil($mobil_id){
        $param['mobil'] = $this->Mobil_model->getMobilById($mobil_id);
        $param['perusahaan'] = $this->Perusahaan_model->getPerusahaan();
        $param['tipe'] = $this->Tipe_model->getTipe();
        $this->load->view('mobil_edit', $param);
    }

    public function updateMobil($id){
        $data = array(
            'nama_mobil' => $this->input->post('nama_mobil'),
            'tanggal_release' => $this->input->post('tanggal_release'),
            'harga' => $this->input->post('harga'),
            'perusahaan_id' => $this->input->post('perusahaan'),
            'tipe_id' => $this->input->post('tipe'),
        );
        $r = $this->Mobil_model->updateMobil($id, $data);
        echo json_encode($r);
    }

    public function hapusMobil($tipe_id){
        $r = $this->Mobil_model->deleteMobil($mobil_id);
        redirect(base_url('index.php/Mobil'));
    }
}
