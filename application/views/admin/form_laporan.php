<h1>
<center>
	Cari laporan member
</center>
</h1>
<?php echo form_open('ci_admin/proses_laporan') ?>

<label>Bulan : </label>
<select name="bulan">
	<option value="01">Januari</option>
	<option value="02">Febuari</option>
	<option value="03">Maret</option>
	<option value="04">April</option>
	<option value="05">Mei</option>
	<option value="06">Juni</option>
	<option value="07">Juli</option>
	<option value="08">Agustus</option>
	<option value="09">September</option>
	<option value="10">Oktober</option>
	<option value="11">November</option>
	<option value="12">Desember</option>
</select>
<label>Tahun : </label>
<select name="tahun">
	<option value="15">2015</option>
	<option value="16">2016</option>
	<option value="17">2017</option>
	<option value="18">2018</option>

</select>

<button type="submit" name="cari">PILIH</button>

<?php echo form_close() ?>