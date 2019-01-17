<?php $this->load->view('admin/header'); ?>

<h1><?php echo $index; ?></h1>


	<?php foreach($pelanggan as $u){ ?>
	<form action="<?php echo base_url('admin/pelanggan/edit_aksi'); ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->ID; ?>">
					<input type="text" name="nama" value="<?php echo $u->nama; ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $u->alamat; ?>"></td>
			</tr>
			<tr>
				<td>Kode Tarif</td>
				<td><input type="text" name="kode" value="<?php echo $u->kodeTarif; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>

	</body>
</html>