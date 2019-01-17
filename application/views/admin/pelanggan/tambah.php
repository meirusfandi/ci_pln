<?php $this->load->view('admin/header'); ?>

	<h1><?php echo $index; ?></h1>

	<form action="<?php echo base_url('admin/pelanggan/tambah_aksi'); ?>" method="post">
		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="name" placeholder="Input nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" placeholder="Input Alamat"></td>
			</tr>
			<tr>
				<td>Kode Tarif</td>
				<td><input type="text" name="kode" placeholder="Input Kode Tarif"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="save" value="Tambah"></td>
			</tr>
		</table>

	</form>

</body>
</html>