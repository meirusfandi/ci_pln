<?php $this->load->view('admin/header'); ?>

	<h1><?php echo $index; ?></h1>

	<?php echo anchor('admin/pelanggan/add', 'Tambah Pelanggan'); ?>

	<table border="1">
		<thead>
			<td>No.</td>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Kode Tarif</td>
			<td>Aksi</td>
		</thead>

		<tbody>
			<?php $no = 0; 
				foreach ($pelanggan as $key) :
			?>
			<tr>
				<th><?php echo ++$no; ?></th>
				<th><?php echo $key->nama; ?></th>
				<th><?php echo $key->alamat; ?></th>
				<th><?php echo $key->kodeTarif; ?></th>
				<th>
					<?php echo anchor('admin/pelanggan/edit/'.$key->ID, 'Edit'); ?> | 
					<?php echo anchor('admin/pelanggan/delete/'.$key->ID, 'Delete'); ?>
				</th>
			</tr>
			<?php endforeach; ?>
			
		</tbody>
	</table>

</body>
</html>