<?php
    $year = $_POST["year"];
    $month = $_POST["month"];
    $number = $_POST["number"];
    $data = 0;
    $day = 0;
    //$leapYear = 366;
    //$commonYear = 365;
    $leapYearArray = array("31","29","31","30","31","30","31","31","30","31","30","31");
    $commonYearArray = array("31","28","31","30","31","30","31","31","30","31","30","31");
    //---------計算是否為閏年----------------
    if($year % 4 == 0){
        $day = 366 ;
        if($year % 100 == 0) {
            if($year % 400 == 0) {
                $day = 366 ;
            } else {
                $day = 365;
            }
        }
    } else {
        $day = 365;
    }
    //---------計算是否為閏年----------------
    //---------計算日期----------------------
    if ($day == 366) {
        for ($i = 0 ; $i < $month-1 ; $i++) {
            $data += $leapYearArray[$i];
            echo $leapYearArray[$i];
        }
    }
    if ($day == 365) {
        for ($i = 0 ; $i < $month-1 ; $i++) {
            $data += $commonYearArray[$i];
            echo $commonYearArray[$i];
        }
    }
    $data += $number;
    
    
    //---------計算日期----------------------
    
?>

<html>

<head>
    <meta charset="utf-8">
</head>    

<body>
    <form method="post" action="">
        請輸入年分:<input type="text" name="year" value=""><br>
        請輸入月份:<input type="text" name="month" value=""><br>
        請輸入幾號:<input type="text" name="number" value="">
        <input type="submit" name="btnStart" value="Start">
    </form>
    <?php echo "您輸入的日期是:西元".$year."年".$month."月".$number."號是今年".$day."天中的第".$data."天"?>
</body>

</html>