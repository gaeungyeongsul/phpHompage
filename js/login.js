$(document).ready(function(){
  $('#login_btn').click(function(){
    $.ajax({
      method: 'POST',
      url : 'login.php',
      data : {
        user_id : $('#user_id').val(),
        user_password : $('#user_password').val()
      },
      success : function(result){
        if(result){
          location.href='main.php';
        }else{
          alert('잘못된 아이디 혹은 비밀번호입니다.');
        }
      },
      error : function(xhrReq, status, error) {
				alert(error)
			}
    })
  })
});
