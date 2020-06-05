<?php  
?>
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
	<div class="wrraper">
		<div class="logo">
			<a href="">로고</a>
		</div>
		<div class="container">
			<div class="container-left">
				<div class="left-title">
					today's feed
				</div>
				<div class="image">
					<img src="images/test.png" alt="">
				</div>
				<div class="tag-title">
					#save the earth
				</div>
			</div>
			<div class="container-right">
				<div class="top">
					<div class="login-title">
						login
					</div>
					<form action="login_process.php" method="post">
						<div class="iddiv">
							<input type="text" name="id" class="id">
						</div>
						<div class="passworddiv">
							<input type="text" name="password" class="password">
						</div>
						<div class="loginButtondiv">
							<input type="submit" value="login" class="login">
						</div>
					</form>
					<div class="bottom">
						<a href="">비밀번호를 잊으셨나요?</a>
					</div>
				</div>
				<div class="container-bottom">
					<div class="left">계정이 없으신가요?</div>	
					<div class="right"><a href="sign_up.php">가입하기</a></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>