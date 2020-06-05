<?php
 require_once('conn.php');
 session_start();
 $bool=true;

echo "confirm file information <br />";
 $uploadfile = "uploads/".$_FILES['upload']['name'];
 if(move_uploaded_file($_FILES['upload']['tmp_name'],$uploadfile)){
//   echo "파일이 업로드 되었습니다.<br />";
//   echo "<img src = uploads/{$_FILES['upload']['name']}> <p>";
//   echo "1. file name : {$_FILES['upload']['name']}<br />";
//   echo "2. file type : {$_FILES['upload']['type']}<br />";
//   echo "3. file size : {$_FILES['upload']['size']} byte <br />";
//   echo "4. temporary file size : {$_FILES['upload']['size']}<br />";
//   echo "5. tmp name : {$_FILES['upload']['tmp_name']}<br />";
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
echo $sql_insert;

$result_sign=mysqli_query($conn,$sql_insert);
	  echo '<script>
  			alert("이벤트 응모를 완료했습니다");
  			location.href="index.php";
  			</script>';

}
?>