
    <?php
        $number=$_GET['number'];
    ?>
    <script>
        if(confirm("確認刪除?")){
            location.href="刪除.php?number=<?php echo $number?>";

        }
        else{
            location.href="首頁1.php";
        }
    </script>
