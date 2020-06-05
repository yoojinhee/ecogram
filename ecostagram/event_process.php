<?php
require_once('conn.php');
session_start();

$sql="select _id from account_info WHERE id='{$_SESSION['id']}'";
$result=mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)){
    $user_id = $row['_id'];
}

$first = $_POST['first'];
$second = $_POST['second'];

$sql_insert="insert into event(first, second, user_id) values('$first','$second','$user_id')";

 	$result_sign=mysqli_query($conn,$sql_insert);
	  echo '<script>
  			alert("이벤트 응모를 완료했습니다");
  			location.href="index.php";
  			</script>';


?>