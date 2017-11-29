<?php

function urlyeCevir($cumle) {

  // 1 - Boşlukları - 'e çevir
  // 2 - Türkçe karakterleri ingilizceye çevir
  // 3 - Eğer içeride ünlemleri, virgülleri, hashtaglari temizle
  // 4 - Harfleri küçült

  $cumle = str_replace(' ', '-', $cumle);
  $cumle = str_replace(['!', ',', '#'], '', $cumle);
  $cumle = strtolower($cumle);

  $tr = ['ı', 'ü', 'ş'];
  $en = ['i', 'u', 's'];

  $cumle = str_replace($tr, $en, $cumle);


  return $cumle;
}

// function hashtagVarMi($soz) {
//
//   $kelimeler = explode(' ', $soz);
//
//   for($i = 0; $i < count($kelimeler); $i++) {
//     // echo $kelimeler[$i] . '<br>';
//
//     if ($kelimeler[$i][0] == '#') {
//       echo 'hashtag var!';
//     }
//
//   }
//
// }


$soz = 'Yurtta Barış, #Dünyada Barış!';

// echo urlyeCevir($soz);
hashtagVarMi($soz);

// $soz2 = 'yurtta-baris-dunyada-baris';



// echo '<h1>Başlık 1</h1>';
// echo '<h2>Başlık 2</h2>';
// echo '<h3>Başlık 3</h3>';
// echo '<h4>Başlık 4</h4>';
// echo '<h5>Başlık 5</h5>';
// echo '<h6>Başlık 6</h6>';

// for ($i = 6; $i > 0; $i += 1) {
//   echo '<h' . $i .  '>Başlık ' . $i . '</h' . $i . '>';
// }

// $kitaplar = [
//   'Rowling' => 'Harry Potter',
//   'Tolkien' => 'Yüzüklerin Efendisi',
//   'Martin' => 'Game Of Thrones'
// ];
//
// // echo $kitaplar[1];
//
// foreach($kitaplar as $yazar => $kitap) {
//   echo $yazar . ': ' . $kitap . '<br>';
// }

// $i = 0;
// while ($i < 7) {
//   echo 'Sağlandı ';
//   // $i = $i + 1;
//   $i += 2;
// }

// $a = 'araba';
// $b = 2;
//
// if ($a == 'araba') {
//   echo 'selam';
// }
//
// if ($a == 'arab') {
//   echo 'selam tekrar';
// } else {
//   echo "selam tekrar else'li";
// }

// $kitaplar = array('Harry Potter', 'Yüzüklerin Efendisi', 'Game Of Thrones');

// $kitaplar = [
//   'Rowling' => 'Harry Potter',
//   'Tolkien' => ['Yüzüklerin Efendisi', 'Hobbit', 'Silmarillion'],
//   'Martin' => 'Game Of Thrones'
// ];

// print_r($kitaplar); // Array'deki değerleri listeler
// var_dump($kitaplar); // Array'deki değerleri detaylı listeler
// echo $kitaplar['Tolkien'][0];


// $soz = 'Yurtta barış dünyada barış!';
//
// $kelimeler = explode(' ', $soz);
// echo $kelimeler[0];

// echo '<a href="">'    . $kelimeler[2] .     '</a>';

// echo strlen($soz); // Harf sayar string length
// echo $kelimeler[0];
// echo mb_substr('Gürkan', 0, 4); // mb_string UTF-8'i de dikkate alır
// echo '<br>';
// echo substr('Erdem', 0, 4);


// echo str_replace('dünyada', 'marsta', $soz);

// $tr = ['ı', 'ş', 'ü'];
// $en = ['i', 's', 'u'];
//
// echo str_replace($tr, $en, $soz);

// echo '<a href="">Yurtta</a>';

// echo $soz . '<br>';
//
// $kelimeler = explode(' ', $soz); // Array'dekileri Parçalar
//
// print_r($kelimeler);
//
// echo '<br>';
//
// $soz2 = implode('-', $kelimeler); // Array'dekileri birleştirir
//
// $soz2 = mb_strtolower($soz2); // Her şeyi küçültür



// ßecho $soz2;

// echo 'hello paü';

// $rakam = 5; // int
// $sayfa = '5'; // string

// echo 5 * 4;

// $isim = 'Gürkan';

// echo 'Selam ' . $isim; // Nokta stringleri birleştirir

// if (isset($rakam)) { // Değişken tanımlı diye kontrol eder
//   echo 'evet';
// }

// unset($rakam); // değişkeni tanımsız yapar (siler)

// header("Location: $sayfa"); // Yönlendirme için




?>
