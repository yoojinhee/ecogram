<?php  
require_once("conn.php");
session_start();

$log="로그인";
$name="";
$logchk='return loginchk();';
$log_href="login.php";
$logo='';
if(isset($_SESSION['_id'])){
	$sql="select * from account_info where _id=".$_SESSION['_id'];
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	$name=$row['name'];
	$log="로그아웃";
	$logchk='return logoutchk();';
	$log_href="index.php";
}
if(isset($url)){
	if($url!="index.php"){
		$logo=
		'
		<div class="logo">
			<a href="index.php">로고</a>
		</div>
		';
	}
}
?>