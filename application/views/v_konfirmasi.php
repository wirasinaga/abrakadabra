<base href="<?php echo base_url(); ?>" />     
        <link rel="stylesheet" href="assets/plugins/DataTables/media/css/DT_bootstrap.css">
        <link rel="stylesheet" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
        <link rel="stylesheet" href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
        <link rel="stylesheet" href="assets/plugins/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="assets/plugins/nvd3/nv.d3.min.css">
    
        <script src="assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
    
        <script src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
        <script src="assets/plugins/jquery-mockjax/jquery.mockjax.js"></script>
        <script src="assets/plugins/toastr/toastr.js"></script>
        <script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
        <script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
        <script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
        <script src="assets/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
        <script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
        <script src="assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>
        <script src="assets/plugins/truncate/jquery.truncate.js"></script>
        <script src="assets/plugins/summernote/dist/summernote.min.js"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
     
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Kategori Batik</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/kategori/batik_pria">Batik Pria</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/kategori/batik_wanita">Batik Wanita</a></h4>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/kategori/katun_prisma">Katun Prisma</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/kategori/motif_jambi">Motif Jambi</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/kategori/setelan_wanita">Setelan Wanita</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>MEREK</h2>
							<div class="brands-name">
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#"> <span class="pull-right"></span></a></li>
							<li><a href="#"> <span class="pull-right"></span></a></li>
							<li><a href="#"> <span class="pull-right"></span></a></li>
							<li><a href="#"> <span class="pull-right"></span></a></li>
							<li><a href="#"> <span class="pull-right"></span></a></li>
							<li><a href="#"> <span class="pull-right"></span></a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>KISARAN HARGA</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">Rp 0</b> <b class="pull-right">Rp 1.000.000</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="assets/images/home/pas.png" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
<style type="text/css">
    .single:hover{
        background: #FE980F;

    }
    .b:hover{
        background: black
    }
    .harga:hover{
        color: white
    }

    .nama:hover{
        color: white
    }
</style>

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						
						<div class="tab-content">
<div class="tab-pane active" id="biodata">
 <form method="post" name="form1" action="index.php/member/insert_konfirmasi"  enctype="multipart/form-data"  onSubmit="return validasi(this)"/>
    <table class="table table-bordered">
        <tr class="success"><th colspan="2">KONFIRMASI PEMBAYARAN KODE CART : <b> <?php echo $kode_cart ?> </b></th></tr>
        <tr>
          <td width="150">Kode Barang</td>
          <td>
            <div class='col-sm-2'>
              <input type='text' name='kode_cart' value="<?php echo $kode_cart ?>" style="color:red" class='form-control' required='required' disabled="disable">
              <input type="hidden" name="kode_cart" value="<?php echo $kode_cart ?>">
            </div>             

        <tr>
          <td>Nama Anda</td>
          <td>

              <div class="col-md-4">
              <input type='text' name='nama_member' disabled="disabled" class='form-control'  value='<?php echo $nama_member; ?>' >
              <?php	
										$sql = "SELECT * FROM tbl_member where nama_member='$nama_member'";
										$rs  = $this->db->query($sql);
										foreach ($rs->result() as $key) {
											
										}

								?>
								<input type="hidden" name="id_member" value="<?php echo $key->id_member ?>">
              </div>
            </td>
        </tr>

        <tr>
          <td>No Rekening</td>
          <td>
              <div class="col-md-5">
              <input type='text' name='no_rekening' placeholder='' class='form-control'  value='' >
              </div>
            </td>
        </tr>

         <tr>
          <td>Gambar</td>
          <td>
              <div class="fileupload fileupload-new" data-provides="fileupload">
        <div class="fileupload-new thumbnail"><img src="assets/images/bg.jpg" width="300" alt=""/>
        </div>
        <div class="fileupload-preview fileupload-exists thumbnail"></div>
        <div>
        <div class="col-sm-4 control-label">
            <span class="btn btn-light-grey btn-file"><span class="fileupload-new">
            <i class="fa fa-picture-o "></i> Select image</span><span class="fileupload-exists">
            <i class="fa fa-picture-o"></i> Change</span>
                <input type="file"name='userfile'" id="file" value="<img src="assets/verlybook/verpus.png">
        
            <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                <i class="fa fa-times"></i> Remove
            </a>
  </span>
            </td>
        </tr>

        <tr>
        <td>Alamat</td>
          <td><textarea name="keterangan" id="news"></textarea>
            <script type="text/javascript">
              var editor = CKEDITOR.replace('news');  
            </script>
          </td>
      </tr>

    </table>
    
</div>
<input type="submit" name="submit" value="KIRIM" class="btn btn-success">


           </form>
              </div>

                        </div>
                        </div>


					
						
			</div>
		</div>
	</section>
	