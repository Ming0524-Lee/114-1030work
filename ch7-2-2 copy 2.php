<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-1-5.php</title>
<style>
body {
    border: 2px solid purple;
    padding: 10px;
    width: 400px;
    font-family: "微軟正黑體", sans-serif;
}
</style>
</head>
<body>
<?php
// 學生資料
$sid = "C112181181";
$name = "李翊銘";

// 建立星期陣列
$week = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");

// 顯示基本資訊
echo "<b>SID:$sid</b><br/>";
echo "<b>NAME:$name</b><br/><br/>";

// 顯示星期
for ($i = 0; $i < count($week); $i++) {
    echo ($i + 1) . " : " . $week[$i] . " ";
}
?>
</body>
</html>
