<?php
session_start();
$koneksi = new mysqli("localhost","root","","nerotoko");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Keranjang Belanja</title>
	<link rel="stylesheet"  href="admin/assets/css/bootstrap.css">
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="keranjang.php">keranjang</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="checkout.php">Check-Out</a></li>
				
			</ul>
		</div>
	</nav>

	<section class="konten">
		<div class="container">
			<h1>Keranjang Belanja</h1>
			<hr>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>NO</th>
						<th>Nama Produk</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Sub Harga</th>
					</tr>
				</thead>
				<tbody>
					<?php $nomor=1; ?>
					<?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
					<?php $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
					$pecah = $ambil->fetch_assoc();
					$subharga = $pecah["harga_produk"]*$jumlah;
					?>
					<tr>
						<td><?php echo $nomor;?></td>
						<td><?php echo $pecah["nama_produk"];?></td>
						<td>Rp. <?php echo number_format($pecah["harga_produk"]);?></td>
						<td><?php echo $jumlah; ?></td>
						<td>Rp. <?php echo number_format($subharga);?></td>
					</tr>
					<?php $nomor++; ?>
					<?php endforeach?>
				</tbody>
			</table>
			<a href="index.php" class="btn btn-default">Lanjutkan Belanja</a>
			<a href="checkout.php" class="btn btn-primary">Check-Out</a>
		</div>
	</section>


</body>
</html>