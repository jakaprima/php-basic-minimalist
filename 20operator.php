<?php
	$a = 3 * 3 % 5 // (3 * 3) % 5 = 4
	// ternary operator berbeda dengan C/C++
	$b = true ? 0 : true ? 1 : 2; // (true ? 0 : true) ? 1 : 2 = 2
	$c = 1;
	$d = 2;
	$e = $d += 3; // $e = ($d += 3) -> $e = 5, $d = 5
?>

Contoh undefined order dari hasil
<?php
	$f = 1;
	echo $f + $f++; // bisa terprint 2 atau 3

	$g = 1;
	$array[$g] = $g++; // bisa 2 atau 3 
?>

Contoh +, - dan . punya prioritas yang sama
<?php
	$x = 4;
	// baris ini bisa menghasilkan output yang tak benar
	echo "x kurang satu " . $x-1 . ", atau saya harap\n"; // output -1
	// karena ini terevaluasi seperti ini:
	echo (("x kurang satu " . $x) - 1) . ", atau saya harap\n"; // output -1
	// bisa dicegah dengan menggunakan kurung
	echo "x kurang satu " . ($x-1) . ", atau saya harap\n"; // 3
?>



Arithmetic Operators
+$a = identity/identitas = konversi $a ke int atau float sebagai yang sesuai.
-$a = Negation/penolakan = seberang dari $a.
$a + $b	Addition/penjumlahan
$a - $b	Subtraction/pengurangan
$a * $b	Multiplication/perkalian
$a / $b	Division/pembagian
$a % $b	Modulo/sisa hasil bagi
$a ** $b Exponentiation/pangkat	

operator pembagian / mengembalikan float value sampai 2 operand adalah integer (atau string yang terkonversi ke integer) dan nomor itu habis dibagi, dimana,  kasus integer value akan di kembalikan. untuk integer pembagian.

operand dari modulo terkonvert ke integer sebelum process. untuk floating point modulo liat fmod().

hasil dari modulo operator % memiliki sign hasil bagi - itu dia, hasil dari $a % $b akan memiliki definisi yang sama $a. Contoh:
<?php
	echo (5 % 3)."\n";           // prints 2
	echo (5 % -3)."\n";          // prints 2
	echo (-5 % 3)."\n";          // prints -2
	echo (-5 % -3)."\n";         // prints -2
?>


tugas / assignment operator
dasar tugas operator adalah =. kecenderungan / inclination anda mungkin menggap ini "sama dengan". tidak. ini berarti opearand kiri diatur ke nilai ekspresi di sebelah kanan ("diatur ke").

nilai ekspresi penugasan adalah value penugasan. itu dia, value dari $a = 3 adalah 3. ini mengijinkan kamu untuk melakukan trik seperti:

<?php
	$a = ($b = 4) + 5; // $a sama dengan 9 sekarang, dan $b terset ke 4
?>

sebagai tambahan penggunaan penugasan operator dasar, disana ada kombinasi operator untuk semua binary aritmatika, array union dan string operator yang mengijinkan kamu untuk menggunakan ekspresi dan set valuenya ke hasil dari ekspresi, contoh:

<?php
	$a = 3;
	$a += 5; // set menjadi 8, jika kita bisa bilang $a = $a + 5
	$b = "halo ";
	$b .= "disana"; // set $b menjadi halo disana, seperti $b = $b . "disana";
?>

catatan penugasan mengcopy original variable ke 1 yang baru (penugasan oleh value), jadi merubah satu akan tidak berefek pada yang lain. ini juga memiliki keterkaitan jika kamu membutuhkan copty sesuatu seperti array yang besar dalam perulangan yang erat.

pengecualian pada penugasan biasa dengan sifat value dalam kejadian PHP dalam objects, dimana itu di tugaskan oleh reference. object bisa jadi eksplisit tercopy via kata clone.

penugasan by Reference
Penugasan by reference juga support, menggunakan $var = &$varlain;. penugasan by reference berarti kedua variable terpoint akhir pada data yang sama, dan tidak ada yang tercopy dimanapun.

Contoh penugasan by Reference
<?php
	$a = 3;
	$b = &$a; // $b adalah reference dari $a
	print "$a"; // 3
	print "$b"; // 3

	$a = 5; // $a dirubah ke 5
	print $a; // 5
	print $b; // sejak $b adalah reference ke $a maka $b juga berisi 5
?>

operator baru mengembalikan reference otomatis, jadi hasil penugasan dari hasil reference new dalam E_DEPRECATED pesan dalam PHP 5.3 dan selanjutnya, dan pesan E_STRICT.

sebagai contoh, kode ini akan menghasilkan pesan peringatan:

<?php
	class Class1 {

	}
	/* mengikuti baris generate error pesannya:
	deprecated: penugasan mengembalikan nilai dari new by reference adalah usang / deprecated in..
	 */
	$z - &new Class1;
?>

Bitwise operator
bitwise operator mengijinkan evaluasi dan manipulasi dari spesifik bit dengan integer.
Contoh And = $a & $b; bit yang terset keduanya baik $a dan $b
contoh Or = $a | $b; bit yang terset antara $a atau $b
Contoh Xor = $a ^ $b bit yang terset dalam $a dan $b tetapi tidak keduanya terset.
Contoh Not = ~ $a  bit yang terset dalam $a tidak terset, atau sebaliknya
Contoh shift left = $a << $b langkah shift/pertukaran bit dari $a $b ke kiri (setiap step dikali 2)
contoh shift right = $a >> $b step ke kanan (setiap step maksunya "dibagi 2")

pergeseran bit alam PHP adalah aritmatika. pergeseran bit dari kedua ujung dibuang. shift kiri punya 0 shifted dalam kanan ketika tanda bit telah terputar keluar dari kiri, ini berati tanda dari opreant belum dilayani. shift kanan punya copy dari tanda bit yang bergeser dalam di kiri, berati pertanda dari operant dilayani.

gunakan kurung untuk yakin desired precedence / prioritas yang diinginkan. sebagai contoh $a & $b == true evaluasi sama dengan bitwise and; ketika ($a & b) == true evaluasi bitwise dan lalu di samakan.
jika kedua operatd untuk &, | dan ^ operator adalah string, lalu operasi akan perform dalam ASCII value dari karakter yang membuat string dan hasilnya akan menjadi string. 


Bit shifting in PHP is arithmetic. Bits shifted off either end are discarded. Left shifts have zeros shifted in on the right while the sign bit is shifted out on the left, meaning the sign of an operand is not preserved. Right shifts have copies of the sign bit shifted in on the left, meaning the sign of an operand is preserved.

Use parentheses to ensure the desired precedence. For example, $a & $b == true evaluates the equivalency then the bitwise and; while ($a & $b) == true evaluates the bitwise and then the equivalency.

If both operands for the &, | and ^ operators are strings, then the operation will be performed on the ASCII values of the characters that make up the strings and the result will be a string. In all other cases, both operands will be converted to integers and the result will be an integer.

If the operand for the ~ operator is a string, the operation will be performed on the ASCII values of the characters that make up the string and the result will be a string, otherwise the operand and the result will be treated as integers.

Both operands and the result for the << and >> operators are always treated as integers.

PHP's error_reporting ini setting uses bitwise values,
providing a real-world demonstration of turning
bits off. To show all errors, except for notices,
the php.ini file instructions say to use:
E_ALL & ~E_NOTICE
      
This works by starting with E_ALL:
00000000000000000111011111111111
Then taking the value of E_NOTICE...
00000000000000000000000000001000
... and inverting it via ~:
11111111111111111111111111110111
Finally, it uses AND (&) to find the bits turned
on in both values:
00000000000000000111011111110111
      
Another way to accomplish that is using XOR (^)
to find bits that are on in only one value or the other:
E_ALL ^ E_NOTICE
      
error_reporting can also be used to demonstrate turning bits on.
The way to show just errors and recoverable errors is:
E_ERROR | E_RECOVERABLE_ERROR
      
This process combines E_ERROR
00000000000000000000000000000001
and
00000000000000000001000000000000
using the OR (|) operator
to get the bits turned on in either value:
00000000000000000001000000000001
      
Example #1 Bitwise AND, OR and XOR operations on integers

<?php
/*
 * Ignore the top section,
 * it is just formatting to make output clearer.
 */

$format = '(%1$2d = %1$04b) = (%2$2d = %2$04b)'
        . ' %3$s (%4$2d = %4$04b)' . "\n";

echo <<<EOH
 ---------     ---------  -- ---------
 result        value      op test
 ---------     ---------  -- ---------
EOH;


/*
 * Here are the examples.
 */

$values = array(0, 1, 2, 4, 8);
$test = 1 + 4;

echo "\n Bitwise AND \n";
foreach ($values as $value) {
    $result = $value & $test;
    printf($format, $result, $value, '&', $test);
}

echo "\n Bitwise Inclusive OR \n";
foreach ($values as $value) {
    $result = $value | $test;
    printf($format, $result, $value, '|', $test);
}

echo "\n Bitwise Exclusive OR (XOR) \n";
foreach ($values as $value) {
    $result = $value ^ $test;
    printf($format, $result, $value, '^', $test);
}
?>
The above example will output:

 ---------     ---------  -- ---------
 result        value      op test
 ---------     ---------  -- ---------
 Bitwise AND
( 0 = 0000) = ( 0 = 0000) & ( 5 = 0101)
( 1 = 0001) = ( 1 = 0001) & ( 5 = 0101)
( 0 = 0000) = ( 2 = 0010) & ( 5 = 0101)
( 4 = 0100) = ( 4 = 0100) & ( 5 = 0101)
( 0 = 0000) = ( 8 = 1000) & ( 5 = 0101)

 Bitwise Inclusive OR
( 5 = 0101) = ( 0 = 0000) | ( 5 = 0101)
( 5 = 0101) = ( 1 = 0001) | ( 5 = 0101)
( 7 = 0111) = ( 2 = 0010) | ( 5 = 0101)
( 5 = 0101) = ( 4 = 0100) | ( 5 = 0101)
(13 = 1101) = ( 8 = 1000) | ( 5 = 0101)

 Bitwise Exclusive OR (XOR)
( 5 = 0101) = ( 0 = 0000) ^ ( 5 = 0101)
( 4 = 0100) = ( 1 = 0001) ^ ( 5 = 0101)
( 7 = 0111) = ( 2 = 0010) ^ ( 5 = 0101)
( 1 = 0001) = ( 4 = 0100) ^ ( 5 = 0101)
(13 = 1101) = ( 8 = 1000) ^ ( 5 = 0101)
Example #2 Bitwise XOR operations on strings

<?php
echo 12 ^ 9; // Outputs '5'

echo "12" ^ "9"; // Outputs the Backspace character (ascii 8)
                 // ('1' (ascii 49)) ^ ('9' (ascii 57)) = #8

echo "hallo" ^ "hello"; // Outputs the ascii values #0 #4 #0 #0 #0
                        // 'a' ^ 'e' = #4

echo 2 ^ "3"; // Outputs 1
              // 2 ^ ((int)"3") == 1

echo "2" ^ 3; // Outputs 1
              // ((int)"2") ^ 3 == 1
?>
Example #3 Bit shifting on integers

<?php
/*
 * Here are the examples.
 */

echo "\n--- BIT SHIFT RIGHT ON POSITIVE INTEGERS ---\n";

$val = 4;
$places = 1;
$res = $val >> $places;
p($res, $val, '>>', $places, 'copy of sign bit shifted into left side');

$val = 4;
$places = 2;
$res = $val >> $places;
p($res, $val, '>>', $places);

$val = 4;
$places = 3;
$res = $val >> $places;
p($res, $val, '>>', $places, 'bits shift out right side');

$val = 4;
$places = 4;
$res = $val >> $places;
p($res, $val, '>>', $places, 'same result as above; can not shift beyond 0');


echo "\n--- BIT SHIFT RIGHT ON NEGATIVE INTEGERS ---\n";

$val = -4;
$places = 1;
$res = $val >> $places;
p($res, $val, '>>', $places, 'copy of sign bit shifted into left side');

$val = -4;
$places = 2;
$res = $val >> $places;
p($res, $val, '>>', $places, 'bits shift out right side');

$val = -4;
$places = 3;
$res = $val >> $places;
p($res, $val, '>>', $places, 'same result as above; can not shift beyond -1');


echo "\n--- BIT SHIFT LEFT ON POSITIVE INTEGERS ---\n";

$val = 4;
$places = 1;
$res = $val << $places;
p($res, $val, '<<', $places, 'zeros fill in right side');

$val = 4;
$places = (PHP_INT_SIZE * 8) - 4;
$res = $val << $places;
p($res, $val, '<<', $places);

$val = 4;
$places = (PHP_INT_SIZE * 8) - 3;
$res = $val << $places;
p($res, $val, '<<', $places, 'sign bits get shifted out');

$val = 4;
$places = (PHP_INT_SIZE * 8) - 2;
$res = $val << $places;
p($res, $val, '<<', $places, 'bits shift out left side');


echo "\n--- BIT SHIFT LEFT ON NEGATIVE INTEGERS ---\n";

$val = -4;
$places = 1;
$res = $val << $places;
p($res, $val, '<<', $places, 'zeros fill in right side');

$val = -4;
$places = (PHP_INT_SIZE * 8) - 3;
$res = $val << $places;
p($res, $val, '<<', $places);

$val = -4;
$places = (PHP_INT_SIZE * 8) - 2;
$res = $val << $places;
p($res, $val, '<<', $places, 'bits shift out left side, including sign bit');


/*
 * Ignore this bottom section,
 * it is just formatting to make output clearer.
 */

function p($res, $val, $op, $places, $note = '') {
    $format = '%0' . (PHP_INT_SIZE * 8) . "b\n";

    printf("Expression: %d = %d %s %d\n", $res, $val, $op, $places);

    echo " Decimal:\n";
    printf("  val=%d\n", $val);
    printf("  res=%d\n", $res);

    echo " Binary:\n";
    printf('  val=' . $format, $val);
    printf('  res=' . $format, $res);

    if ($note) {
        echo " NOTE: $note\n";
    }

    echo "\n";
}
?>
Output of the above example on 32 bit machines:


--- BIT SHIFT RIGHT ON POSITIVE INTEGERS ---
Expression: 2 = 4 >> 1
 Decimal:
  val=4
  res=2
 Binary:
  val=00000000000000000000000000000100
  res=00000000000000000000000000000010
 NOTE: copy of sign bit shifted into left side

Expression: 1 = 4 >> 2
 Decimal:
  val=4
  res=1
 Binary:
  val=00000000000000000000000000000100
  res=00000000000000000000000000000001

Expression: 0 = 4 >> 3
 Decimal:
  val=4
  res=0
 Binary:
  val=00000000000000000000000000000100
  res=00000000000000000000000000000000
 NOTE: bits shift out right side

Expression: 0 = 4 >> 4
 Decimal:
  val=4
  res=0
 Binary:
  val=00000000000000000000000000000100
  res=00000000000000000000000000000000
 NOTE: same result as above; can not shift beyond 0


--- BIT SHIFT RIGHT ON NEGATIVE INTEGERS ---
Expression: -2 = -4 >> 1
 Decimal:
  val=-4
  res=-2
 Binary:
  val=11111111111111111111111111111100
  res=11111111111111111111111111111110
 NOTE: copy of sign bit shifted into left side

Expression: -1 = -4 >> 2
 Decimal:
  val=-4
  res=-1
 Binary:
  val=11111111111111111111111111111100
  res=11111111111111111111111111111111
 NOTE: bits shift out right side

Expression: -1 = -4 >> 3
 Decimal:
  val=-4
  res=-1
 Binary:
  val=11111111111111111111111111111100
  res=11111111111111111111111111111111
 NOTE: same result as above; can not shift beyond -1


--- BIT SHIFT LEFT ON POSITIVE INTEGERS ---
Expression: 8 = 4 << 1
 Decimal:
  val=4
  res=8
 Binary:
  val=00000000000000000000000000000100
  res=00000000000000000000000000001000
 NOTE: zeros fill in right side

Expression: 1073741824 = 4 << 28
 Decimal:
  val=4
  res=1073741824
 Binary:
  val=00000000000000000000000000000100
  res=01000000000000000000000000000000

Expression: -2147483648 = 4 << 29
 Decimal:
  val=4
  res=-2147483648
 Binary:
  val=00000000000000000000000000000100
  res=10000000000000000000000000000000
 NOTE: sign bits get shifted out

Expression: 0 = 4 << 30
 Decimal:
  val=4
  res=0
 Binary:
  val=00000000000000000000000000000100
  res=00000000000000000000000000000000
 NOTE: bits shift out left side


--- BIT SHIFT LEFT ON NEGATIVE INTEGERS ---
Expression: -8 = -4 << 1
 Decimal:
  val=-4
  res=-8
 Binary:
  val=11111111111111111111111111111100
  res=11111111111111111111111111111000
 NOTE: zeros fill in right side

Expression: -2147483648 = -4 << 29
 Decimal:
  val=-4
  res=-2147483648
 Binary:
  val=11111111111111111111111111111100
  res=10000000000000000000000000000000

Expression: 0 = -4 << 30
 Decimal:
  val=-4
  res=0
 Binary:
  val=11111111111111111111111111111100
  res=00000000000000000000000000000000
 NOTE: bits shift out left side, including sign bit
Output of the above example on 64 bit machines:


--- BIT SHIFT RIGHT ON POSITIVE INTEGERS ---
Expression: 2 = 4 >> 1
 Decimal:
  val=4
  res=2
 Binary:
  val=0000000000000000000000000000000000000000000000000000000000000100
  res=0000000000000000000000000000000000000000000000000000000000000010
 NOTE: copy of sign bit shifted into left side

Expression: 1 = 4 >> 2
 Decimal:
  val=4
  res=1
 Binary:
  val=0000000000000000000000000000000000000000000000000000000000000100
  res=0000000000000000000000000000000000000000000000000000000000000001

Expression: 0 = 4 >> 3
 Decimal:
  val=4
  res=0
 Binary:
  val=0000000000000000000000000000000000000000000000000000000000000100
  res=0000000000000000000000000000000000000000000000000000000000000000
 NOTE: bits shift out right side

Expression: 0 = 4 >> 4
 Decimal:
  val=4
  res=0
 Binary:
  val=0000000000000000000000000000000000000000000000000000000000000100
  res=0000000000000000000000000000000000000000000000000000000000000000
 NOTE: same result as above; can not shift beyond 0


--- BIT SHIFT RIGHT ON NEGATIVE INTEGERS ---
Expression: -2 = -4 >> 1
 Decimal:
  val=-4
  res=-2
 Binary:
  val=1111111111111111111111111111111111111111111111111111111111111100
  res=1111111111111111111111111111111111111111111111111111111111111110
 NOTE: copy of sign bit shifted into left side

Expression: -1 = -4 >> 2
 Decimal:
  val=-4
  res=-1
 Binary:
  val=1111111111111111111111111111111111111111111111111111111111111100
  res=1111111111111111111111111111111111111111111111111111111111111111
 NOTE: bits shift out right side

Expression: -1 = -4 >> 3
 Decimal:
  val=-4
  res=-1
 Binary:
  val=1111111111111111111111111111111111111111111111111111111111111100
  res=1111111111111111111111111111111111111111111111111111111111111111
 NOTE: same result as above; can not shift beyond -1


--- BIT SHIFT LEFT ON POSITIVE INTEGERS ---
Expression: 8 = 4 << 1
 Decimal:
  val=4
  res=8
 Binary:
  val=0000000000000000000000000000000000000000000000000000000000000100
  res=0000000000000000000000000000000000000000000000000000000000001000
 NOTE: zeros fill in right side

Expression: 4611686018427387904 = 4 << 60
 Decimal:
  val=4
  res=4611686018427387904
 Binary:
  val=0000000000000000000000000000000000000000000000000000000000000100
  res=0100000000000000000000000000000000000000000000000000000000000000

Expression: -9223372036854775808 = 4 << 61
 Decimal:
  val=4
  res=-9223372036854775808
 Binary:
  val=0000000000000000000000000000000000000000000000000000000000000100
  res=1000000000000000000000000000000000000000000000000000000000000000
 NOTE: sign bits get shifted out

Expression: 0 = 4 << 62
 Decimal:
  val=4
  res=0
 Binary:
  val=0000000000000000000000000000000000000000000000000000000000000100
  res=0000000000000000000000000000000000000000000000000000000000000000
 NOTE: bits shift out left side


--- BIT SHIFT LEFT ON NEGATIVE INTEGERS ---
Expression: -8 = -4 << 1
 Decimal:
  val=-4
  res=-8
 Binary:
  val=1111111111111111111111111111111111111111111111111111111111111100
  res=1111111111111111111111111111111111111111111111111111111111111000
 NOTE: zeros fill in right side

Expression: -9223372036854775808 = -4 << 61
 Decimal:
  val=-4
  res=-9223372036854775808
 Binary:
  val=1111111111111111111111111111111111111111111111111111111111111100
  res=1000000000000000000000000000000000000000000000000000000000000000

Expression: 0 = -4 << 62
 Decimal:
  val=-4
  res=0
 Binary:
  val=1111111111111111111111111111111111111111111111111111111111111100
  res=0000000000000000000000000000000000000000000000000000000000000000
 NOTE: bits shift out left side, including sign bit
Warning
Prior to PHP 7.0, shifting integers by values greater than or equal to the system long integer width, or by negative numbers, results in undefined behavior. In other words, if you're using PHP 5.x, don't shift more than 31 bits on a 32-bit system, and don't shift more than 63 bits on 64-bit system.

Use functions from the gmp extension for bitwise manipulation on numbers beyond PHP_INT_MAX.






































