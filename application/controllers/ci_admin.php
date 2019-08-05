<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ci_admin extends CI_Controller {

 public function __construct(){
        parent::__construct();
        $this->load->model('model_barang');                 
    }
    
public function log_in(){
	$this->load->view('admin/v_logamin');
}

public function index(){
	if($this->session->userdata('user')){

	$data['content'] = 'admin/v_index';
	$this->load->view('admin/v_home',$data);

	}else{
		$this->load->view('admin/v_logamin');
	}
}

public function form_barang(){
	$table = 'tbl_barang';
	$data['kodeunik'] = $this->model_barang->getkodeunik($table); 
	$data['content'] = 'admin/input_barang';
	$this->load->view('admin/v_home',$data);
}

public function form_stok(){
	$table = 'tbl_barang';
	$data['kodeunik'] = $this->model_barang->getkodeunik($table); 
	$data['content'] = 'admin/input_stok';
	$this->load->view('admin/v_home',$data);
}	
/*form edit barang*/
public function edit_barang($kode_barang){
	$data['kode_barang']	= $kode_barang;
	$data['data']			=$this->db->get_where('tbl_barang',$data);
	$data['content'] 		= 'admin/edit_barang';
	$this->load->view('admin/v_home',$data);
}	

public function form_batik(){
	$table				= 'tbl_batik';
	$data['kodeunik'] 	= $this->model_barang->getkodebatik($table);
	$data['content']	= 'admin/input_batik';
	$this->load->view('admin/v_home',$data);	
}

public function edit_batik($kode_jenis){
	$data['kode_jenis'] = $kode_jenis;
	$data['data']		= $this->db->get_where('tbl_batik',$data);
	$data['content']	= 'admin/edit_batik';
	$this->load->view('admin/v_home',$data);	
}

public function form_galeri(){
	$data['content']	= 'admin/input_galeri';
	$this->load->view('admin/v_home',$data);	
}

public function form_artikel(){
	$data['content']	= 'admin/input_artikel';
	$this->load->view('admin/v_home',$data);	
}

/*public function form_stok(){
	$data['content']	= 'admin/input_stok';
	$this->load->view('admin/v_home',$data);	
}*/

/*menambah stok*/
function add_stok(){
    $kode_produk    = $this->input->post('kode_produk');
    $id_ukuran      = $this->input->post('id_ukuran');
    $stok           = $this->input->post('stok');
    $jenis          = $this->input->post('jenis');
    $harga_member         = $this->input->post('harga_member');
    $harga_nonmember          = $this->input->post('harga_nonmember');

    $data = array('kode_produk' => $kode_produk ,
                  'id_ukuran'   => $id_ukuran, 
                  'stok'        => $stok,
                  'harga_member'      => $harga_member,
                  'harga_nonmember'       => $harga_nonmember
                   );
    $this->db->insert('tb_stok',$data);
    redirect('ci_admin/form_stok');
}

/*fungsi memasukan data ke table tbl_batik*/

public function proces_TambahBatik(){
	$kode_jenis		= $this->input->post('kode_jenis');
	$jenis_batik	= $this->input->post('jenis_batik');

	$data = array('kode_jenis' => $kode_jenis , 'jenis_batik' => $jenis_batik );
	$sukses	=	$this->db->insert('tbl_batik',$data);
			if($sukses == TRUE){
				$info['jenis_batik']	= $this->input->post('jenis_batik');
				$info['info'] 			= 'sukses';
				$info['content']	= 'admin/view_batik';
				$info['data'] = $this->db->get('tbl_batik');
				$this->load->view('admin/v_home',$info);	
			}else{
				return FALSE;
				exit();
				redirect('ci_admin/view_batik','refresh');

			}

}

public function proces_EditBatik(){
	$kode_jenis		= $this->input->post('kode_jenis');
	$jenis_batik	= $this->input->post('jenis_batik');

	$data = array('jenis_batik' => $jenis_batik );

							$this->db->where('kode_jenis', $kode_jenis);
							$sukses = $this->db->update('tbl_batik', $data);
			if($sukses == TRUE){
				$info['jenis_batik']	= $this->input->post('jenis_batik');
				$info['info'] 			= 'sukses';
				$info['content']	= 'admin/view_batik';
				$info['data'] = $this->db->get('tbl_batik');
				$this->load->view('admin/v_home',$info);	
			}else{
				return FALSE;
				exit();
				redirect('ci_admin/view_batik','refresh');

			}

}
/*proses tambah stok*/
public function proces_TambahStok(){
	$kode_barang		= $this->input->post('kode_barang');
	$jumlah_stok		= $this->input->post('jumlah_stok');

	$sql = "UPDATE tbl_barang set stok='$jumlah_stok' where kode_barang='$kode_barang'";
	$sqls = "INSERT INTO tbl_stok (jumlah_stok,kode_barang) values ('$jumlah_stok','$kode_barang')";
	$this->db->query($sqls);
	$rs  = $this->db->query($sql);

	if($rs){
		redirect('ci_admin/view_stok');
	}

}

/*fungsi memasukan data ke table barang*/
public function proces_TambahBarang(){

	$this->load->library('form_validation');

	$kode_barang 	= $this->input->post('kode_barang');
	$nama_barang 	= $this->input->post('nama_barang');
	$harga			= $this->input->post('harga');
	$kode_jenis		= $this->input->post('kode_jenis');
	$stok			= $this->input->post('stok');
	$ukuran			= $this->input->post('ukuran');
	$kategori		= $this->input->post('kategori');
	$gambar 		= $_FILES['userfile']['name'];
	$keterangan		= $this->input->post('keterangan');

	// Konfigurasi Upload Gambar
				$config['upload_path']          = './application/views/photo';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']				= '1024';
				$config['max_width']  			= '1600';
				$config['max_height']  			= '1200';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());        
						$data = array(
										'kode_barang' => $kode_barang,
										'nama_barang' => $nama_barang,
										'harga'       => $harga,
										'kode_jenis'  => $kode_jenis,
										'stok'        => $stok,
										'ukuran'      => $ukuran,
										'kategori'    => $kategori,
										'keterangan'  => $keterangan,
										'photo_url'   => $gambar
						);
						$sukses = $this->db->insert('tbl_barang', $data);
						if($sukses == TRUE){
							redirect('ci_admin/form_barang','refresh');
							return $sukses;
						}else{
							return FALSE;
							exit();
							redirect('ci_admin/view_barang','refresh');

						}
                }

	}


/*fungsi memasukan data ke table barang*/
public function proces_EditBarang(){

	$this->load->library('form_validation');

	$kode_barang 	= $this->input->post('kode_barang');
	$nama_barang 	= $this->input->post('nama_barang');
	$harga			= $this->input->post('harga');
	$kode_jenis		= $this->input->post('kode_jenis');
	$kategori		= $this->input->post('kategori');
	$keterangan		= $this->input->post('keterangan');
	$gambar 		= $_FILES['userfile']['name'];

				$config['upload_path']          = './application/views/photo';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']				= '1024';
				$config['max_width']  			= '1600';
				$config['max_height']  			= '1200';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());        

						$data = array(
										'kode_barang' => $kode_barang,
										'nama_barang' => $nama_barang,
										'harga'       => $harga,
										'kode_jenis'  => $kode_jenis,
										'kategori'    => $kategori,
										'keterangan'  => $keterangan,
										'photo_url'   => $gambar
						);
							$this->db->where('kode_barang', $kode_barang);
							$sukses = $this->db->update('tbl_barang', $data);
						if($sukses == TRUE){
							redirect('ci_admin/view_barang','refresh');
							return $sukses;
						}else{
							return FALSE;
							exit();
							redirect('ci_admin/view_barang','refresh');

						}
						}

	}
//fungsi Untuk Menghapus data Barang
	public function hapus_barang($kode_barang){
			$data['kode_barang']	= $kode_barang;
			$sql			= $this->db->delete('tbl_barang',array('kode_barang'=>$kode_barang));
			if($sql){
			?>	
			<script type="text/javascript">
			alert("sukses di hapus data <?php echo $kode_barang ?>");window.location="<?php echo base_url(); ?>index.php/ci_admin/view_barang";
			</script>
			<?php	
		}else{
			?>	
			<script type="text/javascript">
			alert("GAGAL di hapus data <?php echo $kode_barang ?>");window.location="<?php echo base_url(); ?>index.php/view_barang";
			</script>
			<?php	
		}
		
	}

	public function hapus_order($kode_cart){
			$data['kode_cart']	= $kode_cart;
			$sql			= $this->db->delete('tbl_order',array('kode_cart'=>$kode_cart));
			if($sql){
			?>	
			<script type="text/javascript">
			alert("sukses di hapus data <?php echo $kode_cart ?>");window.location="<?php echo base_url(); ?>index.php/ci_admin/view_allorder";
			</script>
			<?php	
		}else{
			?>	
			<script type="text/javascript">
			alert("GAGAL di hapus data <?php echo $kode_cart ?>");window.location="<?php echo base_url(); ?>index.php/view_allorder";
			</script>
			<?php	
		}
		
	}

	public function hapus_batik($kode_jenis){
			$data['kode_jenis']	= $kode_jenis;
			$sql			= $this->db->delete('tbl_batik',array('kode_jenis'=>$kode_jenis));
			if($sql){
			?>	
			<script type="text/javascript">
			alert("sukses di hapus data <?php echo $kode_jenis ?>");window.location="<?php echo base_url(); ?>index.php/ci_admin/view_batik";
			</script>
			<?php	
		}else{
			?>	
			<script type="text/javascript">
			alert("GAGAL di hapus data <?php echo $kode_jenis ?>");window.location="<?php echo base_url(); ?>index.php/view_batik";
			</script>
			<?php	
		}
		
	}

public function hapus_stok($id_stok){
			$data['id_stok']	= $id_stok;
			$sql				= $this->db->delete('tbl_stok',array('id_stok'=>$id_stok));
			if($sql){
			?>	
			<script type="text/javascript">
			alert("sukses di hapus data <?php echo $id_stok ?>");window.location="<?php echo base_url(); ?>index.php/ci_admin/view_stok";
			</script>
			<?php	
		}else{
			?>	
			<script type="text/javascript">
			alert("GAGAL di hapus data <?php echo $id_stok ?>");window.location="<?php echo base_url(); ?>index.php/view_stok";
			</script>
			<?php	
		}
		
	}
public function hapus_galeri($id_galeri){
			$data['id_galeri']	= $id_galeri;
			$sql				= $this->db->delete('tbl_galeri',array('id_galeri'=>$id_galeri));
			if($sql){
			?>	
			<script type="text/javascript">
			alert("sukses di hapus data <?php echo $id_galeri ?>");window.location="<?php echo base_url(); ?>index.php/ci_admin/view_galeri";
			</script>
			<?php	
		}else{
			?>	
			<script type="text/javascript">
			alert("GAGAL di hapus data <?php echo $id_galeri ?>");window.location="<?php echo base_url(); ?>index.php/view_galeri";
			</script>
			<?php	
		}
		
	}

public function hapus_member($id_member){
			$data['id_member']	= $id_member;
			$sql				= $this->db->delete('tbl_member',array('id_member'=>$id_member));
			if($sql){
			?>	
			<script type="text/javascript">
			alert("sukses di hapus data <?php echo $id_member ?>");window.location="<?php echo base_url(); ?>index.php/ci_admin/view_member";
			</script>
			<?php	
		}else{
			?>	
			<script type="text/javascript">
			alert("GAGAL di hapus data <?php echo $id_member ?>");window.location="<?php echo base_url(); ?>index.php/view_member";
			</script>
			<?php	
		}
		
	}

public function hapus_konfirmasi($id_konfirmasi){
			$data['id_konfirmasi']	= $id_konfirmasi;
			$sql					= $this->db->delete('tbl_konfirmasi',array('id_konfirmasi'=>$id_konfirmasi));
			if($sql){
			?>	
			<script type="text/javascript">
			alert("sukses di hapus data <?php echo $id_konfirmasi ?>");window.location="<?php echo base_url(); ?>index.php/ci_admin/konfirmasi";
			</script>
			<?php	
		}else{
			?>	
			<script type="text/javascript">
			alert("GAGAL di hapus data <?php echo $id_konfirmasi ?>");window.location="<?php echo base_url(); ?>index.php/konfirmasi";
			</script>
			<?php	
		}
		
	}

public function hapus_cart($kode_cart){
			$data['kode_cart']	= $kode_cart;
			$sql			= $this->db->delete('tbl_cart',array('kode_cart'=>$kode_cart));
			if($sql){
			?>	
			<script type="text/javascript">
			alert("sukses di hapus data <?php echo $kode_cart ?>");window.location="<?php echo base_url(); ?>index.php/ci_admin/view_allcart";
			</script>
			<?php	
		}else{
			?>	
			<script type="text/javascript">
			alert("GAGAL di hapus data <?php echo $kode_cart ?>");window.location="<?php echo base_url(); ?>index.php/view_allcart";
			</script>
			<?php	
		}
		
	}

public function hapus_kontak($id_kontak){
			$data['id_kontak']	= $id_kontak;
			$sql			= $this->db->delete('tbl_kontak',array('id_kontak'=>$id_kontak));
			if($sql){
			?>	
			<script type="text/javascript">
			alert("sukses di hapus data <?php echo $id_kontak ?>");window.location="<?php echo base_url(); ?>index.php/ci_admin/kontak";
			</script>
			<?php	
		}else{
			?>	
			<script type="text/javascript">
			alert("GAGAL di hapus data <?php echo $id_kontak ?>");window.location="<?php echo base_url(); ?>index.php/kontak";
			</script>
			<?php	
		}
		
	}

/*fungsi memasukan data ke table Galeri*/
public function proces_TambahGaleri(){

	$this->load->library('form_validation');

	$nama_foto	 	= $this->input->post('nama_foto');
	$photo_url 		= $_FILES['userfile']['name'];
	$keterangan		= $this->input->post('keterangan');

	// Konfigurasi Upload Gambar
				$config['upload_path']          = './application/views/photo';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']				= '5024';
				$config['max_width']  			= '5600';
				$config['max_height']  			= '5200';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());        
						$data = array(
										'nama_foto' 	=> $nama_foto,
										'keterangan' 	=> $keterangan,
										'photo_url'   => $photo_url
						);
						$sukses = $this->db->insert('tbl_galeri', $data);
						if($sukses == TRUE){
							redirect('ci_admin/form_galeri','refresh');
							return $sukses;
						}else{
							return FALSE;
							exit();
							redirect('ci_admin/form_galeri','refresh');

						}
                }

	}

	/*fungsi memasukan data ke table Blog*/
public function proces_TambahArtikel(){

	$this->load->library('form_validation');

	$judul_blog	 	= $this->input->post('judul_blog');
	$photo_url 		= $_FILES['userfile']['name'];
	$isi			= $this->input->post('isi');

	// Konfigurasi Upload Gambar
				$config['upload_path']          = './application/views/photo';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']				= '1024';
				$config['max_width']  			= '1600';
				$config['max_height']  			= '1200';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());        
						$data = array(
										'judul_blog' 	=> $judul_blog,
										'isi' 			=> $isi,
										'photo_url'   	=> $photo_url
						);
						$sukses = $this->db->insert('tbl_blog', $data);
						if($sukses == TRUE){
							redirect('ci_admin/blog','refresh');
							return $sukses;
						}else{
							return FALSE;
							exit();
							redirect('ci_admin/blog','refresh');

						}
                }

	}
/*funsi menampilkan data barang*/
	public function view_barang(){

		$data['data'] = $this->db->get('tbl_barang');
		$data['content'] = 'admin/view_barang';
		$this->load->view('admin/v_home',$data);
	}	
/*funsi menampilkan data Galeri*/
	public function view_galeri(){

		$data['data'] = $this->db->get('tbl_galeri');
		$data['content'] = 'admin/view_galeri';
		$this->load->view('admin/v_home',$data);
	}	
/*fungsi menampilkan data jenis batik*/	

	public function view_batik(){

		$data['data'] = $this->db->get('tbl_batik');
		$data['content'] = 'admin/view_batik';
		$this->load->view('admin/v_home',$data);
	}	
/*fungsi menampilkan data member*/
	public function view_member(){

		$data['data'] = $this->db->get('tbl_member');
		$data['content'] = 'admin/view_member';
		$this->load->view('admin/v_home',$data);
	}

	/*fungsi menampilkan data member*/
	public function view_stok(){

		$data['data'] = $this->db->get('tbl_stok');
		$data['content'] = 'admin/view_stok';
		$this->load->view('admin/v_home',$data);
	}	
	/*fungsi tampil laporan */
	public function laporan_member(){

		//$data['data'] = $this->db->get('tbl_stok');
		$data['content'] = 'admin/form_laporan';
		$this->load->view('admin/v_home',$data);

	}	

	function proses_laporan(){
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$sql = "SELECT * FROM tbl_member where bulan='$bulan' and tahun='$tahun'";
		$data['data']=$this->db->query($sql);
		$this->load->view('admin/report_member',$data);
		

	}
	/*fungsi menampilkan data semua cart */
	public function view_allcart(){

		$data['data'] = $this->db->get('tbl_cart');
		$data['content'] = 'admin/view_allcart';
		$this->load->view('admin/v_home',$data);
	}

		/*fungsi menampilkan data semua order */
	public function view_allorder(){

		$data['data'] = $this->db->get('tbl_order');
		$data['content'] = 'admin/view_allorder';
		$this->load->view('admin/v_home',$data);
	}	

/*fungsi menampilkan table penjualan tblorder*/
	
	public function order(){
		$sql	 = "SELECT * FROM tbl_order ORDER BY kode_cart DESC";
		$data['data']= $this->db->query($sql);
		$data['content'] = 'admin/view_order';
		$this->load->view('admin/v_home',$data);
	}	
/*fungsi untuk mengkonfirmasi*/

	public function cek_konfirmasi($kode_cart){
		$data['kode_cart']		= $kode_cart;
		$data=array('konfirmasi' => '1' );
		$this->db->where('kode_cart', $kode_cart);	
		$this->db->update('tbl_order', $data);
		$this->db->update('tbl_konfirmasi', $data);
		redirect('ci_admin/order','refresh');
	}	
/* fungsi untuk detail yang di order pelanggan*/

	public function detail_order($kode_cart){
		$data['kode_cart']		= $kode_cart;
		$data['data']			= $this->db->get_where('tbl_cart',$data);
		$data['content']		 = 'admin/view_detailorder';
		$this->load->view('admin/v_home',$data);
	}		

/*fungsi menampilkan konfirmasi*/
	public function konfirmasi(){
		$data['data']			= $this->db->get('tbl_konfirmasi');
		$data['content']		 = 'admin/view_konfirmasi';
		$this->load->view('admin/v_home',$data);
	}	
/*fungsi menampilak kontak buku tamu*/
public function kontak(){
		$data['data']			= $this->db->get('tbl_kontak');
		$data['content']		 = 'admin/view_kontak';
		$this->load->view('admin/v_home',$data);	
}

public function blog(){
		$data['data']			= $this->db->get('tbl_blog');
		$data['content']		 = 'admin/view_blog';
		$this->load->view('admin/v_home',$data);
}
/*fungsi keluar*/
	public function logout(){
        $this->session->unset_userdata('user');
        redirect('ci_admin/','refresh');
    }


	}