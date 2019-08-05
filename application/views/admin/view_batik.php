
  <base href="<?php echo base_url() ?>" />



<style type="text/css">
	
table, tr, th, td {
		border-collapse: collapse; /*untuk membuat garis table tipis*/
		border: 1px solid #98BF21;
		font-weight: bold;
		font-family: georgia;

	}
	th{
		background-color:#A7C942;
		border-bottom:3px solid #98BF21;
	}
	th, td{
		padding: 5px;
	}
	
	tr:nth-child(odd){
		background-color:#EAF2D3;
	}
	tr:nth-child(even){
		background-color:#D0DFA5; 
	}
	tr:hover{
		background-color:#ffffff;
		cursor: pointer; 
	}
	th.a{
		color: white;
		float: left;
		
	}
</style>

<div class="col-lg-12">
                    <!-- <h1 class="page-header">TABEL DATA GURU</h1> -->
                </div>
                <?php 
                		error_reporting(0);

                	if($info == 'sukses'){
                		?>

<div class="alert alert-success"><b>Sukses ! </b>tambah data  <?php echo $jenis_batik; ?> </div>
                		<?php
                	}else{
                		error_reporting(0);
                		echo '';
                	}
                 ?>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                      <tr>
                                    <th>Kode Jenis</th>
                                    <th>Jenis Batik</th>
                                    <th>Action</th>
                                      </tr>   
                                    </thead>
                                    <tbody>
                                             <?php foreach($data->result() as $row):?>                            
                                            <td><?php echo $row->kode_jenis ?></td>
			                                <td><?php echo $row->jenis_batik ?></td>
			                                 <td>
			                                <a href="index.php/ci_admin/edit_batik/<?php echo $row->kode_jenis ?>" title="">
			                                    <li class="fa fa-pencil-square-o">
			                                    EDIT
			                                    </li>
			                                </a> &nbsp; &nbsp; 
			                                <a href="index.php/ci_admin/hapus_batik/<?php echo $row->kode_jenis ?>" title="">
			                                     <li class="fa fa-trash-o" onclick="hapus (1)">
			                                    HAPUS
			                                    </li>
			                                </a> 
			                                </td>
                                    </tr>
<?php endforeach; ?>
                                                                            

                                                                                </tbody>
                                    </table>
                            </div>
                            <!-- /.table-responsive -->

 
