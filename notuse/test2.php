<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<title>메인슬라이드</title>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/main.css">
<script type="text/javascript" src="../js/slider.js"></script>
<script>
$(document).ready(function(){
$('.dd').on('click', function(){
  alert('눌림')
  $.ajax({
    url				: 'test1.php',
    data			: {
      place_name	: 1
    },
    type			: 'GET',
    dataType		: 'json',
    success		: function(data) {//???????????????
      alert(data)
			alert(data.key1)
    },
    error : function(jqxhr , status , error ){
      alert(error + "에러");
    }
  });
})
});
</script>
</head>

<body>
	<?php include("header.php"); ?>
	<div class="container">
			<div class="box">
        <input type="button" class="dd" value="ㅇㅇㅇㅇ">
				</div>
		</div>
		<?php include("footer.php"); ?>
</body>
</html>
