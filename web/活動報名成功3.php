<?php

$學號=$_POST["學號"];
$姓名=$_POST["姓名"];
$電話=$_POST["電話"];

$link=mysqli_connect("localhost","root","12345678","temp");
$sql="INSERT INTO act3 (學號,姓名, 電話)
VALUES ('$學號','$姓名','$電話');";


if(mysqli_query($link,$sql)){
    ?>
    <script>
        alert("報名成功");
        location.href="活動報名專區.php";
    </script>


<?php
}else{
?>
 <script>
        alert("報名失敗");
        location.href="活動報名專區.php";
    </script>
<?php

}

?>