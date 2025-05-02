<?php
// Q1 tic-tac問題
foreach (range(1, 100) as $num){
  if($num % 4 === 0){
      echo 'tic' . "\n";
  }elseif($num % 5 === 0){
      echo 'tac' . "\n";
  }elseif($num % 4 === 0 && $num % 5 === 0){
      echo 'tic-tac' . "\n";
  }else
      echo $num . "\n";
  }

// Q2 多次元連想配列
//問題1
echo 'Bさんの電話番号は' . $personalInfos[1]['tel'] . 'です。';

//問題2
foreach($personalInfos as $index => $person){
  $number = $index + 1;
  echo $number .'番目の'. $person['name'] .'さんのメールアドレスは' . $person['mail'] .'で、電話番号は' . $person['tel'] .'です。' . "\n";
}

//問題3
$ageList = [25, 30, 18];
foreach($personalInfos as $index => &$person){
    $person['age'] = $ageList[$index];
}
var_dump($personalInfos);

// Q3 オブジェクト-1
$saito = new Student(170,'斉藤',);
echo '学籍番号' . $saito->studentId .'番の生徒は' .$saito->studentName .'です。';

// Q4 オブジェクト-2
echo $yamada->studentName .'は'. $yamada->attend('PHP') .'学籍番号は' . $yamada->studentId .'です。';

// Q5 定義済みクラス
//問題1
$date = new DateTime();
$date->modify('+1month');
echo $date->format('Y-m-d');

//問題2
$today = new DateTime();
$date1 = new DateTime('1992-04-25');
$diff = $today->diff($date1);
echo 'あの日から' . $diff->days .'日経過しました。';
?>