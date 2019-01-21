<!-- single quote -->
<?php

echo 'ini adalah contoh string dengan kutip satu <br>';

// Outputs: Jaka mengatakan " Selamat datang di tutorial PHP tipe string di primasaja.com "
// tidak boleh menggunakan kutip satu didalam kutip satu contoh 'Jaka mengatakan ' Selamat datang di tutorial PHP tipe string di primasaja.com ''
echo 'Jaka mengatakan " Selamat datang di tutorial PHP tipe string di primasaja.com "<br>';


// Outputs: anda menghapus C:\*.*?
echo 'anda menghapus C:\\*.*? <br>';


// Outputs: ini tidak akan membuat \n menjadi fungsi ke barus baru
echo '\n tidak akan jadi baris baru = adalah: \n baris baru <br>';


$contohvar = 20;
// Outputs: tidak akan teroutput $contohvar menjadi 20
echo 'Variables do not $contohvar <br>';

?>



<!-- double quote -->
<?php 
	echo " contoh penggunaan \n adalah linefeed (LF or 0x0A (10) dalam ASCII) <br>";

	echo " contoh penggunaan \r adalah carriage return (CR or 0x0D (13) dalam ASCII) <br>";

	echo " contoh penggunaan \t adalah horizontal tab (HT or 0x09 (9) dalam ASCII) <br>";

	echo " contoh penggunaan \v adalah vertical tab (VT or 0x0B (11) dalam ASCII) (sejak PHP 5.2.5) <br>";

	echo " contoh penggunaan \e adalah escape (ESC or 0x1B (27) dalam ASCII) (sejak PHP 5.4.4) <br>";

	echo " contoh penggunaan \f adalah form feed (FF or 0x0C (12) dalam ASCII) (sejak PHP 5.2.5) <br>";

	echo " contoh penggunaan \\ adalah backslash <br>";

	echo " contoh penggunaan \$ adalah dollar sign <br>";
?>

<!-- HEREDOC -->
<?php
// ----------------------------------------------------------------------- cara heredoc yang benar
// benar
class pembungkus1 {

    public $var = <<<EOT

var

EOT;

}

// salah
// class pembungkus1 {

//     public $var = <<<EOT

// var

//      EOT;    // ditak boleh ada indent akan error

// }

?>

<?php 
// ----------------------------------------------------------------------- heredoc string
$var1 = <<<EOD

penggunaan heredocs untuk menampilkan string

menampilkan string yang dienter

EOD;

echo $var1;

?>


<?php 
// ----------------------------------------------------------------------- heredoc string dengan variable
class pembungkus{
    function pembungkus(){
        $this->var1 = 'isi variabel 1';
        $this->var2 = array('Bar1', 'Bar2', 'Bar3');
    }
}



$pembungkusbaru = new pembungkus();

$domain = 'www.primasaja.com';



echo <<<EOT

Anda sedang melihat tutorial di "$domain". saya menampilkan variabel $pembungkusbaru->var1.

sekarang saya menampilkan array {$pembungkusbaru->var2[1]}.

ini akan menampilkan huruf kapital 'A': \x41 <br>

EOT;
?>



<?php
// ----------------------------------------------------------------------- Contoh heredoc argument

var_dump(array(<<<EOD
primasaja.com
EOD
));

// akan tampil array(1) { [0]=> string(15) "primasaja.com " }
?>


<?php
// ----------------------------------------------------------------------- Contoh Penggunaan Heredoc untuk initialize static values
// Static variables
function fungsi1(){
static $var1 = <<<LABEL
<br> isi value fungsi1
LABEL;

return $var1;
}



// Class properties/constants

class pembungkus2{
const var1 = <<<identifierprimasaja
	<br>contoh constanta
identifierprimasaja;

public $baz = <<<identifierprimasaja
	<br> contoh property
identifierprimasaja;
}

$new_class = new pembungkus2();
echo $new_class::var1;
echo $new_class->baz;
echo fungsi1();
?>


<?php 
// ------------------------------------------------------------------- Heredoc identifier dapat ditambahkan opsi dilampirkan kutip dua
echo <<<"identifierprimasaja"
halo dunia
identifierprimasaja;
?>



<!-- Now DOC String (identifier mengijinkan kutip satu) -->

<?php
	class pembungkus3{
		public $var1;
		public $var2;

	    function __construct(){
	        $this->var1 = 'isi variabel 1';
	        $this->var2 = array('Bar1', 'Bar2', 'Bar3');
	    }

	}



	$pembungkusbaru = new pembungkus3();

	$domain = 'www.primasaja.com';



echo <<<'EOT'

Anda sedang melihat tutorial di $domain. saya menampilkan variabel $pembungkusbaru->var1.

sekarang saya menampilkan array {$pembungkusbaru->var2[1]}.

ini akan menampilkan huruf kapital 'A': \x41

EOT;

?>



<?php

//static nowdoc

class pebungkus {

    public $var1 = <<<'EOT'

var1

EOT;

}

?>



<?php
//------------------------------------------------------------------------------------------- simple sintaks
$minuman = "teh sosro";
echo "<br>apapun makanannya minumnya $minuman".PHP_EOL;

// Valid. jelas menspesifikasikan akhir dari nama variable dengan mencantumkan kurung kurawal 
echo "<br>apapun makanannya minumnya ${minuman}";

?>

<?php
	//------------------------------------------------------------------------------------------- simple sintaks array dan object
	$nama_makanan = array("nasi padang", "pecel", "ikan lele", "lainnya" => "baso");

	class orang{
		public $jaka = "Jaka Prima Maulana";
		public $unggul = "Unggul Prayuda";
		public $lainnya = "Budi";
	}

	$orang = new orang();

	echo "<br> $orang->jaka makan $nama_makanan[0] <br> ";
	echo " $orang->jaka sedang berantem sama $orang->unggul <br> ";
	echo " $orang->jaka juga nambah makan $nama_makanan[lainnya] ";
?>


<?php
	// // -------------------------------------------------------------------------------------- Indikasi negative numeric
	// // cara ini hanya jalan dari php 7.1.0 keatas 
	// $string = "string";
	// echo $string[-1]; // g
?>



<?php
	// -------------------------------------------------------------------------------------- kompleks sintaks
	// untuk menunjukkan semua error
	error_reporting(E_ALL);

	//contoh salah
	$var1 = "primasaja company";
	echo "selamat datang di { $var1} <br>";


	//ini contoh yang benar
	// harus juga memakan kutip dua bukan kutip satu
	echo "selamat datang di {$var1} <br>";


	//penggunaan object properties
	class wadah{
		public $teh = 'teh hijau';
	}

	$wadah = new wadah();

	echo "isi teh adalah {$wadah->teh}<br>"; // teh hijau
	echo "contoh pengambilan didalam class : {$wadah->teh[1]} <br>"; // e



	//penggunaan array
	$array1 = array("isi array1 index 0", "isi array1 index 1", "varindex3" => "isi array1 index 2");
	echo " tampil data array : {$array1['varindex3']} <br>"; // isi array1 index 2
	echo " tampil data isi array dari index 0 data string ke index 1 : {$array1[0][1]} <br> "; // s
	echo "tampil data array varindex3 isi array string ke 2 : ".$array1['varindex3'][2].'<br>'; // i
?>






<?php
	class bungkus4 {
	    const website = 'var2';
	    public static $var3 = 'var1';
	}



	$var2 = 'belajar PHP di www.primasaja.com';

	$var1 = '( isinya )';



	echo "Saya ingin {${bungkus4::website}} <br>"; // Saya ingin belajar PHP di www.primasaja.com

	echo "isi dari wadah var3 adalah {${bungkus4::$var3}} <br>"; // isi dari wadah var3 adalah ( isinya )

?>

<?php
// -------------------------------------------------------------------------------------- akses dan modify string berdasarkan karakter
	// mengambil string ke
	$string = 'abcdef';
	$karakterke1 = $string[0];
	echo $karakterke1 .'<br>'; // a

	// Mengambil string karakter terakhir dari string.
	$string = 'abcdef';
	$karakterakhir = $string[strlen($string)-1];
	echo $karakterakhir.'<br>'; // f

	// merubah karakter terakhir dari string
	$stringlama = 'abcdef';
	$stringlama[strlen($stringlama)-1] = 'z';
	echo $stringlama.'<br>'; // abcdez
?>



