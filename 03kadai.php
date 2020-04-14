<?php
//　課題1
$name = "k.ishibashi";

if ($name == "k.ishibashi") {
    echo "私は　k.ishibashi　です。";
}else{
    echo "あなたの名前ではありません。";
}

{
    echo "\n";
}

//　課題2
$total = 0; {
echo $total;
echo "\n";
}
for($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

{
    echo "\n";
    
}

// 課題3

$fruits = array("apple", "banana", "lemon", "strawberry", "orange");

foreach($fruits as $fruits) {
    echo $fruits;
    echo "\n";
}

//　課題4 応用


$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){

  if($i % 5 == 0){
      $start += $i;
    echo $i;
    echo "\n";
  }
}

// for($i = $start; $i < $end; $i++)　ループ条件を　＜＝　に変更
/*if文　$start += $i;
　　    echo $i;
        echo "\n";
   を追加*/