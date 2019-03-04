<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>new</title>
</head>
<link rel="stylesheet" href="../css/style.css?">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
    $('#delete_btn').click(function(){
      var result = confirm('정말로 삭제하시겠습니까?');
        if(result){
          var board_no = $('input[name=board_no]').val();
          $.ajax({
            method: 'POST',
            url : 'deleteBoard.php',
            data : {
              'board_no' : board_no
            },
            success : function(result){
              if(result)
                $(location).attr('href', 'readBoardListView.php');
            },
            error : function(xhrReq, status, error) {
      				alert(error)
      			}
          })
        }
    })
  })


</script>
<body>
  <?php include("header.php"); ?>
    <div class="container">
        <div class="box">
            <div class="board">
                <div class="boardone">
                    <div class="board_nav_1">
                      <?php
                        include("db.php");
          						  $conn = dbconn();
                        include("selectOneBoard.php");
                        $board = readBoard($conn);
                      ?>
                        <div class="board_no"><?= $board['board_no']; ?></div>
                        <div class="board_title"><?= $board['board_title']; ?></div>
                        <div class="board_date"><?= $board['board_write_date']; ?></div>
                    </div>
                    <div class="board_nav_2">
                        <div class="board_nick">닉네임 : <?= $board['board_user_nickname']; ?></div>
                        <div class="board_reviewnum"><?= $board['board_views']; ?></div>
                    </div>
                    <div class="board_content">
                        <?= $board['board_content']; ?>
                    </div>
                    <div class="btn">
                    <?php
                      $url = gotolist();
                      if(!empty($_SESSION['user_id'])
                          && $_SESSION['user_id'] == $board['board_user_id']){
                    ?>
                    <?php
                      /*<form class="deleteForm" method="post" action="deleteBoard.php" onsubmit="return deleteCheck();">
                      <input type="hidden" value="<?= $board['board_no']; ?>" name="board_no">
                      <input type="button" value="수정하기" onclick="location.href='modifyBoard.php?board_no<?=$url; ?>'">
                      <input type="submit" value="삭제하기"> */
                     ?>
                    <form method="post" action="modifyBoardForm.php">
                    <input type="hidden" value="<?= $board['board_no']; ?>" name="board_no">
                    <input type="submit" value="수정하기">
                    <input type="button" value="삭제하기" id="delete_btn">
                    <?php
                      }
                    ?>
                    <input type="button" value="목록으로" onclick="location.href='<?=$url; ?>'">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php /*---------------------------------목록-------------------------------*/ ?>

    <div class="container">
  	   <div class="box">
  			<div class="board">
          <table class="board_list">
            <tr>
              <th>글번호</th>
              <th>제목</th>
              <th>글쓴이</th>
              <th>날짜</th>
              <th>조회수</th>
            </tr>
            <?php
              include("readboardList.php");
              $boardlist = listd($conn);
            ?>
          </table>
          <input type="button" value="글쓰기" class="write_button" onclick="location.href='writeForm.php'">

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
