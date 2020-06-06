<?php  
$url="post.php";
require_once("lib/header_top.php");
$sql="select * from feed where user_id=".$_SESSION['_id']." order by _id desc";
$result=mysqli_query($conn,$sql);
$list='';
while($row=mysqli_fetch_array($result)){
	$list=$list.
	'
	<span class="items">
		<img src="uploads/'.$row['file'].'" width="326" height="300" alt="테스트이미지">
	</span>
	';
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>ecostagram : 게시물</title>
	<style>
		@import url("css/post.css");
		@import url("css/header.css");
	</style>
</head>
<body>
	<?php 
		require_once("lib/header_bottom.php");
	?>
	<div class="wrapper">
		<div class="top">
			<div class="post">
				<a href="">게시물</a>
			</div>
			<div class="upload">
				<a href="">업로드</a>
			</div>
		</div>
		<div class="container">
			<?=$list?>
		</div>
	</div>
</body>
</html>