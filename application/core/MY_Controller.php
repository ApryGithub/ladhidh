<?php

// error_reporting(0);

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

  public function __construct(){
      parent::__construct();
      // date_default_timezone_set('Asia/Jakarta');
      $this->load->model('RestoranModels');
  }

  function getNotify(){
    $pesanan = $this->db->get_where('pesanan', ['lunas' => 0])->result_array();
    $notif_pesanan = 0;
    foreach ($pesanan as $p) {
      $notif_pesanan += $p['quantity'];
    }

    return $notif_pesanan;
  }

  function paginate($table, $perPage, $segment){
    $totalMenu = $this->db->get($table)->num_rows();

    $this->load->library('pagination');

    $config['base_url'] = base_url('/menu/index');
    $config['total_rows'] = $totalMenu;
    $config['per_page'] = $perPage;

    $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
    $config['full_tag_close'] = '</ul></nav>';

    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = '</a></li>';

    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';

    $config['next_link'] = '&raquo;';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';

    $config['prev_link'] = '&laquo;';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';

    $config['attributes'] = array('class' => 'page-link');

    $this->pagination->initialize($config);

    $start = $this->uri->segment($segment);
    return $this->db->get($table, $config['per_page'], $start)->result_array();
  }
	/*
	|================================
	|  Start Template
	|================================
	*/

  // function templateAdmin($view, $data = NULL, $title = NULL){
	//
  // }

  public function templateSite($view, $data = NULL, $title = NULL){
    /* Start No Edit */
		// $data = $this->data;
		$data['notif_pesanan'] = $this->getNotify();
    $data['title'] = $title;
    $data['header'] = $this->load->view('layouts/_header', $data, TRUE);
    $data['mainMenu'] = $this->load->view('layouts/_menu', $data, TRUE);
    $data['content'] = $this->load->view($view, $data, TRUE);
    $data['JsInclude'] = $this->load->view('layouts/_footer', $data, TRUE);
    /* End No Edit */

    /* Bisa di Edit dibawah ini */

    $this->load->view('layouts/_template', $data);
  }
}
