<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<title>메인슬라이드</title>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/main.css?sfsdf">
<script type="text/javascript" src="../js/slider.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
<!-- Bootstrap core CSS -->
<!-- Material Design Bootstrap -->
<link href="../mdb/css/mdb.min.css" rel="stylesheet">
<!-- Your custom styles (optional) -->
<link href="../mdb/css/style.css" rel="stylesheet">

</head>
<body>
	<?php include("header.php"); ?>
	<div class="container">
			<div class="box">
					<div class="board">
							<div id="slider01" class="gallery-wrapper">
								<ul class="gallery-list">
									<li><a href="#none"><img src="../img/slider/gum.png" alt="" /></a></li>
									<li><a href="#none"><img src="../img/slider/hyep.png" alt="" /></a></li>
									<li><a href="#none"><img src="../img/slider/visa.png" alt="" /></a></li>
								</ul>
								<a class="btn-prev" href="#none">◀ </a>
								<a class="btn-next" href="#none">▶</a>

								<div class="ctrl-box">
									<a href="#none" class="active"><i class="bullet">1</i></a>
									<a href="#none"><i class="bullet">2</i></a>
									<a href="#none"><i class="bullet">3</i></a>
								</div>
							</div>
							<div class="chart">
								<div class="chart1">
									<p>작년 제주도에는?</p><br>
									<canvas id="lineChart"></canvas>
								</div>
								<div class="chart2">
									<p>작년 <?= date("m"); ?>월 제주도에는?</p><br>
								<canvas id="pieChart"></canvas>
							</div>
							</div>
						</div>

				</div>
		</div>
		<?php include("footer.php"); ?>

		<!-- JQuery -->
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../mdb/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../mdb/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../mdb/js/mdb.js"></script>
		<script type="text/javascript" src="../js/chart.js"></script>


</body>
</html>
