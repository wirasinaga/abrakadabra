<?php 
error_reporting(0);

class Kategori extends ci_controller{
public function __construct(){
        parent::__construct();
        $this->load->model('model_barang'); 
        $this->load->model('model_cart');                 
		$this->load->library('pagination');

    }
    
	public function batik_pria(){

		if($this->session->userdata('user')){
		$data['kategori'] = 'laki-laki';
		$getData = $this->db->get_where('tbl_barang',$data);
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/kategori/batik_pria'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_photolaki($config['per_page'],$this->uri->segment(3));
		
		$session=$this->session->userdata('user');
		$data['nama_member']=$session['nama_member'];
		$data['content']	= 'v_kategori_lakilaki';
		$this->load->view('v_home',$data);
	}else{

		$data['kategori'] = 'laki-laki';
		$getData = $this->db->get_where('tbl_barang',$data);
		$data['photo'] = $this->db->get('tbl_barang',$data);
		$getData = $this->db->get('tbl_barang');
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/kategori/batik_pria'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_photolaki($config['per_page'],$this->uri->segment(3));
		$data['nama_member'] = 'login'; //jika tidak login
		$data['content']	= 'v_kategori_lakilaki';
		$this->load->view('v_home',$data);

	}

}

public function galeri(){

	if($this->session->userdata('user')){
		
		$data['data'] = $this->db->get('tbl_galeri');
		//$a = $getData->num_rows();
		
		//------------------------------------------------------------------------------------	
		
		
		/*$data['photo'] = $this->model_barang->get_photogaleri($config['per_page'],$this->uri->segment(3));*/
		
		$session=$this->session->userdata('user');
		$data['nama_member']=$session['nama_member'];
		$this->load->view('v_galeri',$data);
	}else{

		$data['kategori'] = 'perempuan';
		$getData = $this->db->get_where('tbl_barang',$data);
		$data['photo'] = $this->db->get('tbl_barang',$data);
		$getData = $this->db->get('tbl_barang');
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/kategori/batik_wanita'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_photoperempuan($config['per_page'],$this->uri->segment(3));
		$data['nama_member'] = 'login'; //jika tidak login
		$data['content']	= 'v_kategori_perempuan';
		$this->load->view('v_home',$data);

	}

}



public function batik_wanita(){

		if($this->session->userdata('user')){
		$data['kategori'] = 'perempuan';
		$getData = $this->db->get_where('tbl_barang',$data);
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/kategori/batik_wanita'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_photoperempuan($config['per_page'],$this->uri->segment(3));
		
		$session=$this->session->userdata('user');
		$data['nama_member']=$session['nama_member'];
		$data['content']	= 'v_kategori_perempuan';
		$this->load->view('v_home',$data);
	}else{

		$data['kategori'] = 'perempuan';
		$getData = $this->db->get_where('tbl_barang',$data);
		$data['photo'] = $this->db->get('tbl_barang',$data);
		$getData = $this->db->get('tbl_barang');
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/kategori/batik_wanita'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_photoperempuan($config['per_page'],$this->uri->segment(3));
		$data['nama_member'] = 'login'; //jika tidak login
		$data['content']	= 'v_kategori_perempuan';
		$this->load->view('v_home',$data);

	}

}




public function katun_prisma(){

		if($this->session->userdata('user')){
        $data['kode_jenis']   = 'BTK.0003';
		$getData = $this->db->get_where('tbl_barang',$data);
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/kategori/katun_prisma'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_katun_prisma($config['per_page'],$this->uri->segment(3));
		
		$session=$this->session->userdata('user');
		$data['nama_member']=$session['nama_member'];
		$data['content']	= 'v_katun_prisma';
		$this->load->view('v_home',$data);
	}else{
        $data['kode_jenis']   = 'BTK.0003';
		$getData = $this->db->get_where('tbl_barang',$data);
		$data['photo'] = $this->db->get('tbl_barang',$data);
		$getData = $this->db->get('tbl_barang');
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/kategori/katun_prisma'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_katun_prisma($config['per_page'],$this->uri->segment(3));
		$data['nama_member'] = 'login'; //jika tidak login
		$data['content']	= 'v_katun_prisma';
		$this->load->view('v_home',$data);

	}

}




public function motif_jambi(){

		if($this->session->userdata('user')){
        $data['kode_jenis']   = 'BTK.0010';
		$getData = $this->db->get_where('tbl_barang',$data);
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/kategori/motif_jambi'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_motif_jambi($config['per_page'],$this->uri->segment(3));
		
		$session=$this->session->userdata('user');
		$data['nama_member']=$session['nama_member'];
		$data['content']	= 'v_motif_jambi';
		$this->load->view('v_home',$data);
	}else{
        $data['kode_jenis']   = 'BTK.0010';
		$getData = $this->db->get_where('tbl_barang',$data);
		$data['photo'] = $this->db->get('tbl_barang',$data);
		$getData = $this->db->get('tbl_barang');
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/kategori/motif_jambi'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_motif_jambi($config['per_page'],$this->uri->segment(3));
		$data['nama_member'] = 'login'; //jika tidak login
		$data['content']	= 'v_motif_jambi';
		$this->load->view('v_home',$data);

	}

}





public function setelan_wanita(){

		if($this->session->userdata('user')){
        $data['kode_jenis']   = 'BTK.0006';
		$getData = $this->db->get_where('tbl_barang',$data);
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/kategori/setelan_wanita'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_setelan_wanita($config['per_page'],$this->uri->segment(3));
		
		$session=$this->session->userdata('user');
		$data['nama_member']=$session['nama_member'];
		$data['content']	= 'v_setelan_wanita';
		$this->load->view('v_home',$data);
	}else{
        $data['kode_jenis']   = 'BTK.0006';
		$getData = $this->db->get_where('tbl_barang',$data);
		$data['photo'] = $this->db->get('tbl_barang',$data);
		$getData = $this->db->get('tbl_barang');
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/kategori/setelan_wanita'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_setelan_wanita($config['per_page'],$this->uri->segment(3));
		$data['nama_member'] = 'login'; //jika tidak login
		$data['content']	= 'v_setelan_wanita';
		$this->load->view('v_home',$data);

	}

}

public function kontak(){
	if($this->session->userdata('user')){
		$session=$this->session->userdata('user');
		$data['nama_member']=$session['nama_member'];
		$this->load->view('v_kontak',$data);


	}else{
		$data['nama_member'] = 'login'; //jika tidak login
	}
}

public function insert_kontak(){

	$nama 		= $this->input->post('nama');
	$email 		= $this->input->post('email');
	$pesan 		= $this->input->post('pesan');

	$data = array('nama' => $nama,'email' => $email, 'pesan' => $pesan );

	$sukses = $this->db->insert('tbl_kontak',$data);

	if($sukses){
		redirect('site');
	}else{
		redirect('site');
	}
}





}




 ?>