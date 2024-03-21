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
        $number=$_GET['number'];
        $link = mysqli_connect('localhost','root','12345678','temp');

        $sql="select * from news where number=$number";
       
       
        $result = mysqli_query($link, $sql);
        if($row=mysqli_fetch_assoc($result)){
            $title=$row['title'];            
            $content=$row['content'];
            $date=$row['date'];

        }
?>

<form method="post" action="修改1.php">
    <input type="hidden" name="number" value="<?php echo $number?>">
    <div class="container" style="margin:50px">
    <div class="row">
      <div class="col-4">
        <label for="" class="form-label">標題</label> 
        <input class="form-control" type="text" name="title" value="<?php echo $row['title']?>" >
      </div>
      <div class="col-4">
        <label for="" class="form-label">日期</label> 
        <input class="form-control" type="date" name="date"  value="<?php echo $row['date']?>">
      </div>
    </div>

      <div class="col-12">
        <th>內容</th>
        <td><textarea class="form-control" type="text" name="content" rows="5"><?php echo $row['content']?></textarea>
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
          <a href="首頁1.php?Number=<?php echo $row['Number']?>">返回首頁</a>
        </div>
      </div>

    </div>
  </form>
</body>
</html>