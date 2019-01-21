<?php
	// ------------------------------------------------------------------------------------ variable rule dasar
	$var = 'prima';
	$Var = 'saja.com';
	echo "$var, $Var";      // outputs "Prima, saja.com"

	// $4huruf = 'tidak boleh setelah dollar langsung nomor';     // diawali dengan angka adalah salah
	$_4huruf = 'isi string dari variable underscore setelah dollar sign';    // boleh seperti ini setelah tanda dollar kemudian underscore
	$bähuruf = 'isi string dari variable';    // boleh seperti ini; 'ä' adalah (Extended) ASCII 228.
?>

<?php
	// ------------------------------------------------------------------------------------ sebagai Reference
	$variabel = 'jaka'; //memberikan nilai jaka ke $variabel
	$variabelreference = &$variabel; //mereferensi $variabel lewat $variablereference
	$variabelreference = " nama saya adalah $variabelreference "; // merubah isi $variabelreference

	echo $variabelreference; // output: nama saya adalah jaka
	echo $variabel; // variabel juga berubah // output: nama saya adalah jaka
?>

<?php
	// ------------------------------------------------------------------------------------ yang bisa dan tidak bisa dilakukan variable reference
	$nomor = 50;
	$isinomor = &$nomor; // ini adalah penanda yang bisa atau valid dilakukan

	 // ini adalah penandaan reference yang salah reference tidak dapat disebutkan namanya ekspresi
	// $isinomor = &(58 * 39);

	function fungsi1(){
		return 30;
	}

	// $isifungsi = &fungsi1(); // ini adalah salah
?>


<?php
	// ----------------------------------------------------------- contoh default values yang unintialized variable
	// Unset dan unreferenced (tidak menggunakan konteks) variable; outputs NULL
	var_dump($var1); // output : NULL

	// Boolean usage; outputs 'false' (contoh dibawah menggunakan opertor ternary)
	echo($unset_bool ? "true\n" : "false\n"); // output : false

	// String digunakan; outputs 'string(3) "abc"'
	$unset_str .= 'abc';
	var_dump($unset_str); // outputs 'string(3) "abc"'

	// Penggunaan integer; outputs 'int(25)'
	$unset_int += 25; // 0 + 25 => 25
	var_dump($unset_int); // outputs 'int(25)'

	// Penggunaan tipe Float/double ; output 'float(1.25)'
	$unset_float += 1.25;
	var_dump($unset_float); // output 'float(1.25)'

	// Penggunaan tipe Array; outputs array(1) {  [3]=>  string(3) "isi" }
	$unset_arr[3] = "isi"; 
	var_dump($unset_arr); // // array() + array(3 => "def") => array(3 => "isi")

	// Penggunaan Object; creates new stdClass object 
	$unset_obj->key = 'value';
	var_dump($unset_obj); // object(stdClass)#1 (1) {  ["key"]=>  string(3) "value" }
?>