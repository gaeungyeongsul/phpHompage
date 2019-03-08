<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<title>글쓰기</title>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="../../css/style.css">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

<!-- include summernote css/js -->
<link href="../../summernote/summernote.css" rel="stylesheet">
<script src="../../summernote/summernote.js"></script>
<script src="../../js/write.js"></script>

</head>
<body>
	<?php include("../header.php"); ?>
	<div class="container">
		<div class="box">
			<div class="board">
        <div class="writeboard">
					<p>글쓰기</p>
          <form onsubmit="return writef();" action="write.php" method="post">
            <input type="text" name="title" class="board_title" placeholder="제목을 입력하세요.">
            <p></p>
            <!-- summernote와 관련된 영역 -->
            <textarea id="summernote" name="contents"></textarea>
            <!-- 버튼과 관련된 영역 -->
            <div align="center">
              <input type="submit" value="작성">
              <input type="button" id="btn" value="취소">
            </div>
          </form>
        </div>
			</div>
		</div>
	</div>
	<?php include("../footer.php"); ?>
</body>
</html>
