<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['menu'] = $this->paginate('menu', 8, 3);
        $this->templateSite('menu/index', $data, $title = 'Menu');
    }

    public function pesan($menu_id)
    {
        $menu = $this->db->get_where('menu', ['id' => $menu_id])->row_array();
        $harga = $menu['harga'];

        $this->db->order_by('no_pesanan', 'DESC');
        $this->db->limit(1);
        $pesanan = $this->db->get_where('pesanan', ['lunas' => 1])->row_array();
        $no_pesanan = $pesanan['no_pesanan'];

        $pesananSudahAda = $this->db->get_where('pesanan', ['menu_id' => $menu_id,'lunas' => 0])->row_array();
        $menuIdSudahAda = $pesananSudahAda['menu_id'];

        if ( $no_pesanan ) {
            $no_pesanan = $no_pesanan + 1;
        } else {
            $no_pesanan = 1;
        }

        if ($menu_id == $menuIdSudahAda) {
            $data = [
                'no_pesanan'=> $pesananSudahAda['no_pesanan'],
                'menu_id'       => $pesananSudahAda['menu_id'],
                'quantity'  => $pesananSudahAda['quantity'] + 1,
                'subtotal'  => $pesananSudahAda['subtotal'] + $harga,
                'lunas'         => 0
            ];

            $this->db->where('menu_id', $menu_id);
            $this->db->where('lunas', 0);
            $this->db->update('pesanan', $data);
        } else {
            $data = [
                'no_pesanan'=> $no_pesanan,
                'menu_id'       => $menu_id,
                'quantity'  => 1,
                'subtotal'  => $harga,
                'lunas'         => 0
            ];

            $this->db->insert('pesanan', $data);
        }

        redirect('menu');
    }

}
