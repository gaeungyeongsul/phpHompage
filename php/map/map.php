<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>카테고리별 장소 검색하기</title>
<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" href="../../css/map2.css">
<link rel="stylesheet" href="../../css/map.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

</head>
<body>
  <?php include("../header.php"); ?>
  <div class="container">
		<div class="box">
			<div class="board">
				<div class="map_wrap">
					<div id="map" style="width:100%;height:100%;position:relative;overflow:hidden;">
					</div>
					<ul id="category">
						<li id="FD6" data-order="0">
							<span class="category_bg bank"></span>
							음식점
						</li>
						<li id="CE7" data-order="4">
							<span class="category_bg cafe"></span>
							카페
						</li>
					</ul>
				</div>
				<div class="naver_search">
					<p>네이버 검색 결과</p>
					<table class="naver_list">
						<thead>
							<tr>
								<th>제목</th>
								<th>블로그명</th>
								<th>날짜</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				<div>
			</div>
		</div>
	</div>
<?php include("../footer.php"); ?>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=51a630216663d7e42ba05bb82c5bf6d9&libraries=services"></script>
<script type="text/javascript" src="../../js/map.js"></script>
</body>
</html>
