<?php include 'server-info.php'; ?>

<html>
<head>
	<title>System Info</title>

</head>
<body>
	<div class="container">
		<h1>Server & File Info</h1>
		<?php if($server): ?>
			<ul>
				<?php foreach ($server as $key => $value): ?>
					<li>
						<strong><?php echo $key; ?></strong>
						<?php echo $value; ?>
					</li>
				<?php endforeach ?>
			</ul>
		<?php endif; ?>
		<h1>Client Info</h1>
		<?php if($client): ?>
			<ul>
				<?php foreach ($client as $key => $value): ?>
					<li>
						<strong><?php echo $key; ?></strong>
						<?php echo $value; ?>
					</li>
				<?php endforeach ?>
			</ul>
		<?php endif; ?>
	</div>
</body>
</html>