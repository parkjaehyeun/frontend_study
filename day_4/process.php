<?php
$conn = mysqli_connect("127.0.0.1:3307", "root", 111111); #서버접
mysqli_select_db($conn, "opentutorials");# DB 선택
$sql = "INSERT INTO topic(title,description,author,created) VALUES('".$_POST['title']."','".$_POST['description']."','".$_POST['author']."',now())";
$result = mysqli_query($conn, $sql); #조회

header("Location: http://localhost/index.php");
#redirection 구현
 ?>
