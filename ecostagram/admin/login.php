<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>관리자 : 로그인</title>
</head>
<body>
	<table style="margin:200px auto" border="1">
		<form action="login_process.php" method="post">
			<tr>
				<th>아이디</th>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<th>비밀번호</th>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan ="2"><input type="submit" value="로그인"></td>
			</tr>
		</form>
	</table>
</body>
</html>