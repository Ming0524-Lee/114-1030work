<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>資料顯示</title>
    <style>
        .box {
            border: 2px solid purple;
            padding: 10px;
            width: 300px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php
        $sid = "C112181181";
        $name = "李翊銘";
        $color = "紅色";
        $shape = "圓形";
    ?>

    <div class="box">
        SID: <?php echo $sid; ?><br>
        NAME: <?php echo $name; ?><br><br>

        color~ <?php echo $color; ?>~<br>
        name~ <?php echo $name; ?>~<br>
        shape~ <?php echo $shape; ?>~
    </div>
</body>
</html>
