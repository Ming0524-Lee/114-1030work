<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-1-3.php</title>
</head>
<body>
<?php
// 學生資料
$sid = "C112181181";
$name = "李翊銘";

// 指定陣列元素
$scores = array(22, 16, 30, 24);
$total = 0;

// 顯示 SID 與 NAME
echo "<b>SID: $sid</b><br/>";
echo "<b>NAME: $name</b><br/><br/>";

// 顯示每個分數並計算總和
foreach ($scores as $element) {
    echo "$element | ";
    $total += $element;
}

// 顯示總分
echo "<br/>Total: $total<br/><br/>";

// 使用 print_r 顯示陣列內容
print_r($scores);
?>
</body>
</html>
