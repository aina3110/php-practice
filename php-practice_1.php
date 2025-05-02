<?php
// Q1 変数と文字列
$name = '「斉藤」';
echo '私の名前は' . $name . 'です。';

// Q2 四則演算
echo $num = 5*4;
echo $num /2;

// Q3 日付操作
date_default_timezone_set('japan');
$today = date("Y年m月d日 H時i分s秒");
echo '現在時刻は' . $today . 'です。';

// Q4 条件分岐-1 if文
$device = 'mac';

if ($device === 'windows'){
    echo '使用OSは、windowsです。';
    }else{
    if ($device === 'mac'){
    echo '使用OSは、macです。';
    }else
    echo 'どちらでもありません。';
    }

// Q5 条件分岐-2 三項演算子
$age = 28;
if ($age < 18){
    $message =  '未成年です。'; 
}else {
    $message = '成人です。';
}
echo $message;

// Q6 配列
$prefecture = ['東京都', '埼玉県', '神奈川県', '栃木県', '千葉県', '群馬県', '茨城県'];
echo $prefecture[3] . 'と' .$prefecture[4] .'は関東地方の都道府県です。';

// Q7 連想配列-1
$capital = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
  ];
  echo ($capital['東京都']) . "\n";
  echo ($capital['神奈川県']) . "\n";
  echo ($capital['千葉県']) . "\n";
  echo ($capital['埼玉県']) . "\n";
  echo ($capital['栃木県']) . "\n";
  echo ($capital['群馬県']) . "\n";
  echo ($capital['茨城県']);

// Q8 連想配列-2
foreach ($capital as $prefecture => $city) {
  if($prefecture === '埼玉県'){
      echo $prefecture . 'の県庁所在地は、' . $city . 'です。';
  }
  
}

// Q9 連想配列-3
$capital['北海道'] = '札幌市';
$capital['沖縄県'] = '那覇市';

$kanto = ['東京都', '神奈川県', '千葉県', '埼玉県', '栃木県', '群馬県', '茨城県'];

foreach ($capital as $prefecture => $city) {
    if (in_array($prefecture, $kanto)) {
        echo $prefecture . 'の県庁所在地は、' . $city . 'です。' . "\n";
    } else {
        echo $prefecture . 'は関東地方ではありません。' . "\n";
    }
}

// Q10 関数-1
function hello($name)
{
    return $name . 'さん、こんにちは。';
}

echo hello('斉藤');
echo hello('小張');

// Q11 関数-2
function calcTaxInPrice($price)
{
    return $price . '円の商品の税込価格は' . $price*1.1 . '円です。';
}

echo calcTaxInPrice(100);

// Q12 関数とif文
function distinguishNum($num)
{
    if ($num % 2 === 1){
        return $num .'は奇数です。';
    }elseif($num % 2 === 0){
        return $num .'は偶数です。';
    }
}

echo distinguishNum(17);
echo distinguishNum(32);

// Q13 関数とswitch文
function evaluateGrade($grade){
    switch ($grade){
     case 'A':
     return '合格です。';
     break;
     
     case 'B':
     case 'C':
     return '合格ですが追加課題があります。';
     break;
     
     case 'D':
     return '不合格です。';
     break;
     
     default:
     return '判定不明です。講師に問い合わせてください。';
     break;
    }
}

echo evaluateGrade('A');
echo evaluateGrade('E');

?>