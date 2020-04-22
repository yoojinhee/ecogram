<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>ecostagram : 로그인</title>
	<style>
		@import url("css/login.css");
	</style>
</head>
<body>
	<header><a href='javascript:void(0);' onClick="top.location='javascript:location.reload()'"><h1>로고</h1></a></header>
	<div class="container">
		<span class="content-left">
			<img src="images/test.png" alt="카메라이미지" width="300" height="700">
		</span>
		<span class="content-right">
			<div class="content-top">
				<h2>로그인</h2>
				<form action="login_process.php" method="post" autocomplete='off' >
	     			<label for="input_id">
	        			<div><input type="email" name='id' placeholder="email" id="input_id" autocomplete='off'></div>
	      			</label><br>
	      			<label for="input_password">
	        			<div><input type="password" name='password' placeholder="password" id="input_password" autocomplete='off'></div>
	            </label><br>
	      			<div><input type="submit" value="로그인" cols="30" style="font-size:2rem"></div>
	    		</form>
	    		<hr>
	    		<a href="find_password.php">비밀번호를 잊으셨나요?</a>
			</div>
			<div class="content-bottom">
				계정이 없으신가요?<a href="sign_up.php">가입하기</a>
			</div>
		</span>
	</div>
</body>
</html>