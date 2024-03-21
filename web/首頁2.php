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
                        <li><a href="首頁1.php" class="active">首頁</a></li>
                        <?php }else{?>
                        <li><a href="首頁2.php" class="active">首頁</a></li>
                        <?php }?>

                        <?php if($_SESSION["level"]=="會員"){?>
                          <li><a href="活動報名專區.php">活動報名專區</a></li>
                        <?php }else{?>
                          <li><a href="活動報名狀況.php">活動報名狀況</a></li>

                         <?php }?>

                          <?php if($_SESSION["level"]=="管理者"){?>
                        <li><a href="權限管理.php">權限管理</a></li>
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

  <!-- ***** Main Banner Area Start ***** -->
  <section id="section-1">
    <div class="content-slider">
      <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
      <input type="radio" id="banner2" class="sec-1-input" name="banner">
      <input type="radio" id="banner3" class="sec-1-input" name="banner">
      <input type="radio" id="banner4" class="sec-1-input" name="banner">
      <div class="slider">
        <div id="top-banner-1" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Welcome To The Department Of Information Management </h2>
              <h1>輔仁大學資訊管理學系學會</h1>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-10">
                  <div class="more-info">
                    <div class="row ">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span style='line-height: 60px'><a href="https://www.youtube.com/watch?v=7fQEm309Rz8&t=61s"><font size="4.9"><u><b>系所介紹</b></u></font></a></span></h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fab fa-facebook	"></i>
                        <h4><span style='line-height: 60px'><a href="https://www.facebook.com/FJUIM/"><font size="4.9"><u><b>資管系粉絲團</b></u></font></a></span></h4>
                      </div>
                      <div class="col-lg-3">
                        <i class="fas fa-user-graduate	"></i>
                        <h4><span style='line-height: 60px'><a href="https://www.facebook.com/FJUIM/"><font size="4"><u><b>專題發表紀錄</b></u></font></a></span></h4>
                      </div>
                      <div class="col " >
                        <div class="main-button">
                          <a href="活動報名狀況.php">More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="top-banner-2" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Welcome To The Department Of Information Management </h2>
              <h1>活動報名</h1>
              <?php if($_SESSION["level"]=="會員"){?>
                <div class="border-button"><a href="活動報名專區.php">Go There</a></div>
              <?php }else{?>
                <div class="border-button"><a href="活動報名狀況.php">Go There</a></div>
              <?php }?>

            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-10">
                  <div class="more-info">
                    <div class="row ">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span style='line-height: 60px'><a href="https://www.youtube.com/watch?v=7fQEm309Rz8&t=61s"><font size="4.9"><u><b>系所介紹</b></u></font></a></span></h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fab fa-facebook	"></i>
                        <h4><span style='line-height: 60px'><a href="https://www.facebook.com/FJUIM/"><font size="4.9"><u><b>資管系粉絲團</b></u></font></a></span></h4>
                      </div>
                      <div class="col-lg-3">
                        <i class="fas fa-user-graduate	"></i>
                        <h4><span style='line-height: 60px'><a href="https://www.facebook.com/FJUIM/"><font size="4"><u><b>專題發表紀錄</b></u></font></a></span></h4>
                      </div>
                      <div class="col " >
                        <div class="main-button">
                          <a href="活動報名狀況.php">More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>

      </div>
      <nav>
        <div class="controls">
          <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">1</span></label>
          <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">2</span></label>
        </div>
      </nav>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
  
  <div class="visit-country">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <hr>
            <h2><font size="6" font color="#3aa3ab"><span style="height: 10px;">最新消息</span></font></h2>

            <hr>
            
          </div>
        </div>
        <div class="col-lg-12" align="right">

          
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-8">
          <div class="items">
            <div class="row">
              <?php
              
              $link=mysqli_connect("localhost","root","12345678","temp");
              $sql="select * from news";
              $result=mysqli_query($link,$sql);
              while($row=mysqli_fetch_array($result)){
              // mysqli_fetch_row $row[0]
              // mysqli_fetch_assoc

              
              ?>
              <div class="col-lg-12">
                <div class="item">
                  <div class="row">
                    <div class="col-lg-4 col-sm-5">
                      <div class="image">
                        <img src="<?php echo $row["img"];?>" alt="">
                      </div>
                    </div>
                    <div class="col-lg-8 col-sm-7">
                      <div class="right-content">
                        <h4><?php echo $row["title"];?></h4>
                        
                        <span><?php echo $row["date"];?></span>
                        
                        <p><?php echo $row["content"];?>
                        </p>                        
                        
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php }?>
              
             
              
            </div>
            
          </div>
        </div>

        <div class="col-lg-4">
          <div class="side-bar-map">
            <div class="row">
              <div class="col-lg-12">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.933618133541!2d121.43046621360561!3d25.036326744355208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a7dd8be91eaf%3A0xe342a67d6574f896!2z5aSp5Li75pWZ6LyU5LuB5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1667554509112!5m2!1szh-TW!2stw" width="100%" height="550px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>

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
    function bannerSwitcher() {
      next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
      if (next.length) next.prop('checked', true);
      else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function() {
      clearInterval(bannerTimer);
      bannerTimer = setInterval(bannerSwitcher, 5000)
    });
  </script>

  </body>

</html>
