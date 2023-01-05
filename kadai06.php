<?php

// 問題1.　引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function sum($max) {
    $result = 0;
    $result = $max * 2;
    return $result;
}
echo sum(2) + 10 . "\n";

    
//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
 function plus($a, $b) {
     $sum = $a + $b;
     return $sum;
 }
echo plus(2, 4) . "\n";



//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
function hairetsu($arrays){
  $arrays = array(1, 3, 5, 7, 9);
  foreach($arrays as $array){
    return $array;
  }
}
 
function kakeru($arr){
  $result = 1;
  foreach ($arr as $a){
    //$result *= $a;
    $result = $result * $a;
    // $result = 1 * 1;
    // $result = 1 * 3;
    // $result = 3 * 5;
    // $result = 15 * 7;
    // $result = 105 * 9;
  }
  return $result;
}
echo kakeru(array(1,3,5,7,9));
echo "\n";


//4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
    // もしmax_number よりもaが大きかったらmax_number をa を同じ値(代入)にする
    if($max_number < $a ){
      $max_number = $a;
    }
  }

  return $max_number;
}
echo max_array(array(1,20,3,4));

//5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください

//strip_tags　　　　文字列に含まれるHTMLタグを全て1つの空白に置き換える
//array_push　　　　作成した配列に要素を追加できるメゾット
//array_merge　　　 前の配列の後ろに配列を追加することにより、一つまたは複数の配列の要素を返す
//time, mktime      1970年1月1日00:00:00 GMT から指定された時刻までの通算秒を表す数値
//date　　　　　　  現在時刻を文字列として取得する