<?php  

?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>ecostagram : 업로드</title>
	<style>
		@import url("css/upload.css");
		@import url("css/header.css");
	</style>
</head>
<body>
	<?php 
		require_once("lib/header_bottom.php");
	?>
	<div class="wrraper">
		<div class="container">
			<div class="top">
				<div class="title">
					사진 및 게시물 추가
				</div>
				<div class="explain">
					쓰레기를 주운 사진을 본인의 피드에 게시해보세요
				</div>
			</div>
			<form action="upload_process.php" method="post" enctype="multipart/form-data">
				<div class="main">
					<div class="filediv">
						<div id="preview"></div>
						<input type="file" name="upload" id="upload">
						<div class="onclick" onclick="onclick=document.all.upload.click()">사진추가</div>
					</div>
					<div class="titlediv">
						<input type="text" name="title" class="title" placeholder="제목">
					</div>
					<div class="descriptiondiv">
						<textarea name="description" class="description" id="" cols="30" rows="10" placeholder="설명"></textarea>
					</div>
					<div class="bottomdiv">
						<div class="areadiv">
							<select name="area" id="" class="selectarea">
								<option value="">지역</option>
								<option value="서울">서울</option>
								<option value="인천">인천</option>
								<option value="부산">부산</option>
							</select>
						</div>
						<div class="tagdiv">
							<input type="text" name="tag" class="tag">
						</div>
					</div>
				</div>
				<div class="bottom">
					<div class="buttondiv">
						<input type="submit" value="게시"class="button">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
<script type="text/javascript" src="js/upload.js"></script>
</html>