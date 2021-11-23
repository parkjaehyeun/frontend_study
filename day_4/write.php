<?php
$conn = mysqli_connect("127.0.0.1:3307", "root", 111111); #서버접
mysqli_select_db($conn, "opentutorials");# DB 선택
$result = mysqli_query($conn, "SELECT * FROM topic"); #조회
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert title here</title>
<link rel="stylesheet" href="style_index_php.css">
</head>
<body id= 'target'>
      <header>
        <img src="https://scontent-gmp1-1.xx.fbcdn.net/v/t1.18169-9/21034355_1625755874163757_8757487756385163120_n.png?_nc_cat=108&ccb=1-5&_nc_sid=973b4a&_nc_ohc=wVx-GB_nTl4AX-qoyc3&_nc_ht=scontent-gmp1-1.xx&oh=fc3677ca059943b95db4013823976aaf&oe=61BE5C3A" alt="메타몽!"/>
        <h1><a href="http://localhost/index.php">JavaScript</a></h1>
      </header>
      <nav>
            <ol>
              <?php
              while( $row = mysqli_fetch_assoc($result)){
                echo '<li><a href="http://localhost/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
              }
              ?>
            </ol>
      </nav>
  <div id = 'control'>
      <input type="button" value= "white" onclick="document.getElementById('target').className='white'"/>
      <input type="button" value = "black" onclick="document.getElementById('target').className='black'"/>
      <a href = "http://localhost/write.php"> 쓰기 </a>
  </div>

  <article>
  <form  action="process.php" method="post">
    <p> 제목: <input type="text" name="title"> </p>
    <p>
      작성자: <input type="text" name="author">
    </p>
    <p>
      본문: <textarea name = "description"></textarea>
    </p>
    <input type="submit" name="name">
  </form>
  </article>

</body>
</html>
