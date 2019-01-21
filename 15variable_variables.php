<?php
	$a = 'halo';
?>

<?php
	$$a = 'halo2';
?>

<?php
	echo "$a ${$a}" // output: halo halo2
?>

<?php
	echo "$a $halo"; // halo halo2
?>

<?php
	// contoh variable properties
	class Kerangka1{
		var $prop1 = 'isi prop1';
		var $prop2 = array('www', 'prima', 'saja', 'com');
		var $prop3 = 'isi prop3';
	}

	$kerangka1 = new Kerangka1();
	$prop1 = 'test';
	echo $kerangka1->prop1; // isiprop1
?>
