<?php
$conn = mysqli_connect("127.0.0.1:3307","root","mysql1","gaeundev");
$sql = "select * from board";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)){
echo $row['board_no'].'<br>';
echo $row['title'].'<br>';
}
?>
