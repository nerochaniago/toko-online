
<style>
div {
    border-radius: 0px;
    background-color: #f2f2f2;
    padding: 0px;
}
</style>

<h2>Ubah Pelanggan</h2>
<?php 
	$ambil=$koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan ='$_GET[id]'");
	$pecah= $ambil->fetch_assoc();
	
?>
 
 <form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Email Pelanggan</label>
		<input type="text" name="email" class="form-control" value="<?php echo $pecah['email_pelanggan']; ?>">
	</div>
	<div class="form-group">
		<label>Password Pelanggan</label>
		<input type="text" name="password" class="form-control" value="<?php echo $pecah['password_pelanggan']; ?>">
	</div>
	<div class="form-group">
		<label>Nama Pelanggan</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_pelanggan']; ?>">
	</div>
	
	<div class="form-group">
		<label>Telepon Pelanggan</label>
		<input type="text" name="telepon" class="form-control" value="<?php echo $pecah['telepon_pelanggan']; ?>">
	</div>
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php 
	if (isset($_POST['ubah'])) {
			$koneksi->query("UPDATE pelanggan SET email_pelanggan='$_POST[email]',password_pelanggan='$_POST[password]',nama_pelanggan='$_POST[nama]',telepon_pelanggan='$_POST[telepon]'WHERE id_pelanggan='$_GET[id]'");


			echo "<script>alert('data pelanggan telah diubah');</script>";
			echo "<script>location='index.php?halaman=pelanggan';</script>";
		} 

?>

