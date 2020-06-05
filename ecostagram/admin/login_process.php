<?php 
$id=$_POST["id"];
$password=$_POST["password"];

require_once('../conn.php');
$sql='select * from admin';
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($row['id']==$id&&$row['password']==$password){
	session_start();
	$_SESSION['admin_id']=$id;
    $_SESSION['admin_password']=$password;
    header("Location: admin.php");
}else{
	echo'
	<script>alert("로그인에 실패하셨습니다");history.back();</script>';
}
?>