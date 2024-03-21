<?php

$title=$_POST["title"];
$content=$_POST["content"];
$date=$_POST["date"];
$img="assets/images/country-01.jpg";

$link=mysqli_connect("localhost","root","12345678","temp");
$sql="INSERT INTO news (title, content, img,date)
VALUES ('$title', '$content', '$img','$date');";


if(mysqli_query($link,$sql)){
    ?>
    <script>
        alert("新增公告成功");
        location.href="首頁1.php";
    </script>


<?php
}else{
?>
 <script>
        alert("新增公告失敗");
        location.href="announcement.php";
    </script>
<?php

}

?>