<?php
    $txtSentence = $_POST["txt1"];
    $btnStart = $_POST["btnOK"];
    $tLen = strlen($txtSentence);
    $number = array("1","2","3","4","5","6","7","8","9","0");
    $letterSmall = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $letterBig   = "abcdefghijklmnopqrstuvwxyz";
    $numberCount = 0;
    $letterCount = 0;
    if (isset($btnStart)) {
        for ($tPos = 0 ; $tPos < $tLen ; $tPos++) {
            $ch = substr($txtSentence, $tPos , 1);
            echo $ch;
            for ($i = 0 ; $i < 10 ; $i++) {
                if ($ch == $number[$i]) {
                    $numberCount += 1;
                }
            }
            for ($j = 0 ; $j < strlen($letterBig) ; $j++ ) {
                if ($ch == substr($letterBig, $j, 1) || $ch == substr($letterSmall, $j, 1)) {
                    $letterCount += 1;
                }
            }
        }
    }
    
?>

    <html>

    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <form method="post" action="">
            <input type="text" name="txt1" value="">
            <input type="submit" name="btnOK" value="btnStart">
        </form>
        <?php 
        echo "數字共有".$numberCount."個<br>";
        echo "英文字母共有".$letterCount."個<br>";
    ?>

    </body>

    </html>