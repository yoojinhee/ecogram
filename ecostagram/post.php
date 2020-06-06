<?php  
$url="post.php";
require_once("lib/header_top.php");
$sql="select * from feed where user_id=".$_SESSION['_id']." order by _id desc";
$result=mysqli_query($conn,$sql);

require_once("lib/show_post_top.php");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>ecostagram : 게시물</title>
	<style>
		@import url("css/post.css");
		@import url("css/show_post.css");
		@import url("css/header.css");
	</style>
    <script src="js/header.js"></script>
	<script src="js/feed.js"></script>
</head>
<body onload="clickpost(<?=$IsGETid?>)">
	<?php 
		require_once("lib/show_post_bottom.php");
		require_once("lib/header_bottom.php");
	?>
	<div class="wrapper">
		<div class="top">
			<div class="top-post">
				<a href="">게시물</a>
			</div>
			<div class="top-upload">
				<a href="">업로드</a>
			</div>
		</div>
		<div class="container">
			<?=$list?>
		</div>
	</div>
</body>
</html>