<?php  
require_once('conn.php');

$log=array(
	'log'=>'로그인'
  );

$log_link="login.php";
$play_link="login.php";
$home_link="login.php";

$escaped_name='';
$filtered_user_id='';

if(isset($_POST['user_id'])){
	$filtered_user_id=mysqli_real_escape_string($conn,$_POST['user_id']);
	$log['log']="로그아웃";
	$log_link="#";
    $play_link="play.php";
    $home_link="home.php";

	$sql="select name from account_info where user_id='{$filtered_user_id}'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	print_r(mysqli_error($conn));
	$escaped_name=htmlspecialchars($row['name']);
	$escaped_name=$escaped_name."님";
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>ecostagram</title>
	<style>
		@import url("css/index.css");
		@import url("css/jquery.bxslider.min.css");

	</style>
  <script src="js/index.js"></script>
</head>
<body onload="javascript:showSlides();">
	<div class="container">
		<header>
			<span><a href="<?=$log_link?>" id="log" onclick="javascript:return logoutchk();"><?=$log['log']?></a></span>
			<span><a href='javascript:void(0);' onClick="top.location='javascript:location.reload()'" id="name"><?=$escaped_name?></a></span>
		</header>
		<nav>
			<span class="nav-span"><a href='javascript:void(0);' onClick="top.location='javascript:location.reload()'"><img src="images/test.png" alt="로고" height="50" width="50" id="logo"></a></span>
			<span>
				<a href="#">이벤트</a>
				<a href="#">피드</a>
				<a href="#">사진 업로드</a>
				<a href="#">게시물</a>
			</span>
		</nav>
		<main>
			<div class="content">
				<div id="text">#Save the Earth</div>
				<div class="slideshow-container">

					<div class="mySlides fade">
					  <!-- <div class="numbertext">1 / 3</div> -->
					  <img src="images/test.png" style="width:100%">
					  <!-- <div class="text">Caption One</div> -->
					</div>

					<div class="mySlides fade">
					  <!-- <div class="numbertext">2 / 3</div> -->
					  <img src="images/test.png" style="width:100%">
					  <!-- <div class="text">Caption Two</div> -->
					</div>

					<div class="mySlides fade">
					  <!-- <div class="numbertext">3 / 3</div> -->
					  <img src="images/test.png" style="width:100%">
					  <!-- <div class="text">Caption Three</div> -->
					</div>
					</div>
					<br>
					<div style="text-align:center">
					  <span class="dot"></span> 
					  <span class="dot"></span> 
					  <span class="dot"></span> 
					</div>
				<!-- <div><img src="images/test.png" alt="이미지1" width="800" height="533"></div>
				<span><a href="" id="prev">prev</a></span>
				<span><a href="" id="next">next</a></span> -->
			</div>
		</main>
	</div>
</body>
</html>