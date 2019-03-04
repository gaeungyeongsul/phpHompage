<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<title>메인슬라이드</title>
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/style.css">
<script type="text/javascript" src="../js/slider.js"></script>
<style>

</style>
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
						</div>
				</div>
		</div>
		<?php include("footer.php"); ?>
</body>
</html>
