<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id= 'target'>
      <header>
        <img src="https://scontent-gmp1-1.xx.fbcdn.net/v/t1.18169-9/21034355_1625755874163757_8757487756385163120_n.png?_nc_cat=108&ccb=1-5&_nc_sid=973b4a&_nc_ohc=wVx-GB_nTl4AX-qoyc3&_nc_ht=scontent-gmp1-1.xx&oh=fc3677ca059943b95db4013823976aaf&oe=61BE5C3A" alt="메타몽!"/>
        <h1>생활코딩</h1>
      </header>
      <nav>
            <ol>
              <?php
                echo file_get_contents("list.txt");
               ?>
            </ol>
      </nav>
  <div id = 'control'>
      <input type="button" value= "white" onclick="document.getElementById('target').className='white'"/>
      <input type="button" value = "black" onclick="document.getElementById('target').className='black'"/>
  </div>

  <article
  <<?php
  if(empty($_GET['id']) == false){
  echo file_get_contents($_GET['id'].".txt");
  }
   ?>
  </article>
</body>
</html>
