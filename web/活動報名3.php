<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form method="post" action="活動報名成功3.php">
    <input type="hidden" name="dbaction" value="insert">
    <div class="container" style="margin:50px">
    <div class="row">
        <div class="col-4">
            <class="form-label">活動名稱：財經名人講座</label>
            <input class="form-control" type="hidden" name="title" required> 
        </div>
        <div class="col-4">
            <label for="" class="form-label">活動日期：2022/12/06</label>
            <input class="form-control" type="hidden" name="date" required> 
        </div>
        <div class="col-4">
            <label for="" class="form-label">學號</label>
            <input class="form-control" type="text" name="學號" required>
        </div>
        
            
      
      <div class="col-4">
        <label for="" class="form-label">姓名</label> 
        <input class="form-control" type="text" name="姓名" required>
      </div>
      <div class="col-4">
        <label for="" class="form-label">手機號碼</label> 
        <input class="form-control" type="text" name="電話" required>
      </div>
      

      
      
      
    </div>

      
     
       
       
      
    <div class="container" style="margin:50px">
      <div class="row">
        <div class="col-3">

        </div>
        <div class="col-3">
            <input type="submit" value="報名活動" style="width:100px;">
        </div>
        
        <div class="col-3">
          <a href="活動報名專區.php">返回報名頁面</a>
        </div>
      </div>

    </div>
  </form>
</body>
</html>