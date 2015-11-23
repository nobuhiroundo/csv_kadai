<?php
// $str = <<<EOD
// 社員名,売上
// Kashiwagi,1000
// Hidaka,500
// Ohira,300
// EOD;
// file_put_contents('sample.csv',$str);

// // ファイルポインタをオープン
$fileName = "sample.csv";
// csvファイルを配列へ;
// ファイルポインタを設定
$fp = fopen($fileName,"r");//ファイルポインタ
$total = 0;//合計
$syain = 0;//社員数
$ave = 0 ;//平均
$flg = true;
$gyo = sizeof(file("sample.csv"));
$retu = sizeof(fgetcsv($fp,1000,","));
$h=0;
while ($array = fgetcsv($fp,1000,",")){
  for($i=0;$i<$retu;$i++)
  {
    $newarray[$h][$i] = $array[$i];
  }
$h++;
}

  for($i=0;$i<count($newarray);$i++){
      $total = $total+$newarray[$i][1];
    }
$shain = $gyo-1;
$ave = $total / $shain; //average
echo "社員数は".$shain."<br>";
echo "売上合計".$total."<br>";
echo "平均売上".$ave."<br>";



?>
