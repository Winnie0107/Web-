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
        $Number=$_GET['Number'];
        $link = mysqli_connect('localhost','root','12345678','temp');

        $sql="select * from login where Number=$Number";
       
       
        $result = mysqli_query($link, $sql);
        if($row=mysqli_fetch_assoc($result)){
            $Number=$row['Number'];            
            $Password=$row['Password'];
            $姓名=$row['姓名'];
            $職位=$row['職位'];
            $權限=$row['權限'];

        }
?>

<form method="post" action="修改2.php">
    <input type="hidden" name="Number" value="<?php echo $Number?>">
    <div class="container" style="margin:50px">
    <div class="row">
      <div class="col-4">
        <label for="" class="form-label">學號</label> 
        <input class="form-control" type="text" name="Number" value="<?php echo $row['Number']?>" >
      </div>
      
      <div class="col-4">
        <label for="" class="form-label">姓名</label> 
        <input class="form-control" type="text" name="姓名" value="<?php echo $row['姓名']?>" >
      </div>
      <div class="col-4">
        <label for="" class="form-label">職位</label> 
        <input class="form-control" type="text" name="職位"  value="<?php echo $row['職位']?>">
      </div>
      <div class="col-4">
        <label for="" class="form-label">權限</label> 
        <input class="form-control" type="text" name="權限"  value="<?php echo $row['權限']?>">
      </div>
   
      
    </div>

      
     
       
       
      
    <div class="container" style="margin:50px">
      <div class="row">
        <div class="col-3">

        </div>
        <div class="col-3">
            <input type="submit" value="確認修改" style="width:100px;">
        </div>
        <div class="col-3">
            <input type="reset" value="取消修改" style="width:100px;">

        </div>
        <div class="col-3">
          <a href="權限管理.php?Number=<?php echo $row['Number']?>">返回權限管理頁面</a>
        </div>
      </div>

    </div>
  </form>
</body>
</html>