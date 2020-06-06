<?php 


if(isset($_GET['search'])){
    $sel=$_GET['kind'];
    $search=$_GET['search'];

	if(empty($sel)){
		echo
		'<script>
		alert("지역을 선택해주세요");
		location.href="feed.php";
		</script>';
	}else{
		$sql="select * from feed where title like '%$search%' && area='$sel' order by _id desc";
		$result=mysqli_query($conn,$sql);
	
		$result_count=mysqli_query($conn, "select count(*) from feed where title like '%$search%' && area='$sel' order by _id desc");

		if(!empty($result_count)){
			echo
			'<script>
			alert("검색 결과가 없습니다");
			location.href="feed.php";
			</script>';
		}else{
			
		}
	}

}else{
    $sql="select * from feed order by _id desc";
	$result=mysqli_query($conn,$sql);

    //$result_count=mysqli_query($conn, "select count(*) from feed");
}

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