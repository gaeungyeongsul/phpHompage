<header>
    <div class="container">
        <div class="header_logo">
          <div class="user_nav">
            <ul>
              <?php
                session_start();
                if(empty($_SESSION['user_id'])){
              ?>
              <li><a href="loginForm.php">로그인</a></li>
              <li><a href="joinForm.php">회원가입</a></li>
              <?php
                }else{
              ?>
              <li><a href="logout.php">로그아웃</a></li>
              <li><a href="#">마이페이지</a></li>
              <?php
                }
              ?>
            </ul>
          </div>
            <a href="main.php"><img src="../img/logo.PNG"></a>
        </div>
        <div class="header_nav">
            <ul>
                <li><a href="main.php">HOME</a></li>
                <li><a href="map.php">지도</a></li>
                <li><a href="readBoardListView.php">게시판</a></li>
                <li><a href="#">메뉴3</a></li>
            </ul>
        </div>
    </div>
</header>
