<?php

$姓名=$_POST["姓名"];
$Number=$_POST["Number"];
$Password=$_POST["Password"];
$職位=$_POST["職位"];
$權限=$_POST["權限"];

$link=mysqli_connect("localhost","root","12345678","temp");
$sql="INSERT INTO login (姓名, Number, Password,職位, 權限)
VALUES ('$姓名', '$Number', '$Password','$職位','$權限');";


if(mysqli_query($link,$sql)){
    ?>
    <script>
        alert("新增成功");
        location.href="會員管理.php";
    </script>


<?php
}else{
?>
 <script>
        alert("新增失敗");
        location.href="會員管理.php";
    </script>
<?php

}

?>