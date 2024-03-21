<!DOCTYPE html>
<html lang="en">
<?php session_start();?>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>系學會網頁系統</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12" align="right">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <div class="col-5" align="left">

                      <a href="首頁1.php" class="logo" >
                        <img src="assets/images/logo.png" alt="" width="200" height="70%">
                      </a>
                    </div>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <?php if($_SESSION["level"]=="管理者"){?>
                        <li><a href="首頁1.php" >首頁</a></li>
                        <?php }else{?>
                        <li><a href="首頁2.php" >首頁</a></li>
                        <?php }?>

                        <?php if($_SESSION["level"]=="會員"){?>
                          <li><a href="活動報名專區.php">活動報名專區</a></li>
                        <?php }else{?>
                          <li><a href="活動報名狀況.php">活動報名狀況</a></li>

                         <?php }?>

                          <?php if($_SESSION["level"]=="管理者"){?>
                        <li><a href="權限管理.php" class="active">權限管理</a></li>
                        <li><a href="會員管理.php">會員管理</a></li>
                        <?php }?>
                        <?php if(isset($_SESSION["level"])){?>
                        <li><a href="logout.php">登出</a></li>
                        <?php }else{?>
                          <li><a href="登入.php">登入</a></li>
                          <?php }?>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Authority Management</h4>
          <h2>權限管理</h2>
          <p><font color="white" size="4">管理各個帳號使用權限</font></p>
        </div>
      </div>
    </div>
  </div>

  <div class="search-form">
    <div class="container">
      <div class="row">
        
      </div>
    </div>
  </div>

  <div class="amazing-deals">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-12">
          <div class="item">
            <div class="row">
              <div class="col-lg-6">
                <div>

                </div>
              </div>
              
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <?php
  $link=mysqli_connect("localhost","root","12345678","temp");
  $sql="select * from login";
  $result=mysqli_query($link,$sql);
  
  ?>
  
  <table border="2" width="1000" height="200" align="center" class="table-bordered">
        
        <tr align="center" style="background-color:#DEFFFF">
            <th>學號</th>
            <th>姓名</th>
            <th>職位</th>
            <th>權限</th>
            <th>修改/刪除</th>
        </tr>
        <?php
        while($row=mysqli_fetch_array($result)){
          $學號=$row['學號'];
          $姓名=$row['姓名'];
          $職位=$row['職位'];
          $權限=$row['權限'];
        ?>
        <tr align="center">
        <td><?php echo $row["Number"];?></td>
        <td><?php echo $row["姓名"];?></td>
        <td><?php echo $row["職位"];?></td>
        <td><?php echo $row["權限"];?></td>
        <td width="250"><div class="main-button" >
                          <a href="會員修改.php?Number=<?php echo $row['Number']?>">修改</a>
                          <a href="確認刪除2.php?Number=<?php echo $row['Number']?>">刪除</a>
                        </div></td>
        </tr>
        <?php }?>
        

    </table>
  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h2>聯絡資訊</h2>
          <h4><em><font color:"white" size="3">新北市新莊區242中正路510號 利瑪竇大樓LM306</font></em></h4>
          <h4><em><font color:"white" size="3">大學部秘書 TEL：+886-2-2905-2666</font></em></h4>
          <h4><em><font color:"white" size="3">碩士班秘書 TEL：+886-2-2905-2940 / FAX：+886-2-2905-2182</font></em></h4>
        </div>

      </div>
    </div>
  </div>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });
  </script>

  </body>

</html>
