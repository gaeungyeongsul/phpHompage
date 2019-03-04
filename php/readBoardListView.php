<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<title>게시글</title>
<link rel="stylesheet" href="../css/style.css">

</head>
<body>
	<?php include("header.php"); ?>
	<div class="container">
		<div class="box">
			<div class="board">
        <p>여행 후기 게시판</p>
        <table class="board_list">
        	<tr>
          	<th>글번호</th>
          	<th>제목</th>
          	<th>글쓴이</th>
          	<th>날짜</th>
          	<th>조회수</th>
          </tr>
					<?php
						include("db.php");
						$conn = dbconn();
						include("readboardList.php");
						$boardlist = listd($conn);
					?>
        </table>
				<?php
				  //session_start();
					if(!empty($_SESSION['user_id'])){
				?>
        <input type="button" value="글쓰기" class="write_button" onclick="location.href='writeForm.php'">
				<?php
					}
				?>
        </div>
        <div class="page">
          <div class="pagination">
						<?php
							$paging = page($conn);
						?>
          </div>
        </div>
        <div class="search">
          <form action="readBoardListView.php">
          	<select name="type">
            	<option value="0">전체</option>
            	<option value="1">제목</option>
            	<option value="2">내용</option>
            	<option value="3">제목+내용</option>
            	<option value="4">글쓴이</option>
            </select>
            <input type="text" placeholder="검색어를 입력하세요." name="keyword">
            <input type="submit" value="검색">
          </form>
        </div>
			</div>
		</div>
	</div>
	<?php include("footer.php"); ?>
</body>
</html>
