<?php  
$url="index.php";
require_once("lib/header_top.php");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>ecostagram</title>
	<style>
		@import url("css/index.css");
		@import url("css/header.css");
	</style>
    <script src="js/header.js"></script>
</head>
<body>
	<?php 
		require_once("lib/header_bottom.php");
	?>
	<div class="wrapper">
		<div class="wrap-nav">
			<div class="wrap-logo">
				<a href="">로고</a>
			</div>
			<div class="menu">
				<ul>
					<li><a href="event.php" onclick="<?=$logchk?>">이벤트</a></li>
					<li><a href="feed.php">피드</a></li>
					<li><a href="upload.php" onclick="<?=$logchk?>">업로드</a></li>
					<li><a href="post.php" onclick="<?=$logchk?>">게시물</a></li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="main">
				<div class="title">인기게시물</div>
				<div class="list">
					<ul>
						<li>1 <a href="">타이틀</a></li>
						<li>2 <a href="">타이틀</a></li>
						<li>3 <a href="">타이틀</a></li>
						<li>4 <a href="">타이틀</a></li>
						<li>5 <a href="">타이틀</a></li>
					</ul>
				</div>
			</div>
		</div>
		<footer>
			<div class="email"><a href="">이메일 문의</a></div>
		</footer>
	</div>
</body>
</html>