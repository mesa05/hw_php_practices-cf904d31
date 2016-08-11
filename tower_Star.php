<?php
    //session_start();
    $towerNum = $_POST["number"];
    $star="";
    function towerStar ($towerNum) {
        for($i = 1 ; $i <= $towerNum ; $i++ ){
            $star .= "*";
            echo $star.'<br>';
        }
    }
?>

<html>

<head>
    <meta charset="utf-8">
</head>    

<body>
    <form method="post" action="">
        請輸入任意數:<input type="text" name="number" value="">
        <input type="submit" name="btnStart" value="Start">
    </form>
    <?php towerStar($towerNum); ?>
</body>

</html>