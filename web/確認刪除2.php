
    <?php
        $Number=$_GET['Number'];
    ?>
    <script>
        if(confirm("確認刪除?")){
            location.href="刪除會籍.php?Number=<?php echo $Number?>";

        }
        else{
            location.href="首頁1.php";
        }
    </script>
