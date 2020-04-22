<?php
/*strip_tags
文字列からHTMLタグを取り除く。
この関数は、指定した文字列 (str) から全ての NULL バイトと HTML および PHP タグを取り除く
この関数は、fgetss() 関数と同じタグ除去アルゴリズムを使用する*/


$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

// <p> と <a> が表示？
echo strip_tags($text, '<p><a>');



/*array_push
一つ以上の要素を配列の最後に追加したい場合　array_push　関数を使う
array_push　関数は渡された変数を配列の最後に追加する。
*/
$fruits = ['apple', 'orange', 'melon'];
 
//array_pushを使用して要素の追加
array_push($fruits, 'banana', 'pineapple');

print_r ($fruits)."\n";
//配列$fruitsに対して　array_pushで文字列　banana pineapple　が追加




/*array_merge
配列の要素の最後に一つまたは複数の配列の結合するとき　array_merge　を使用
*/
$hairetu01 = [1,2,3,4,5];
$hairetu02 = [6,7,8,9,10];

$result = array_merge($hairetu01,$hairetu02);

echo'<pre>';
print_r($result);
echo'</pre>'."\n";
//配列1　と　配列2　が結合されて出力



/*
time, mktime
〜UNIXタイムスタンプ〜
UNIXタイムスタンプとは、コンピューターのシステム時刻の一種で、
協定世界時（UTC）での1970年1月1日（午前0時0分0秒）からの経過時間を指します。

例「６月11日12時2分」のUNIXタイムスタンプは「1528686124」と表示されます。
*/

echo "現在のUNIXタイムスタンプ:".time()."\n";

$week = time() + (3 * 24 * 60 * 60);
echo "3日後のUNIXタイムスタンプ:".$week;

/*
このようにtime関数を使用すれば、現在の日時や指定した日時のUnixタイムスタンプを取得できます。
また、time関数で取得した値はint型であるため、以下のように日時を比較するときに便利
サンプルプログラム2
*/

//現在のタイムススタンプの習得
$time1 = time();

//３日後のタイムスタンプを取得
$time2 = time() + (3 * 24 * 60 * 60);

if($time1 < $time2){
    echo '$time2が大きい値';
}


/*
mktime　関数
time関数と同じく、UNIXタイムスタンプを取得する関数としてmktime関数があります。
time関数との違いとしては、time関数は現在時刻のUNIXタイムスタンプを取得することができるのに対し、
mktime関数は指定した日時のUNIXタイムスタンプを取得することができるという点
*/

//書き方　　int mktime( [ 時 [, 分 [, 秒 [, 月 [, 日 [, 年 [, int is_dst ]]]]]]] )
/*
引数：
引数には年・月・日・時・分・秒などを指定することができます。
引数を全て省略した場合は現在のタイムスタンプを取得します。

返り値：
int型でUnixタイムスタンプの値を返します。
*/

//指定した日時のタイムスタンプを取得
$timestamp = mktime(0,0,0,8,1,2017);
echo $timestamp;


/*
date　関数
date関数は指定された日時を任意の形式でフォーマットし、日付文字列を返す関数
string date ( string $format [, int $timestamp = time() ] )

第一引数にフォーマット文字列を指定します。
第二引数を省略した場合は、現在日時が第一引数で指定した形式でフォーマットされます。

第二引数にUNIXタイムスタンプを指定した場合は、そのUNIXタイムスタンプがフォーマットされます。
UNIXタイムスタンプとは、1970年1月1日からの秒数です。

date(フォーマット, タイムスタンプ)
date関数は引数を1つ（or2つ）持てる
第1引数：フォーマット（string）
第2引数：タイムスタンプ（int）
引数1つの時：「現在の時刻」を「指定したフォーマット」で出力
引数2つの時：「第2引数のタイムスタンプ」を「指定したフォーマット」で出力
戻り値はstring

例
*/

date_default_timezone_set('Asia/tokyo');

echo date("Y/m/d H:i:s") . "\n"; //「2015/03/10 06:00:00」
echo date("Y/m/01") . "\n"; //「2015/03/01」
echo date("Y/m/t") . "\n"; //「2015/03/31」

$w = date("w");
$week_name = array("日", "月", "火", "水", "木", "金", "土");

echo date("Y/m/d") . "($week_name[$w])\n"; //「2015/03/10(火)」

/*
date_default_timezone_set('Asia/Tokyo');：まずタイムゾーンの設定をすること。
Y：年（4桁表記）
y：年（2桁表記）
m：月（2桁表記）
n：月（先頭にゼロつけない）
d：日（2桁表記）
H：時間（24時間単位）
h：時間（12時間単位）
i：分
s：秒
t：指定した月の日数
w：曜日番号（0[日曜]から6[土曜]の値）
.：文字列連結
\n：改行
*/

?>