<?php
echo "<h1> Operator Aritmatika </h1>";
//opertaor aritmatika
$angka1 = 12;
$angka2 = 14;
$angka3 = 24;
 $hasilpenjumlahan = $angka1 + $angka2;
 $hasilpengurangan = $angka1 - $angka2;
 $hasilperkalian = $angka1 * $angka2;
 $hasilpembagian = $angka1 / $angka2;
    echo "hasilpenjumlahan: " .$angka1 . "+" . $angka2 . "=". $hasilpenjumlahan . "<br>";
    echo "hasilpengurangan: " . $angka1 . "-" . $angka2 . "=". $hasilpengurangan . "<br>";
    echo "hasilperkalian: " . $angka1 . "*" . $angka2 . "=". $hasilperkalian . "<br>";
    echo "hasilpembagian: " . $angka1 . "/" . $angka2 . "=". $hasilpembagian . "<br>";
//modulus
$hasilmodulus = $angka1 % $angka2;
echo "hasil modulus: " .$angka1 . " % " . $angka2 . " = " . $hasilmodulus . "<br>";

echo "<br>";
echo "<h1> Operator Assigment </h1>";

$angka3 = $angka2; 
echo $angka3 . "<br>";

$angka3 += $angka2; 
echo $angka3 . "<br>";

$angka3 += $angka2; 
echo $angka3 ."<br>";

$angka3 -= $angka2; 
echo $angka3 . "<br>";

echo "<br>";
echo "<h1> Operator Perbandingan </h1>";

//operator perbandingan 

var_dump($angka1 == $angka2);
echo "<br>";//equal

var_dump($angka1 == $angka2);
echo "<br>";//identical

var_dump($angka1 <> $angka3);
echo "<br>";//Not equal (alternatif)

var_dump($angka1 > $angka3);
echo "<br>";

echo "<h1> Operator Increment dan Decrement </h1>" ;
echo "<br>";

echo "<h3> increment </h3>";
//increment
$angka3++;
echo "increment (angka3++):". $angka3 . "<br>";

++$angka2;
echo "pre-increment (++angka2):". $angka2 . "<br>";

echo "<h3> decrement </h3>";
//decrement
$angka3--;
echo "decrement (angka3--):". $angka3 . "<br>";

--$angka2;
echo "pre-decrement (--angka2):". $angka2 . "<br>";

echo "<h1> Operator Logika </h1>" ;

//AND
$hasil_and = ($angka1 < $angka2 && $angka2 > 10);
echo "AND (&&) : " . ($hasil_and ? "true" : "false") . "<br>"; 

//OR
$hasil_or = ($angka1 < $angka2 || $angka2 > 10);
echo "OR (||) : " . ($hasil_or ? "true" : "false") . "<br>"; 


//NOT
$hasil_not = !($angka1 < $angka2 && $angka2 > 10);
echo "NOt] (!) : " . ($hasil_not ? "true" : "false") . "<br>"; 


?>