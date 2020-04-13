<?php
$a = 3;
$b = 7;
echo $a + $b;

$array_month = ["１月","２月","３月","４月","５月","６月","７月","８月","９月","１０月","１１月","１２月",];
echo $array_month[7];

$hello = "Hello,";
$name = "k.ishibashi";
$world = "s World!";
echo "$hello" . "$name" . "$world";

$tech_boost = "tech";
echo $tech_boost .= " boost";


$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

echo $calendar_2018["December"];

//修正箇所
//$2018変数　を　calendar_2018　に変更
//文字１０月のダブルクォート追加
//配列の｛　｝を　[　]　に　変更
//February の定義　2月　の句読点　、　を　,　に変更
//june =　６月に　=>　を追加
//echo $calendar_2018 [december]　[]　に　ダブルクォート追加