<?php
	//  --------------------------------------------------- simple array
	$array = array(
		"key1" => "1",
		"key2" => "2",
		"key3" => "3"
	 );


	//dari versi PHP 5.4 bisa hanya dengan menggunakan []
	$arraybaru = [
	 "var4" => "4",
	 "var5" => "5"
	];

	echo $array["key1"]; // 1
	echo $arraybaru["key5"]; // 5
?>
<br>

<?php
	//  --------------------------------------------------- Contoh Array tipe Casting dan overwrite / penimpaan
	$array = array(
		//keynya adalah 1 dalam type integer
	    1 => "a",
	    //keynya adalah "1" dalam type string
	    "1" => "b",
	    //keynya adalah 1.5 dalam type float dan akan dibulatkan menjadi 1
	    1.5 => "c",
	    //keynya dalah type boolean dan akan bernilai 1 jika true
	    true => "d",
	);

	//maka hasil array hanya terdapat 1 index
	//array(1) { [1]=> string(1) "d" }
	//karena key yang sama akan ditimpa dan diambil nilai yang terakhir
	echo '<pre>';
	var_dump($array);
	echo '</pre>';
?>
<br>

<?php
	//  --------------------------------------------------- contoh array gabungan kunci integer dan string
	$array = array(
	    "key1" => "nilai key 1",
	    "key2" => "nilai key 2",
	    200   => -1200,
	    -200  => 1200,
	);

	echo '<pre>';
	var_dump($array);
	echo '</pre>';
?>

<br>

<?php
	//  --------------------------------------------------- jika key tidak dispesifikasikan maka akan menggunakan increment integer
	$array = array("nilai key 0", "nilai key 1", "nilai key 2", "nilai key 3");

	echo '<pre>';

	var_dump($array);

	echo '</pre>';

	/*
	output : 

	array(4) {
	  [0]=>
	  string(11) "nilai key 0"
	  [1]=>
	  string(11) "nilai key 1"
	  [2]=>
	  string(11) "nilai key 2"
	  [3]=>
	  string(11) "nilai key 3"
	}
	*/
?>

<br>

<?php
	$array = array(
		"p",
		"r",
		"i",
		8 => "m",
		"a",
		"s",
		"a",
		"j",
		"a",
	);

	echo "<pre>";
	var_dump($array);
	echo "</pre>";

	/*
		output :
		array(9) {
		  [0]=>
		  string(1) "p"
		  [1]=>
		  string(1) "r"
		  [2]=>
		  string(1) "i"
		  [8]=>
		  string(1) "m"
		  [9]=>
		  string(1) "a"
		  [10]=>
		  string(1) "s"
		  [11]=>
		  string(1) "a"
		  [12]=>
		  string(1) "j"
		  [13]=>
		  string(1) "a"
		}
	*/
?>

<br>


<?php
	// akses array
	$array = array(
	    "key1" => "test1",
	    42    => 24,
	    "multi" => array(
	         "dimensional" => array(
	             "array" => "test2"
	         )
	    )
	);

	echo "<pre>";
	var_dump($array["key1"]);
	var_dump($array[42]);
	var_dump($array["multi"]["dimensional"]["array"]);
	echo "</pre>";
	/*
		output:
		string(5) "test1"
		int(24)
		string(5) "test2"
	*/
?>


<?php
	// ----------------------------------------------------------- mengakses array element multidimensional
	$array = array(
		"r",
		"i",
		"m",
		"p",
		"s",
		"j",
		"a",
		"multidimensi" => array(
			".",
			"multidimensi2" => array(
				"c",
				"o",
				"m",
			)
		)

	 );
	echo "<pre>";
	var_dump($array);
	echo "</pre>";
	echo $array[3].$array[0].$array[1].$array[2].$array[6].$array[4].$array[6].$array[5].$array[6];
	echo $array["multidimensi"][0];
	echo $array["multidimensi"]["multidimensi2"][0];
	echo $array["multidimensi"]["multidimensi2"][1];
	echo $array{"multidimensi"}{"multidimensi2"}[2];

	/*
		output : 
		array(8) {
			[0]=>string(1) "r"
			[1]=>string(1) "i"
			[2]=>string(1) "m"
			[3]=>string(1) "p"
			[4]=>string(1) "s"
			[5]=>string(1) "j"
			[6]=>string(1) "a"
			["multidimensi"]=>array(2) {
				[0]=>string(1) "."
				["multidimensi2"]=>array(3) {
					[0]=>string(1) "c"
					[1]=>string(1) "o"
					[2]=>string(1) "m"
				}
			}
		}

		primasaja.com
	*/

?>

<br>

<?php
	// array deferencing
	function fungsi1(){
		return array(1,2,3);
	}

	// menggunakan ini sejak versi PHP 5.4
	$getelement2darifungsi = fungsi1()[1];
	echo $getelement2darifungsi; // 2

	// versi sebelumnya
	$tmp = fungsi1();
	$tmpget = $tmp[0];
	echo $tmpget; // 1
?>

<br>

<?php
	// ------------------------------------------------------------------------------------------ menambah atau menghapus array
	$array = array(1 => 10, 6 => 40);
	$array['keybaru'] = 53;
	unset($array[1]);
	var_dump($array); // array(2) { [6]=> int(40) ["keybaru"]=> int(53) }
	//unset($array);
	//menghapus seluruh array
?>

<br>

<?php
	// Membuat simple array
	$array = array(1, 2, 3, 4, 5);
	echo '<pre>';
	print_r($array);
	echo '</pre>';

	// Menghapus setiap element array, tetapi membiarkan array sendiri tetap ada:
	foreach ($array as $i => $value) {
	    unset($array[$i]);
	}

	echo '<pre>';
	print_r($array);
	echo '</pre>';

	// Menambahkan element / item.
	$array[] = 6;
	echo '<pre>';
	print_r($array);
	echo '</pre>';
	/* output:
		Array
		(
		    [5] => 6
		)
	*/

	// ------------------------------------------------------------------------------------------ mengindeks ulang:
	$array = array_values($array);
	$array[] = 7;
	echo '<pre>';
	print_r($array);
	echo '</pre>';

	/*
		output:
		Array
		(
		    [0] => 6
		    [1] => 7
		)
	*/
?>

<br>

<?php
	$array = array(1 => 'prima', 2 => 'saja', 3 => 'com');
	unset($array[2]);
	print_r($array);
	/* output:
		Array ( [1] => prima [3] => com )
		key integer 2 akan hilang tetapi key yang lain tetap
		untuk mengatur ulang increment key menggunakan function array_values()
	*/

	$array = array_values($array);
	print_r($array);

	// Array ( [0] => prima [1] => com )
	//increment akan dimulai dari 0 kembali
?>

<br>

<?php
	$arr[key] = 'musuh';
	echo $arr[key]; // musuh
	// etc
?>


<br>

<?php
	error_reporting(E_ALL);
	ini_set('display_errors', true);
	ini_set('html_errors', false);

	//array yang simple :
	$array = array(1,2);
	$count = count($array);

	for ($i = 0; $i < $count; $i++){
		echo "<br>";
	    echo "\nChecking $i: \n";
	    echo "<br>";
	    // echo "Salah: " . $array['$i'] . "\n";
	    echo "Benar: " . $array[$i] . "\n";
	    echo "<br>";
	    // echo "Salah: {$array['$i']}\n";
	    echo "Benar: {$array[$i]}\n";
	}
?>

<br>

<?php
	error_reporting(E_ALL);
	$arr = array( 'merk_motor' => 'Honda', 'merk_mobil' => 'Nissan');

	// contoh yang benar
	print $arr['merk_motor'].'<br>';
	print $arr['merk_mobil'].'<br>';

	// ini salah. tetapi tampil yang diinginkan tetapi juga memberikan pesan error pada PHP dengan pemberitahuan
	//tidak terdefinisi constant merk_mobil
	//contoh
	// print $arr[merk_mobil].'<br>';

	//untuk tidak error dan terdefinisi constant merk_mobil maka menggunakan function define()
	define('merk_mobil', 'merk_motor');

	//lihat perbedaannya sekarang
	print $arr['merk_motor'].'<br>';
	print $arr[merk_mobil].'<br>';

	//pengikut lain juga diizinkan didalam string. Constants tetap diterjemahkan meski didalam string contohnya seperti berikut :
	print " Nama Merk : $arr[merk_mobil] <br>";

	//dengan satu pengecualian kurung mengelilingi array didalam string mengizinkan constant untuk di artikan. contoh :
	print " Merk Mobil : {$arr[merk_mobil]} <br>"; // tidak bisa. yg keluar malah Honda
	print " Merk Motor : {$arr['merk_motor']} <br>"; // Nissan

	// ini tidak akan bekerja dan hasilnya menguraikan error seperti
	// parse error : parse error, expecting T_STRING, T_Variable atau T_nUM_STRING
	// tentu saja ini dapat dihindari dengan menggunakan superglobals didalam string
	// print " Merk Mobil = $arr['merk_mobil'] "; // parse error, expecting `"identifier (T_STRING)"' or `"variable (T_VARIABLE)"' or `"number
	// print " Merk Motor = $_GET['merk_motor']  "; // parse error, expecting `"identifier (T_STRING)"' or `"variable (T_VARIABLE)"' or `"number


	//mengkonsentrasikan adalah opsi lain untuk menghindari error ini
	print " Merk Mobil :". $arr['merk_mobil'] ;
?>

<br>


<?php
	$error_descriptions[E_ERROR] = "Fatal error terjadi";
	$error_descriptions[E_WARNING] = "Terdapat peringatan issue PHP";
	$error_descriptions[E_NOTICE] = "Ini hanya informal permberitahuan";
?>


<br>

<?php
	class wadah1{
		private $A;
	}

	class wadah2 extends wadah1{
		private $var1;
		public $var2 = array('test','test2');
	}

	$halo = (array) new wadah2();

	echo '<pre>';
	var_dump((array) new wadah2());
	echo '</pre>';


	// $wadah2 = (array) new wadah2();
	// echo $wadah2['var2'][0];
	/*
	output :
	array(3) {
	  ["wadah2var1"]=>
	  NULL
	  ["var2"]=>
	  array(2) {
	    [0]=>
	    string(4) "test"
	    [1]=>
	    string(5) "test2"
	  }
	  ["wadah1A"]=>
	  NULL
	}
	test
	*/
?>



<?php
	// ---------------------------------------------------------------------- array sangat berguna ini contohnya
	$a = array('bau' => 'wangi',
	           'warna' => 'merah',
	           'nama'  => 'mawar',
	           4 // keynya akan menjadi 0
		);

	$b = array('a', 'b', 'c');

	// . . .ini sama dengan yang atas dengan cara berbeda:
	$a = array();
	$a['bau'] = 'wangi';
	$a['warna'] = 'merah';
	$a['nama'] = 'mawar';
	$a[] = 4;        // key akan menjadi 0


	$b = array();
	$b[] = 'a';
	$b[] = 'b';
	$b[] = 'c';


	// kode diatas bila ditampilkan akan menjadi $a akan menjadi array
	// array('bau' => 'wangi', 'warna' => 'merah', 'nama' => 'mawar',

	// , 0 => 4), dan $b akan menjadi array
	// array(0 => 'a', 1 => 'b', 2 => 'c'), simple array('a', 'b', 'c').

?>



