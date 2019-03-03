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
    $.ajax({
        url: "https://dapi.kakao.com/v2/local/search/category.json?category_group_code=CE7&rect=126.874237,33.431441",
        headers: { 'Authorization': 'KakaoAK 51a630216663d7e42ba05bb82c5bf6d9'},
        type: 'GET'
    }).done(function(data) {
        alert(data.meta.total_count + "토탈");
        //var list=JSON.parse(data);
        //.documents
        alert(data.documents.length + "렝")
        alert(data.documents[0].address_name +"무슨동");
        alert(data.documents[14].address_name +"무슨동");
        alert(data.documents[15].address_name +"무슨동");
        //for(i=0;i<words.length;++i){
        // if(words[i].id==req.params.id){
        // res.send(words[i]);
        //  }
        //}

    });
});
</script>
</head>
<body>

</body>
</html>
