<center><h2>Selamat Datang Administrator</h2></center>
<br>
<br>
<br>
<table class="table table-bordered" >
	<thead>
		<tr>
			<th>Id</th>
			<th>Username</th>
			<th>Password</th>
			<th>Nama Lengkap</th>
		</tr>
	</thead>
	<tbody>
		<?php $ambil=$koneksi->query("SELECT * FROM admin");?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $pecah['id_admin']; ?></td>
			<td><?php echo $pecah['username']; ?></td>
			<td><?php echo $pecah['password']; ?></td>
			<td><?php echo $pecah['nama_lengkap']; ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>