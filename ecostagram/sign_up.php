<?php  
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>ecostagram : 회원가입</title>
	<style>
		@import url("css/sign_up.css");
	</style>
	<script src="js/sign_up.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="logo">
			<a href="">로고</a>
		</div>
		<div class="container">
			<div class="top">
				<div class="top-title">
					sign up
				</div>
				<form method="POST" action="sign_up_process.php">
					<div class="namediv">
						<input type="text" name="name" class="name" placeholder="name" required>
					</div>
					<div class="iddiv">
						<input type="text" name="id" class="id" placeholder="id" required>
					</div>
					<div class="passworddiv">
						<input type="password" name="password" class="password" placeholder="password" required>
					</div>
					<div class="teldiv">
						<input type="text" name="tel" class="tel" placeholder="tel" required>
					</div>
					<div class="signUpButtondiv">
						<input type="submit" value="sign up" class="signUpButton">
					</div>
				</form>
			</div>
			<div class="bottom">
				<div class="left">계정이 있으신가요?</div>
				<div class="right"><a href="login.php">로그인하기</a></div>
			</div>
		</div>
	</div>
</body>
</html>