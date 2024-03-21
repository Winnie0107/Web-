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


  $Number=$_GET['Number'];
    
  $link = mysqli_connect('localhost','root','12345678','temp');
	$sql  = "delete from login where Number=$Number";
     if(mysqli_query($link,$sql))
     {
      ?>
      <script>
          alert("刪除成功");
          location.href="權限管理.php";
      </script>
  
  
  <?php
     }
   else
     {
       echo "刪除失敗";
       header("Refresh:1.5, url=權限管理.php");
     }
  ?>
 </body>
</html>
