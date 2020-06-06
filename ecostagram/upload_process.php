<?php
 require_once('conn.php');
 session_start();
 $bool=true;
//업로드할 파일명 바꾸기
echo "confirm file information <br />";
 $uploadfile = "uploads/".$_FILES['upload']['name'];
 if(move_uploaded_file($_FILES['upload']['tmp_name'],$uploadfile)){
 } else {
  echo '<script>
    alert("파일 업로드 실패. 다시 시도해주세요");
    location.href="upload.php";
    </script>';
    $bool=false;
 }


 $sql="select _id from account_info WHERE id='{$_SESSION['id']}'";
 $result=mysqli_query($conn, $sql);
 
 while($row = mysqli_fetch_array($result)){
     $user_id = $row['_id'];
 }
 
 $title = $_POST['title'];
 $description = $_POST['description'];
 $area = $_POST['area'];
 $tag = $_POST['tag'];

 
if($bool){
$sql_insert="insert into feed(user_id, file, title, content, area, tag) values('$user_id', '{$_FILES['upload']['name']}', '$title', '$description','$area', '$tag')";
//echo $sql_insert;

$result_sign=mysqli_query($conn,$sql_insert);
	  echo '<script>
  			alert("성공적으로 게시하였습니다");
  			location.href="index.php";
  			</script>';

 }
?>