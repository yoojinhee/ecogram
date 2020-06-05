<?php 
	session_start();
	if(!isset($_SESSION['admin_id'])){
		echo
		'<script>
	    alert("로그인 해주세요");
	    location.href="login.php";
	    </script>';
	}
?>