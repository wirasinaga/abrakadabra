
<base href="<?php echo base_url() ?>" />
 <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="assets/ckeditor/contents.css">
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
<?php echo form_open_multipart('ci_admin/proces_TambahGaleri') ?>

<div class="col-md-12 clearfix">
<ul id="example-tabs" class="nav nav-tabs" data-toggle="tabs">
<li class=""><a href="#biodata"></a></li>

</ul>

<div class="tab-content">
<div class="tab-pane active" id="biodata">
    <table class="table table-bordered">
        <tr class="success"><th colspan="2">INPUT DATA GALERI</th></tr>
  
        <tr>
          <td>Nama barang</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='nama_foto' placeholder='Nama Foto' class='form-control'  value='' >
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

        <tr>
        <td>Keterangan</td>
          <td><textarea name="keterangan" id="news"></textarea>
            <script type="text/javascript">
              var editor = CKEDITOR.replace('news');  
            </script>
          </td>
      </tr>

    </table>
    
</div>
<input type="submit" name="submit" value="SIMPAN" class="btn btn-success">
<input type="reset"  value="RESET" class="btn btn-danger  btn-sm">
            <a href="#" class="btn btn-primary">KEMBALI</a></form>

           </form>