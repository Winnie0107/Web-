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
        $Number=$_POST['Number'];            
        $Password=$_POST['Password'];            
        $姓名=$_POST['姓名'];            
        $職位=$_POST['職位'];            
        $權限=$_POST['權限'];            

        $sql = "update login set Password='$Password',姓名='$姓名',職位='$職位',權限='$權限' where Number=$Number";
        if(mysqli_query($link,$sql))
     {
      ?>
      <script>
          alert("修改會員資料成功");
          location.href="權限管理.php";
      </script>
  
  
  <?php
     }
   else
     {
       echo "修改會員資料失敗";
       echo $sql;
       header("Refresh:1.5, url=權限管理.php");
     }
  ?>
    
?>
</body>
</html>