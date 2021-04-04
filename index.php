<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>WEB</h1>
  <ol>
    <li><a href="index.php?id=HTML">HTML</a></li>
    <li><a href="index.php?id=CSS">CSS</a></li>
    <li><a href="index.php?id=JavaScript">JavaScript</a></li>
  </ol>
  <h2>
    <?php
      echo $_GET['id'];
    ?>
  </h2>
  Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
  Enim illum distinctio repudiandae libero sunt? 
  Inventore, neque. Non dolorum, pariatur exercitationem at ab beatae doloribus, 
  delectus, repellendus totam quidem sed consequatur?
</body>
</html>