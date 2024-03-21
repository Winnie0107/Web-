<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>系學會網頁系統</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->

</head>
 
<body>
  <form method="post" action="新增會員.php">
    <input type="hidden" name="dbaction" value="insert">
    <div class="container" style="margin:50px">
    <div class="row">
      <div class="col-12">
        <class="form-label">權限:會員</label> 
        <input class="form-control" type="hidden" name="權限" value="會員" required >
      </div>
      
      <div class="col-4">
        <label for="" class="form-label">會員姓名</label> 
        <input class="form-control" type="text" name="姓名" required>
      </div>
      <div class="col-4">
        <label for="" class="form-label">職位</label> 
        <input class="form-control" type="text" name="職位"  required>
      </div>
      <div class="col-4">
        
      </div>
      <div class="col-4">
        <label for="" class="form-label">帳號</label> 
        <input class="form-control" type="text" name="Number"  required>
      </div>
      <div class="col-4">
        <label for="" class="form-label">密碼</label> 
        <input class="form-control" type="text" name="Password"  required>
      </div>
      
      
      
   
      
    </div>

      
     
       
       
      
    </div>
    <div class="container" style="margin:50px">
      <div class="row">
        <div class="col-5">

        </div>
        <div class="col-5">
            <input type="submit" value="送出" style="width:100px;">
        </div>
      </div>

    </div>
  </form>


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

    $('nav .controls label').click(function () {
      clearInterval(bannerTimer);
      bannerTimer = setInterval(bannerSwitcher, 5000)
    });
  </script>

</body>

</html>