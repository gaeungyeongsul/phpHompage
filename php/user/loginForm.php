<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<title>로그인</title>
<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" href="../../css/join.css">
<script type="text/javascript" src="../../js/login.js"></script>
</head>
<body>
	<?php include("../header.php"); ?>
	<div class="container">
		<div class="box">
			<div class="board">
				<div class="loginForm">
					<p>로그인</p>
						<table class="login_table">
							<tr>
								<td>아이디</td>
								<td><input type="text" name="user_id" id="user_id"></td>
							</tr>
							<tr>
								<td>비밀번호</td>
								<td><input type="password" name="user_password" id="user_password"></td>
							</tr>
						</table>
					<div class="btn">
						<input type="button" value="로그인" id="login_btn">
						<h5>아직 회원이 아니시라면 <a href="joinForm.php">회원가입</a></h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include("../footer.php"); ?>
</body>
</html>
