<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
  <?php


  $number=$_GET['number'];
    
  $link = mysqli_connect('localhost','root','12345678','temp');
	$sql  = "delete from news where number=$number";
     if(mysqli_query($link,$sql))
     {
      ?>
      <script>
          alert("刪除公告成功");
          location.href="首頁1.php";
      </script>
  
  
  <?php
     }
   else
     {
      echo $sql;
       echo "刪除失敗";
       header("Refresh:1.5, url=首頁1.php");
     }
  ?>
 </body>
</html>
