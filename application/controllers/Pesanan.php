<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// $data = $this->data;
		// $data['title'] = 'Pesanan';

		// $this->db->select('pesanan.id as pesanan_id, menu.id as menu_id, pesanan.*, menu.*');
		// $this->db->from('pesanan');
		// $this->db->join('menu', 'menu.id = pesanan.menu_id');
		// $this->db->where('lunas', 0);
		// $data['pesanan'] = $this->db->get()->result_array();
		// $totalBayar = 0;
		// foreach ($data['pesanan'] as $pesanan) {
		// 	$totalBayar += $pesanan['subtotal'];
		// }

		// $data['total_bayar'] = $totalBayar;

		// if ( $data['pesanan'] ) {
		// 	$data['no_pesanan'] = $data['pesanan'][0]['no_pesanan'];
		// }

		// $this->load->view('layouts/_header', $data);
		// $this->load->view('pesanan/index');
		// $this->load->view('layouts/_footer');


		$data['pesanan'] = $this->RestoranModels->getDetailTwoTableWhere(
			'a.id as pesanan_id, b.id as menu_id, a.*, b.*',
			['lunas' => 0],
			'pesanan a',
			'menu b',
			'b.id = a.menu_id'
		)->result_array();
		$totalBayar = 0;
		foreach ($data['pesanan'] as $pesanan) {
			$totalBayar += $pesanan['subtotal'];
		}

		$data['total_bayar'] = $totalBayar;

		if ( $data['pesanan'] ) {
			$data['no_pesanan'] = $data['pesanan'][0]['no_pesanan'];
		}
		$this->templateSite('pesanan/index', $data, $title = 'Pesanan');
		// $this->output->enable_profiler(TRUE);
	}

	public function tambah($pesanan_id)
	{
		$this->db->select('pesanan.id as pesanan_id, menu.id as menu_id, pesanan.*, menu.*');
		$this->db->from('pesanan');
		$this->db->join('menu', 'menu.id = pesanan.menu_id');
		$this->db->where('pesanan.id', $pesanan_id);
		$pesanan = $this->db->get()->row_array();

		$data = [
			'quantity'	=> $pesanan['quantity'] + 1,
			'subtotal'	=> $pesanan['subtotal'] + $pesanan['harga']
		];

		$this->db->where('id', $pesanan_id);
		$this->db->update('pesanan', $data);

		redirect('pesanan');
	}

	public function kurang($pesanan_id)
	{
		$this->db->select('pesanan.id as pesanan_id, menu.id as menu_id, pesanan.*, menu.*');
		$this->db->from('pesanan');
		$this->db->join('menu', 'menu.id = pesanan.menu_id');
		$this->db->where('pesanan.id', $pesanan_id);
		$pesanan = $this->db->get()->row_array();

		$data = [
			'quantity'	=> $pesanan['quantity'] - 1,
			'subtotal'	=> $pesanan['subtotal'] - $pesanan['harga']
		];

		$this->db->where('id', $pesanan_id);
		$this->db->update('pesanan', $data);

		redirect('pesanan');
	}

	public function delete($pesanan_id)
	{
		$this->db->where('id', $pesanan_id);
		$this->db->delete('pesanan');

		redirect('pesanan');
	}

	public function bayar($no_pesanan)
	{

		$pesanan = $this->db->get_where('pesanan', ['no_pesanan' => $no_pesanan])->result_array();
		$total = 0;
		foreach ($pesanan as $p) {
			$total += $p['subtotal'];
		}

		$data = [
			'no_pesanan'		=> $no_pesanan,
			'total_bayar'		=> $total,
			'date_created'	=> time()
		];

		$this->db->insert('pembayaran', $data);

		$this->db->set('lunas', 1);
		$this->db->where('no_pesanan', $no_pesanan);
		$this->db->update('pesanan');

		redirect('pesanan');
	}

}
