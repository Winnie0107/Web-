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
        session_start();
        $Number=$_POST['Number'];
        $Password=$_POST['Password'];
        $link=mysqli_connect("localhost","root","12345678","temp");
        $sql="select * from login where Number='$Number' and Password='$Password'";

        $result = mysqli_query($link, $sql);
        $row=mysqli_fetch_assoc($result);
        echo $sql;
        if(isset($row)){
            $_SESSION["Name"]=$row["姓名"];
            $_SESSION["level"]=$row["權限"];
            ?>
            <?php
            if($_SESSION["level"]=="管理者"){
              ?>
              <script>
              alert("登入成功！");
                location.href="首頁1.php";
                </script><?php
            }
            ?>
            <?php
            if($_SESSION["level"]=="會員"){
              ?>
              <script>
              alert("登入成功！");
                location.href="首頁2.php";
                </script><?php
            }
            ?>
           
            <?php

        }
        else
        {
            ?>
            <script>
          alert("登入失敗！");
          location.href="登入.php";
            </script>
            <?php
        }
        
  
?>     
    
</body>
</html>