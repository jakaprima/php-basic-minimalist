Type Juggling
PHP tidak membutuhkan pendefinisian tipe secara eksplisit (jelas) dalam pendeklarasian variable, tipe variable ditentukan (determinated) oleh konteks dimana variable itu digunakan. jadi misalkan $a berisi value string, maka tipe dari variable tersebut adalah string. jika isi variablenya itu integer maka variable tersebut tersebut akan bertipe integer.

berikut contoh PHP dimana akan otomatis merubah tipe variable tersebut dengan operator perkalian '*'. jika salah satu operand itu bertipe float (desimal), maka kedua operand tersebut terevaluasi sebagai floats, dan hasilnya akan menjadi float. jika tidak, operand akan di terjemahkan sebagai integer, dan hasilnya juga akan menjadi integer.

catatan itu tidak merubah tipe dari operand itu sendiri, yang berubah hanya bagaimana operand terevaluasi dan tipe dari ekspresi itu sendiri.


<?php
	$var1 = "2";  // $var1 adalah string (ASCII 49) // 2
	$var1 *= 2;   // $var1 adalah integer (4) // 4
	$var1 = $var1 * 1.3;  // $var1 is now a float (4.6)
	$var1 = 5 * "10 kambing";  // $var1 is integer (50) // 50
	$var1 = 5 * "10 sapi";     // $var1 is integer (50) // 50
?>

Untuk mencegah variable di evaluasi tipe tertentu, selanjutnya kita akan membahas tipe casting (penuangan). untuk merubah tipe variable gunakan settype() build in php function.

 Catatan:
 perubahan sifat otomatis ke array masih undefined

karena php support indexing menjadi string via offsets menggunakan sintak yang sama sebagai array indexing

<?php
	$a    = 'mobil'; // $a adalah string
	$a[0] = 'm';   // $a masih string
	echo $a;       // mobil
?>



Tipe Casting
tipe casting dalam PHP bekerja seperti didalam C: nama dari tipe yang diinginkan ditulis dalam kurung sebelum variable dimana akan di cast.

<?php
	$var1 = 10; // $var1 adalah integer // 10
	$var2 = (boolean) $var1; // $var2 adalah boolean // 1
	var_dump($var2); // bool (true) // 1
?>

cast yang diijinkan adalah:
(int), (integer) = cast ke integer
(bool), (boolean) = cast ke boolean
(float), (double), (real) = cast ke float
(string) = cast ke string
(array) = cast ke array
(object) = cast ke object
(unset) = cast ke NULL // deprecated dari PHP 7.2.0
(binary) = casting dan b prefix selanjutnya support ditambah dalam PHP 5.2.1. (catatan binary cast adalah sama dengan string, tetapi itu tidak bisa diandalkan)


Catatan tab dan spasi diijinkan dalam kurung, Contoh:
<?php
	$var1 = (int) $var0;
	$var1 = ( int ) $var0;
?>

Casting string dan variable ke binary string:
<?php
	$binary = (binary) $string;
	$binary = b"binary string";
?>
Catatan:
daripada casting variable ke string, juga possible menyertakan / enclose variable dalam petik dua

<?php
	$var1 = 10;            // $var1 adalah integer
	$str = "$var1";        // $str adalah string
	$fst = (string) $var1; // $fst juga string

	// cek apakah isi dan tipenya sama gunakan if dengan strict
	if ($fst === $str) {
	    echo "ya sama tipenya juga sama yaitu string";
	}
?>
