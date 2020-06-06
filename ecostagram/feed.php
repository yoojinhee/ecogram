<?php  
$url="feed.php";
require_once("lib/header_top.php");
$sql="select * from feed order by _id desc";
$result=mysqli_query($conn,$sql);
$list='';

while($row=mysqli_fetch_array($result)){
	$list=$list.
	'
	<span class="items">
		<a href="feed.php?id='.$row['_id'].'" onclick="clickpost()"><img src="uploads/'.$row['file'].'" width="326" height="300" alt="테스트이미지"></a>
	</span>
	 ';
}
$IsGETid=0;
$name='';
$title='';
$content='';
$file='';

if(isset($_GET['id'])){
	$IsGETid=1;
	$sql="select * from feed left join account_info on feed.user_id=account_info._id where feed._id=".$_GET['id'];
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	$name=$row['name'];
	$title=$row['title'];
	$content=$row['content'];
	$file=$row['file'];
}
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
	<script src="js/feed.js"></script>
</head>
<body onload="clickpost(<?=$IsGETid?>)">
	<div class="over" id="over" style="display:none" onclick="clickover()"></div>
	<div class="post" id="post" style="display:none">
		<div class="img">
			<img src="uploads/<?=$file?>" alt="" width="500" height="500" alt="이미지">
		</div>
		<div class="description">
			<div class="post-name"><?=$name?></div>
			<div class="post-title"><?=$title?></div>
			<div class="post-content"><?=$content?></div>
		</div>
	</div>
	<?php 
		require_once("lib/header_bottom.php");
	?>
	<div class="wrapper">
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
			<?=$list?>
		</div>
	</div>

	
</body>
</html>