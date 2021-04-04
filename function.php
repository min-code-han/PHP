<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>function</title>
</head>
<body>
  <h1>function</h1>
  <?php
    $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. 

    Ea ut doloremque placeat consequatur animi error, provident pariatur voluptate! 
    Nobis, exercitationem dignissimos. 


    Quod dolorum quibusdam, sit delectus doloremque possimus quam dolorem.";
    echo $str;
   
  ?>
  <h2>strlen()</h2>
  <?php
   echo strlen($str);
  ?>
  <h2>nl2br()</h2>
  <?php
    echo nl2br($str);
  ?>
</body>
</html>