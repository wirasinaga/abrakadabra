
<base href="<?php echo base_url() ?>" /><!-- 
 <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="assets/ckeditor/contents.css"> -->

<?php echo form_open('ci_admin/proces_EditBatik') ?>

<div class="col-md-12 clearfix">
<ul id="example-tabs" class="nav nav-tabs" data-toggle="tabs">
<li class=""><a href="#biodata"></a></li>

</ul>

<div class="tab-content">
<div class="tab-pane active" id="biodata">
    <table class="table table-bordered">
    <?php foreach ($data->result() as $row) : ?>
        <tr class="success"><th colspan="2">INPUT DATA BATIK</th></tr>
        <tr>
          <td width="150">Kode Batik</td>
          <td>
            <div class='col-sm-2'>
              <input type='text' name='kode_jenis' value="<?php echo $row->kode_jenis ?>" style="color:red" class='form-control' required='required' disabled="disable">
              <input type="hidden" name="kode_jenis" value="<?php echo $row->kode_jenis ?>">
            </div>             

        <tr>
          <td>Jenis Batik</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='jenis_batik' placeholder='Jenis Batik' class='form-control'  value='<?php echo $row->jenis_batik ?>' >
              </div>
            </td>
        </tr>
<?php endforeach; ?>
    </table>
    
</div>
<input type="submit" name="submit" value="UPDATE" class="btn btn-success">
<input type="reset"  value="RESET" class="btn btn-danger  btn-sm">
            <a href="#" class="btn btn-primary">KEMBALI</a></form>

           </form>