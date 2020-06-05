<?php  
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>ecostagram : 피드</title>
	<style>
		@import url("css/feed.css");
		@import url("css/header.css");
	</style>
</head>
<body>
	<?php 
		require_once("lib/header_bottom.php");
	?>
	<div class="wrraper">
		<div class="top">
			<div class="search">
				<input type="text" name="search">
			</div>
			<div class="select">
				<select name="" id=""></select>
			</div>
		</div>
		<div class="container">
			<div class="items">
				<img src="images/test.png" alt="테스트이미지">
			</div>
			<div class="items">
				<img src="images/test.png" alt="테스트이미지">
			</div>
			<div class="items">
				<img src="images/test.png" alt="테스트이미지">
			</div>
			<div class="items">
				<img src="images/test.png" alt="테스트이미지">
			</div>
		</div>
	</div>
</body>
</html>