<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Petugas extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status')!="petugas_login"){
			redirect(base_url().'login?alert=belum_login');
		}
	}
	function index(){
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_index');
		$this->load->view('petugas/v_footer');
	}

	function logout() {
		$this->session->sess_destroy();
		redirect(base_url().'login/?alert=logout');
	}

	function ganti_password(){
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_ganti_password');
		$this->load->view('petugas/v_footer');
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
			$this->M_data->update_data($where,$data,'m_biodata_pegawai');
			redirect(base_url().'petugas/ganti_password/?alert=sukses');
		}else
		{
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_ganti_password');
			$this->load->view('admin/v_footer');	
		}
	}

function kk_lama()
	{
		$data['kk_lama'] = $this->M_data->get_data('kk_lama')->result();
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_kk_lama',$data);
		$this->load->view('petugas/v_footer');
	}

	function kk_lama_tambah()
	{
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_lama_tambah');
		$this->load->view('petugas/v_footer');
	}

	function kl_tambah_aksi()
	{
		$no_kk_lama = $this->input->post('no_kk_lama');
		$nama_kep_kel = $this->input->post('nama_kep_kel');
		$alamat = $this->input->post('alamat');
		$tgl_pengesah = $this->input->post('tgl_pengesah');
		$pengesah = $this->input->post('pengesah');
		$kode_pos = $this->input->post('kode_pos');
		$data = array(
		'no_kk_lama' => $no_kk_lama,
		'nama_kep_kel' => $nama_kep_kel,
		'alamat' => $alamat,
		'tgl_pengesah' => $tgl_pengesah,
		'pengesah' => $pengesah,
		'kode_pos' => $kode_pos
		);
		$this->M_data->insert_data($data,'kk_lama');
		redirect(base_url().'petugas/kk_lama');
	}

	function kl_edit($id) {
		$where = array('no_kk_lama' => $id);
		// mengambil data dari database sesuai id
		$data['kk_lama'] = $this->M_data->edit_data($where,'kk_lama')->result();
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_lama_edit',$data);
		$this->load->view('petugas/v_footer');
	}

	function kl_update()
	{
		$no_kk_lama = $this->input->post('no_kk_lama');
		$nama_kep_kel = $this->input->post('nama_kep_kel');
		$alamat = $this->input->post('alamat');
		$tgl_pengesah = $this->input->post('tgl_pengesah');
		$pengesah = $this->input->post('pengesah');
		$kode_pos = $this->input->post('kode_pos');
		$where = array(
		'no_kk_lama' => $no_kk_lama
		);
		$data = array(
		'no_kk_lama' => $no_kk_lama,
		'nama_kep_kel' => $nama_kep_kel,
		'alamat' => $alamat,
		'tgl_pengesah' => $tgl_pengesah,
		'pengesah' => $pengesah,
		'kode_pos' => $kode_pos
		);
		$this->M_data->update_data($where,$data,'kk_lama');
		redirect(base_url().'petugas/kk_lama');
	}
	
	function kl_hapus($id) {
		$where = array(
			'no_kk_lama'=>$id);
		$this->M_data->delete_data($where,'kk_lama');
		redirect(base_url().'petugas/kk_lama');
	}
	// crud kk baru
		// mengambil data dari database
		function kk_baru()
		{
			$data['kk_baru'] = $this->M_data->get_data('kk_baru')->result();
			$this->load->view('petugas/v_header');
			$this->load->view('petugas/v_kk_baru',$data);
			$this->load->view('petugas/v_footer');
		}
	
		function kk_baru_tambah()
		{
			$this->load->view('petugas/v_header');
			$this->load->view('petugas/v_baru_tambah');
			$this->load->view('petugas/v_footer');
		}
	
		function kb_tambah_aksi()
		{
		$no_kk_baru = $this->input->post('no_kk_baru');
		$nama_kep_kk = $this->input->post('nama_kep_kk');
		$alamat = $this->input->post('alamat');
		$tgl_pengesah = $this->input->post('tgl_pengesah');
		$pengesah = $this->input->post('pengesah');
		$kode_pos = $this->input->post('kode_pos');
		$data = array(
		'no_kk_baru' => $no_kk_baru,
		'nama_kep_kk' => $nama_kep_kk,
		'alamat' => $alamat,
		'tgl_pengesah' => $tgl_pengesah,
		'pengesah' => $pengesah,
		'kode_pos' => $kode_pos,
		);
		$this->M_data->insert_data($data,'kk_baru');
		redirect(base_url().'petugas/kk_baru');
		}
	
		function kb_edit($id) {
			$where = array('no_kk_baru' => $id);
			// mengambil data dari database sesuai id
			$data['kk_baru'] = $this->M_data->edit_data($where,'kk_baru')->result();
			$this->load->view('petugas/v_header');
			$this->load->view('petugas/v_baru_edit',$data);
			$this->load->view('petugas/v_footer');
		}
		
		function kb_update() {
		$no_kk_baru = $this->input->post('no_kk_baru');
		$nama_kep_kk = $this->input->post('nama_kep_kk');
		$alamat = $this->input->post('alamat');
		$tgl_pengesah = $this->input->post('tgl_pengesah');
		$pengesah = $this->input->post('pengesah');
		$kode_pos = $this->input->post('kode_pos');
		$where = array('no_kk_baru'=>$no_kk_baru);
	
		$data = array(
		'no_kk_baru' => $no_kk_baru,
		'nama_kep_kk' => $nama_kep_kk,
		'alamat' => $alamat,
		'tgl_pengesah' => $tgl_pengesah,
		'pengesah' => $pengesah,
		'kode_pos' => $kode_pos
			);
			$this->M_data->update_data($where,$data,'kk_baru');
			redirect(base_url().'petugas/kk_baru');
		}

		function kb_hapus($id) {
			$where = array(
				'no_kk_baru'=>$id);
			$this->M_data->delete_data($where,'kk_baru');
			redirect(base_url().'petugas/kk_baru');
		}

	// Rest API Client
	var $API ="";
	function ambilsip(){
		$this->API="http://127.0.0.1/rest_server_kel6/index.php";
		$this->load->library('curl');
		$data['dataktp'] = json_decode($this->curl->simple_get($this->API.'/pdd'));
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_sip',$data);
		$this->load->view('petugas/v_footer');
	}

	//insert biodata mahasiswa ke SIMPERPUS
	function api_input(){
		$this->API="http://127.0.0.1/rest_server_kel6/index.php";
		$this->load->library('curl');
		$data = json_decode($this->curl->simple_get($this->API.'/pdd'));
		$this->db->trans_begin();
		foreach ($data as $row) {
			$data = array(
				"nik" => $row->nik,
				"nama" => $row->nama,
				"jk" => $row->jk,
				"tmp_lahir" => $row->tmp_lahir,
				"tgl_lahir" => $row->tgl_lahir,
				//"no_paspor" => $row->no_paspor,
				//"no_kitas" => $row->no_kitas,
				//"nama_ayah" => $row->nama_ayah,
				//"nama_ibu" => $row->nama_ibu,
				"agama" => $row->agama,
				"negara" => $row->negara,
				"pekerjaan" => $row->pekerjaan,
				"pendidikan" => $row->pendidikan,
				"perkawinan" => $row->perkawinan,
				//"hub_kel" => $row->hub_kel,
				"no_kk_lama" => $row->no_kk_lama
				//"no_kk_baru" => $row->no_kk_baru
			);
			$this->M_data->insert_data($data,'ktp');
		}
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			redirect(base_url().'petugas/penduduk');
		} else {
			$this->db->trans_commit();
			redirect(base_url().'petugas/penduduk');
		}
	}

	// Data penduduk MUTASI KK
	function penduduk() {
		$data['ktp'] = $this->M_data->get_data('ktp')->result();
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_penduduk',$data);
		$this->load->view('petugas/v_footer');
	}

	function pdd_edit($id) {
			$where = array('nik' => $id);
			// mengambil data dari database sesuai id
			$data['ktp'] = $this->M_data->edit_data($where,'ktp')->result();
			$this->load->view('petugas/v_header');
			$this->load->view('petugas/pdd_edit',$data);
			$this->load->view('petugas/v_footer');
		}

	function pdd_update() {
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$jk = $this->input->post('jk');
		$tmp_lahir = $this->input->post('tmp_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$agama = $this->input->post('agama');
		$negara = $this->input->post('negara');
		$pekerjaan = $this->input->post('pekerjaan');
		$pendidikan = $this->input->post('pendidikan');
		$perkawinan = $this->input->post('perkawinan');
		$no_kk_lama = $this->input->post('no_kk_lama');
		$no_kk_baru = $this->input->post('no_kk_baru');
		$where = array('nik'=>$nik);
	
		$data = array(
				"nik" => $nik,
				"nama" => $nama,
				"jk" => $jk,
				"tmp_lahir" => $tmp_lahir,
				"tgl_lahir" => $tgl_lahir,
				"agama" => $agama,
				"negara" => $negara,
				"pekerjaan" => $pekerjaan,
				"pendidikan" => $pendidikan,
				"perkawinan" => $perkawinan,
				"no_kk_lama" => $no_kk_lama,
				"no_kk_baru" => $no_kk_baru
			);
			$this->M_data->update_data($where,$data,'ktp');
			redirect(base_url().'petugas/penduduk');
		}

	function hapus_penduduk(){
		$this->db->empty_table('ktp');
		redirect(base_url().'petugas/penduduk');
	}

	function penduduk_ktp($nik) {
		// mengambil data dari database sesuai id
		$where = array('nik' => $nik);
		$data['ktp'] = $this->M_data->edit_data($where,'ktp')->result();
		$this->load->view('petugas/v_penduduk_kartu',$data);
	}
}