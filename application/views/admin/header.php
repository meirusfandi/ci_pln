<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page_title.''.$web_name; ?></title>
</head>
<body>

	<ul>
		<li>
			<a href="<?php echo base_url('admin/dashboard'); ?>">Home</a>
		</li>
		<li>
			<a href="<?php echo base_url('admin/pelanggan'); ?>">Pelanggan</a>
		</li>
		<li>
			<a href="<?php echo base_url('admin/pembayaran'); ?>">Pembayaran</a>
		</li>
		<li>
			<a href="<?php echo base_url('admin/tagihan'); ?>">Tagihan</a>
		</li>
		<li>
			<a href="<?php echo base_url('admin/tarif'); ?>">Tarif</a>
		</li>
		<li>
			<a href="<?php echo base_url('admin/user'); ?>">User</a>
		</li>
	</ul>