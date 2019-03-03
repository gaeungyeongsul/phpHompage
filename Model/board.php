<?php
  class Board{
    private $board_no;
    private $board_user_id;
    private $board_user_nickname;
    private $board_title;
    private $board_content;
    private $board_views;
    private $board_write_date;
    public function setBoard_no($board_no){
        $this->board_no = $board_no;
    }
    public function setBoard_user_id($board_user_id){
        $this->board_user_id = $board_user_id;
    }
    public function setBoard_user_nickname($board_user_nickname){
        $this->board_user_nickname = $board_user_nickname;
    }
    public function setBoard_title($board_title){
        $this->board_title = $board_title;
    }
    public function setBoard_content($board_content){
        $this->board_content = $board_content;
    }
    public function setBoard_views($board_views){
        $this->board_views = $board_views;
    }
    public function setBoard_write_date($board_write_date){
        $this->board_write_date = $board_write_date;
    }

    public function getBoard_no(){
        return $this->board_no;
    }
    public function getBoard_user_id(){
        return $this->board_user_id;
    }
    public function getBoard_user_nickname(){
        return $this->board_user_nickname;
    }
    public function getBoard_title(){
        return $this->board_title;
    }
    public function getBoard_content(){
        return $this->board_content;
    }
    public function getBoard_views(){
        return $this->board_views;
    }
    public function getBoard_write_date(){
        return $this->board_write_date;
    }
    function printUser(){   // User 클래스에 printUser 메소드 선언
      print_r($this);      // User 클래스 Print
    }
  }
?>
