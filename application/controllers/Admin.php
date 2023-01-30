<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') !="admin_login")
		{
			redirect(base_url().'login?alert=belum_login');
		}
		$this->load->library('form_validation');
	}
	function index(){
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_index');
		$this->load->view('admin/v_footer');
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'login/?alert=logout');
	}
	function ganti_password(){
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_ganti_password');
		$this->load->view('admin/v_footer');
	}
	function ganti_password_aksi(){
		$baru = $this->input->post('password_baru');
		$ulang = $this->input->post('password_ulang');
		$this->form_validation->set_rules('password_baru','Password Baru','required|matches[password_ulang]');
		$this->form_validation->set_rules('password_ulang','Ulangi Password','required');
		if($this->form_validation->run()!=false)
		{
			$id = $this->session->userdata('id');
			$where = array('id' => $id);
			$data = array('password' => md5($baru));
			$this->M_data->update_data($where,$data,'admin');
			redirect(base_url().'admin/ganti_password/?alert=sukses');
		}else
		{
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_ganti_password');
			$this->load->view('admin/v_footer');	
		}
	}
	// CRUD petugas
	function petugas(){
		// mengambil data dari database
		$data['petugas'] = $this->M_data->get_data('m_biodata_pegawai')->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_petugas',$data);
		$this->load->view('admin/v_footer');
	}
	function petugas_tambah(){
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_petugas_tambah');
		$this->load->view('admin/v_footer');
	}
	function petugas_tambah_aksi(){
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$no_telp = $this->input->post('no_telp');
		$data = array(
						'nik' => $nik,'M_biodata_pegawai_nama' => $nama,
						'username' => $username,
						'password' => md5($password),
						'no_telp' => $no_telp,
					);
		$this->M_data->insert_data($data,'m_biodata_pegawai');
			// insert data ke database simperpus tabel m_biodata_pegawai
		redirect(base_url().'admin/petugas');
			// mengalihkan halaman ke halaman data petugas
	}
	function petugas_edit($id){
		$where = array('id' => $id);
			// mengambil data dari database sesuai id
		$data['petugas'] = $this->M_data->edit_data($where,'m_biodata_pegawai')->result();
		$this->load->view('admin/v_header'); 
		$this->load->view('admin/v_petugas_edit',$data);
		$this->load->view('admin/v_footer');
	}
	function petugas_update(){
		$id = $this->input->post('id');
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$no_telp = $this->input->post('no_telp');
		$where = array('id' => $id);

		// foreach ($petugas as $p){
		// menentukan rules untuk validasi
		$rules = [
 					[
 					'field' => 'no_telp', //<- ini mengikuti nama input di form
 					'label' => 'Nomor Telp',
 					'rules' => 'required|numeric|max_length[13]'
 					]
				];
		$this->form_validation->set_rules($rules);
		// menjalankan validasi
		$this->form_validation->run();
		if($this->form_validation->run() != false){
			}else{
				redirect(base_url().'admin/petugas/?alert=gagal');
			}
		//cek apakah form password di isi atau tidak
		if($password=="")
		{
			$data = array('NIK' => $nik, 'M_biodata_pegawai_nama' => $nama,
			'username' => $username, 'no_telp' => $no_telp );
			$this->M_data->update_data($where,$data,'m_biodata_pegawai');
		}else
		{
			$data = array('NIK' => $nik, 'M_biodata_pegawai_nama' => $nama,
			'username' => $username, 'password' => md5($password), 'no_telp' => $no_telp );
			$this->M_data->update_data($where,$data,'m_biodata_pegawai');
		}
		$this->M_data->update_data($where,$data,'m_biodata_pegawai');

		
		// mengalihkan halaman ke halaman data petugas
		redirect(base_url().'admin/petugas?alert=berhasil');
	}
	function petugas_hapus($id){
		$where = array('id' => $id);
		// menghapus data petugas dari database sesuai id
		$this->M_data->delete_data($where, 'm_biodata_pegawai');
		// mengalihakan halaman ke halaman data petugas
		redirect(base_url().'admin/petugas');
	}
	// akhir CRUD petugas
}