<?php 
require_once('conn.php');
$sql='select * from account_info';
$result=mysqli_query($conn,$sql);

$filtered=array(
'name'=>mysqli_real_escape_string($conn,$_POST['name']),
'id'=>mysqli_real_escape_string($conn,$_POST['id']),
'password'=>mysqli_real_escape_string($conn,$_POST['password']),
'tel'=>mysqli_real_escape_string($conn,$_POST['tel']),
);

$bool=true;

while($row=mysqli_fetch_array($result)){
	if($filtered['id']==$row['id']&&$filtered['tel']==$row['tel']){
    echo 
    '<script>
    alert("이미 가입한 계정입니다");
    location.href="sign_up.php";
    </script>';
    $bool=false;
    break;
  }	
  if($filtered['id']==$row['id']){
    echo 
    '<script>
    alert("해당 이메일이 이미 존재합니다");
    history.back();
    </script>';
    $bool=false;
    break;
  }
}
if($bool){
	$sql_sign="insert account_info(id,password,tel,name) values('{$filtered['id']}','{$filtered['password']}','{$filtered['tel']}','{$filtered['name']}')";
 	//$check=mysqli_error($conn);
 	$result_sign=mysqli_query($conn,$sql_sign);
	  echo '<script>
  			alert("회원가입을 완료하였습니다");
  			location.href="index.php";
  			</script>';
}
?>