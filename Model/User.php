<?php
  class User{
    private $user_no;
    private $user_id;
    private $user_password;
    private $user_nickname;
    private $user_gender;
    private $user_join_date;
    public function setUser_no($user_no){
        $this->user_no = $user_no;
    }
    public function setUser_id($user_id){
        $this->user_id = $user_id;
    }
    public function setUser_password($user_password){
        $this->user_password = $user_password;
    }
    public function setUser_nickname($user_nickname){
        $this->user_nickname = $user_nickname;
    }
    public function setUser_gender($user_gender){
        $this->user_gender = $user_gender;
    }
    public function setUser_join_date($user_join_date){
        $this->user_join_date = $user_join_date;
    }

    public function getUser_no(){
        return $this->user_no;
    }
    public function getUser_id(){
        return $this->user_id;
    }
    public function getUser_password(){
        return $this->user_password;
    }
    public function getUser_nickname(){
        return $this->user_nickname;
    }
    public function getUser_gender(){
        return $this->user_gender;
    }
    public function getUser_join_date(){
        return $this->user_join_date;
    }
    function printUser(){   // User 클래스에 printUser 메소드 선언
      print_r($this);      // User 클래스 Print
    }
  }
?>
