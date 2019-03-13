<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<title>글 수정</title>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="../../css/style.css">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

<!-- include summernote css/js -->
<link href="../../summernote/summernote.css" rel="stylesheet">
<script src="../../summernote/summernote.js"></script>
<style>
.board_title{
  width: 100%;
  height: 40px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-family: "nanumsquareR";
}
</style>

<script src="../../js/write.js"></script>

</head>
<body>
	<?php include("../header.php"); ?>
  <?php
    include("../db/db.php");
    $conn = dbconn();
    include("selectOneBoard.php");
    $board = readBoard($conn);
  ?>
	<div class="container">
		<div class="box">
			<div class="board">
        <div class="writeboard">
					<p>글수정</p>
          <form onsubmit="return writef();" action="modifyBoard.php" method="post">
            <input type="hidden" name="board_no" value="<?=$board['board_no']; ?>">
            <input type="hidden" name="board_user_id" value="<?=$board['board_user_id']; ?>">
            <input type="text" name="title" class="board_title" placeholder="제목을 입력하세요."
            value="<?= $board['board_title']; ?>">
            <p></p>
            <!-- summernote와 관련된 영역 -->
            <textarea id="summernote" name="contents"><?= $board['board_content']; ?></textarea>
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
