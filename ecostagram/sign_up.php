<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>ecostagram : 회원가입</title>
	<style>
		@import url("css/sign_up.css");
	</style>
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/sign.js"></script> 
	<header><a href='javascript:void(0);' onClick="top.location='javascript:location.reload()'"><h1>로고</h1></a></header>
	<div class="container">
		<div class="content-top">
			<h2>로그인</h2>
			<form action="sign_process.php" method="post" autocomplete='off'>
				<label for="input_name" onSubmit="return checkPw();">
        			<div><input type="text" name='name' placeholder="name" id="input_name" autocomplete='off' required></div>
      			</label><br>
     			<label for="input_id">
        			<div><input type="email" name='id' placeholder="email" id="input_id"></div>
      			</label><br>
      			<label for="input_password">
        			<div><input type="password" name='password' placeholder="password" id="input_password"oninput="checkPw()"></div>
            	</label><br>
            	<label for="check_password">
        			<div><input type="password" name='check_password' placeholder="re-enter password" id="check_password" oninput="checkPw()"></div>
        			<div id="passwordCheckText"></div>
            	</label><br>
            	<label for="input_tel">
        			<div><input type="tel" name='tel' placeholder="ex)010-0000-0000" id="input_tel" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" onKeyup="inputPhoneNumber(this);" maxlength="13"required></div>
            	</label><br>
      			<div><input type="submit" value="회원가입" cols="30" style="font-size:2rem"></div>
    		</form>
		</div>
		<div class="content-bottom">
			계정이 있으신가요?<a href="login.php">로그인하기</a>
		</div>
	</div>
</body>
</html>