
<style>
div {
    border-radius: 0px;
    background-color: #f2f2f2;
    padding: 0px;
}
</style>


<h2>Tambah Pelanggan</h2>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>
			Email Pelanggan
		</label>
		<input type="text" class="form-control" name="email">
	</div>
	<div class="form-group">
		<label>Password Pelanggan</label>
		<input type="text" class="form-control" name="password">
	</div>
	<div class="form-group">
		<label>Nama Pelanggan</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Telepon Pelanggan</label>
		<input type="text" class="form-control" name="telepon"> <br>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php 
	if (isset($_POST['save'])) {
		
		$koneksi->query("INSERT INTO pelanggan(email_pelanggan,password_pelanggan,nama_pelanggan,telepon_pelanggan)VALUES('$_POST[email]','$_POST[password]','$_POST[nama]','$_POST[telepon]')");

		echo "<div class='alert alert-info'>Data Tersimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=pelanggan'>";
	}

?>
