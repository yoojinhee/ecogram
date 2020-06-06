<?php 

$list='';

while($row=mysqli_fetch_array($result)){
	$list=$list.
	'
	<span class="items">
		<a href="'.$url.'?id='.$row['_id'].'" onclick="clickpost()"><img src="uploads/'.$row['file'].'" width="326" height="300" alt="테스트이미지"></a>
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