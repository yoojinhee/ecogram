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
				<input type="text" name="search" class="searchtext" placeholder="검색">
			</div>
			<div class="select">
				<select name="" id="" class="selectbox">
					<option value="">지역</option>
					<option value="서울">서울</option>
					<option value="부산">부산</option>
					<option value="인천">인천</option>

				</select>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<span class="items">
					<img src="images/test.png" width="326" height="300" alt="테스트이미지">
				</span>
				<span class="items">
					<img src="images/test.png" width="326" height="300" alt="테스트이미지">
				</span>
				<span class="items">
					<img src="images/test.png" width="326" height="300" alt="테스트이미지">
				</span>
			</div>
			<div class="row">
				<span class="items">
					<img src="images/test.png" width="326" height="300" alt="테스트이미지">
				</span>
				<span class="items">
					<img src="images/test.png" width="326" height="300" alt="테스트이미지">
				</span>
				<span class="items">
					<img src="images/test.png" width="326" height="300" alt="테스트이미지">
				</span>
			</div>
		</div>
	</div>
</body>
</html>