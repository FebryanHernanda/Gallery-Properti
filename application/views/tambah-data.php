<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	foreach ($css_files as $file) : ?>
		<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	<?php endforeach; ?>
</head>

<body>
	<div>



	</div>

	<div style='height:20px; text-align:center;margin-bottom : 20px;'>
		<h1>
			<a href='<?php echo site_url('CRUD/Properti') ?>'>Data Produk</a>
		</h1>

	</div>
	<div style="padding: 10px">
		<?php echo $output; ?>
	</div>
	<?php foreach ($js_files as $file) : ?>
		<script src="<?php echo $file; ?>"></script>
	<?php endforeach; ?>
</body>