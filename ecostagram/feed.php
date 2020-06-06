<?php  
$url="feed.php";
require_once("lib/header_top.php");
// $sql="select * from feed order by _id desc";
// $result=mysqli_query($conn,$sql);

require_once("lib/show_post_top.php");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>ecostagram : 피드</title>
	<style>
		@import url("css/feed.css");
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
			<form methos="get" name="frm1" action='feed.php'>
			<div class="select">
				<select name="kind" class="selectbox">
					<option value="">지역</option>
					<option value="서울">서울</option>
					<option value="부산">부산</option>
					<option value="인천">인천</option>

				</select>
			</div>
			<div class="search">
				<input type="text" name="search" class="searchtext" placeholder="검색">
				<input type="button" name=byn1 onclick="search1()" value="찾기">
			</div>
			</form>
			
		</div>
		<div class="container">
			<?=$list?>
		</div>
	</div>

</body>
</html>