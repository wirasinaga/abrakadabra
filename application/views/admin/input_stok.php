 <form method="post" action="<?php echo base_url(); ?>index.php/ci_admin/add_stok" enctype="multipart/form-data">
                
                  
                  <div class="form-group">
                    <label class="col-sm-12">Kategori Produk</label>
                    <div class="col-sm-12">
                         <select name="kategori_produk" class="form-control">
          
</select>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label class="col-md-12">Nama Produk</label>
                    <div class="col-md-12">
                     <select name="kode_produk" class="form-control">
                     <?php $sql = "select * from tbl_barang "; $rs=$this->db->query($sql); foreach ($rs->result() as $row) { ?>
                       <option value="<?php echo $row->kode_barang; ?>"><?php echo $row->nama_barang; ?></option>
                      <?php 
                     } ?>
                     </select>
                    </div>
                  </div>



                  <div class="form-group">
                    <label class="col-md-12">Ukuran</label>
                    <div class="col-md-12">
                     <select name="id_ukuran" class="form-control">
                     <?php $sql = "select * from tb_ukuran "; $rs=$this->db->query($sql); foreach ($rs->result() as $row) { ?>
                       <option value="<?php echo $row->id_ukuran; ?>"><?php echo $row->ukuran; ?></option>
                      <?php 
                     } ?>
                     </select>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-md-12">Jumlah Stok</label>
                    <div class="col-md-12">
                      <input type="number" class="form-control"  name="stok" placeholder="Jumlah Stok" required>
                    </div>
                  </div>
                 <!--   <div class="form-group">
                    <label class="col-md-12">Jenis</label>
                    <div class="col-md-12">
                     <select name="jenis" class="form-control">
                    
                       <option value="satuan">satuan</option>
                       <option value="lusin">Lusin</option>
                       <option value="kodi">Kodi</option>
                      
                     </select>
                    </div>
                  </div> -->
                  <!--  <div class="form-group">
                    <label class="col-md-12">Member</label>
                    <div class="col-md-12">
                     <select name="member" class="form-control">
                    
                       <option value="1">Member</option>
                       <option value="0">Non Member</option>
                      
                     </select>
                    </div>
                  </div> -->
                   <div class="form-group">
                    <label class="col-md-12">Harga Member</label>
                    <div class="col-md-12">
                      <input type="number" class="form-control"  name="harga_member" placeholder="Harga Member" required>
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="col-md-12">Harga Non Member</label>
                    <div class="col-md-12">
                      <input type="number" class="form-control"  name="harga_nonmember" placeholder="Harga Non Member" required>
                    </div>
                  </div>

          <input type="submit" value="Upload" class="btn btn-success btn-rounded waves-effect waves-light">
        </div>
        </form>