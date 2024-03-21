<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $link = mysqli_connect('localhost','root','12345678','temp');
        $number=$_POST['number'];            
        $title=$_POST['title'];            
        $content=$_POST['content'];            
        $img=$_POST['img'];            
        $date=$_POST['date'];            

        $sql = "update news set title='$title',content='$content',date='$date' where number=$number";
        if(mysqli_query($link,$sql))
     {
      ?>
      <script>
          alert("修改消息成功");
          location.href="首頁1.php";
      </script>
  
  
  <?php
     }
   else
     {
       echo "修改消息失敗";
       echo $sql;
       header("Refresh:1.5, url=首頁1.php");
     }
  ?>
    
?>
</body>
</html>