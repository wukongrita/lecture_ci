<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}

	public function index()
	{
		$qry = $this->db->query('select * from category');

		$view['data'] = $qry->result_array();

		$this->load->view('kategori/list', $view);
	}

	public function hapus($id)
	{
		$qry = $this->db->delete('category', [
			'id' => $id,
		]);

		redirect(site_url() . '/Kategori');
	}

	public function tambah()
	{
		$this->load->view('kategori/form');
	}

	public function simpan()
	{
		$this->db->insert('category', [
			'id' => $this->input->post('txtId'),
			'name' => $this->input->post('txtName'),
		]);

		redirect(site_url() . '/Kategori');
	}
}
