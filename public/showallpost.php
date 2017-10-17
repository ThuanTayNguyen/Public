<!DOCTYPE html>
<html>
<head>
	<title>Trang Chủ</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<?php require_once('public/header.php')?>
			<?php foreach ($post as $value): ?>
				<div class="post-size">
				<div class="image-post">
					<img src="<?php echo $value['url_thumbnail'];?>">
					</div>
					<div class="content-post">
					<a href=""><h2><?php echo $value['title']; ?></h2></a>
					<p><?php echo $value['content']; ?></p>
					<a href=""><p><?php echo $value['time']; ?></p></a>
					<a href=""><p><?php echo $value['tag']; ?></p></a>
					</div>
				</div>
			<?php endforeach ?>
			<?php
				require_once('public/footer.php');
			?>
</html>