<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Parameter</title>
</head>
<body>
  <h1><a href="index.php">WEB</a></h1>
  <!-- <ol>
    <li><a href="index.php?id=HTML">HTML</a></li>
    <li><a href="index.php?id=CSS">CSS</a></li>
    <li><a href="index.php?id=JavaScript">JavaScript</a></li>
    <li><a href="index.php?id=PHP">PHP</a></li>
  </ol> -->

  <!-- 1. data 디렉토리 안에 있는 파일의 목록을 가져오세요.
  2. 파일의 목록 하나하나를 li와 a태그를 이용해서 글 목록을 만드세요. -->

  <ol>
    <?php
      $list = scandir('./data');
     

      $i = 0;
      while($i<count($list)){

        if($list[$i] != "."){
          if($list[$i] !=  ".."){
          echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
          }
        }

        
        $i = $i + 1;
      }





     /*
      echo "<li>$list[0]</li>\n";
      echo "<li>$list[1]</li>\n";
      echo "<li>$list[2]</li>\n";
      echo "<li>$list[3]</li>\n";
      echo "<li>$list[4]</li>\n";
      echo "<li>$list[5]</li>\n";
      */
    ?>
  </ol>

  


  <h2>
    <?php
    
    if(isset($_GET['id'])){
      echo $_GET['id'];
    }else{
      echo "welcome";
    }
      
    ?>
  </h2>
  <?php
  if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
  }else{
    echo "Hello, Mina";
  }
    
  ?>
</body>
</html>