<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>.:ABRAKADABRABATIK :.</title>
    <base href="<?php echo base_url() ?>" />
    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/price-range.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>  085263292182</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> abrakdabra@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<h3 style="font-family: courier;font-weight: bold;">
									Abrakdabra Batik
								</h3>
						<div class="btn-group pull-right">
							
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="index.php/member/account"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="index.php/member/biling"><i class="fa fa-star"></i> Konfirmasi</a></li>
								<li><a href="index.php/site/v_chart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php 
									if($this->session->userdata('user')){
										?>
							<li><a href="#"><i class="fa fa-user "></i>

								<?php echo $nama_member; ?>
								</a></li>
								<li><a href="index.php/site/logout"><i class="fa fa-lock "></i>
								Logout
								</a></li>
										<?php 
											}else{
												?>
								<li><a href="index.php/member/login"><i class="fa fa-lock"></i>
								<?php echo $nama_member; ?>
								</a></li>
												<?php
											}

										 ?>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<style type="text/css">
						.nn {
							border-radius: 10px 10px 0px 0px;
							width: 1200px;
							height: 50px;
							background-color: green;
						}
						</style>
						<div class="mainmenu pull-left">
							<div class="nn">
							<ul class="nav navbar-nav collapse navbar-collapse">
							
								<li><a href="index.php" > <b class="x" style= "font-family: courier;"><h3>&nbsp;&nbsp;&nbsp;&nbsp;Home</b></h3> </a></li>
								
								<li><a href="index.php/site/product" ><b class="x"  style="font-family: courier;"><h3>&nbsp;Produk Kami</b></h3> </a></li>
								<li><a href="index.php/site/cara" ><b class="x"  style="font-family: courier;"><h3>&nbsp;Cara Belanja</b></h3> </a></li>
								
								<li><a href="index.php/site/tentang" ><b class="x"  style="font-family: courier;"><h3>&nbsp;Tentang</b></h3> </a></li>
								<li><a href="index.php/kategori/galeri" ><b class="x"  style="font-family: courier;"><h3>&nbsp;Galeri Toko</b></h3> </a></li>
								<li><a href="index.php/blog"><b class="x"  style="font-family: courier;"><h3>&nbsp;Artikel</b></h3> </a></li>
								<li><a href="index.php/kategori/kontak"><b class="x"  style="font-family: courier;"><h3>&nbsp;Kontak</b></h3> </a></li>
						</div>
							
							</ul>
						</div>
					</div>
						<style type="text/css" > 
						.x{
							color: orange;
						}
						.x:hover{
							color: white;
							font-size: 25px;

						}

						</style>
					</div>
					
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
		
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
									<h4 class="panel-title"><a href="index.php/kategori/katun_prisma">Batik Anak-Anak</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/kategori/motif_jambi"></a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/kategori/setelan_wanita"></a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>MEREK</h2>
							<div class="brands-name">
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#"> <span class="pull-right"></span>Terbaru</a></li>
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
						<h2 class="title text-center">Features Items</h2>
                             <table>
                                <tr>
                                     <?php $i=3; foreach ($photo->result() as $row) { ?>
                                     <td>           
                                        <div class="product-image-wrapper">
                                            <div class="single">
                                                <div class="productinfo text-center">            
                                      <?php   
                                         $image = array(
                                              'src' => 'application/views/photo/'.($row->photo_url),
                                              'class' => 'photo',
                                              'width' => '250',
                                              'height' => '350',
                                              'rel' => 'lightbox',
                                            ); echo img($image); ?>
                                    <h2 class="harga">Rp. <?php echo number_format($row->harga ,2) ?></h2>
                                    <p class="nama"><?php echo $row->nama_barang ?></p>
                                    
				<?php echo form_open('site/cart'); ?>
									
<!-- mengambil id member -->
<?php 
			error_reporting(0);

	$sql = "SELECT * FROM tbl_member where nama_member='$nama_member'";
	$rs  = $this->db->query($sql);
	foreach ($rs->result() as $v ){
		
	}
			error_reporting(0);

 ?>
<!--  -->
									<?php echo form_open('site/cart'); ?>

				<input type="hidden" name="kode_barang" value="<?php echo $row->kode_barang; ?>">
				<input type="hidden" name="id_member" value="<?php echo $v->id_member; ?>">
				<input type="hidden" name="harga" value="<?php echo $row->harga; ?>">
				<input type="hidden" name="nama_barang" value="<?php echo $row->nama_barang; ?>">
				<input type="hidden" name="photo_url" value="<?php echo $row->photo_url; ?>">
<input type="hidden" name="jumlah_barang" value="1" />
			<button type="submit" name="chart" class="btn btn-fefault cart">

				<i class="fa fa-shopping-cart"></i>
				Add to cart
			</button>

			<style type="text/css">
			button:hover{
				background: white;
			}
			a:hover{
				background: white;
			}

			</style>
                                     <a href="index.php/site/detail/<?php echo $row->kode_barang ?>" class="btn btn-fefault cart"><i class="glyphicon glyphicon-play" ></i>Detail</a>


                                    <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                                    </td>

                                     <?php if($i % 3 == 2){ echo '<tr></tr>'; } $i++; } ?>
                                    </tr>
                                </table>
                                <ul class="pagination">
                                <li class="active"></li>
							<li class=""><a href=""><?php echo $this->pagination->create_links(); ?></a></li>
						</ul>

                        </div>
                        </div>


					
						
			</div>
		</div>
	</section>
	
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Abrakdabra Batik</span></h2>
							<p>  Abrakadabra Batik bisa dikenal masyarakat luas, luar daerah, Pulau Sumatra, dan mancanegara</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="assets/images/img1.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Tas Batik</p>
								<h2></h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="assets/images/img2.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Tas Batik</p>
								<h2></h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="assets/images/img3.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Tas Batik</p>
								<h2></h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="assets/images/img4.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Tas Batik</p>
								<h2></h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="assets/images/home/map.png" alt="" />
							<p>Jl. Sumantri Brojonegoro No. 83, Simpang Pulai, Kota Jambi. Jambi Telp (0741) 668622</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Layanan</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Bantuan online</a></li>
								<li><a href="#">Hubungi Kami</a></li>
								<li><a href="#">Status pemesanan</a></li>
								<li><a href="#">Ganti lokasi</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>KEBIJAKAN</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Syarat Penggunaan</a></li>
								<li><a href="#">Kebijakan pribadi</a></li>
								<li><a href="#">Kebijakan pengembalian</a></li>
								<li><a href="#">Sistem pembayaran</a></li>
								<li><a href="#">Sistem Pengantaran</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Tentang Kami</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Informasi Toko</a></li>
								<li><a href="#">Penghargaan</a></li>
								<li><a href="#">Lokasi Toko</a></li>
								<li><a href="#">Hakcipta</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Tentang Toko</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Alamat Email" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Dapatkan update terbaru dari <br/>
								situs kami dan diperbarui sendiri ...
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Hakcipta © 2019 Abrakadabra Batik </p>
					<p class="pull-right"> <?php echo $this->config->item('') ?> </p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.scrollUp.min.js"></script>
	<script src="assets/js/price-range.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>