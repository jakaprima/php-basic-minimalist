<?php
// $a = 4.567;
// $b = 4.5e2;
// $c = 2E-15;
?>


membandingkan tipe float
<?php
	$var1 = 9.87654321;
	$var2 = 9.87654247;
	$mesinepsilon = 0.00001; // unit pembulatan

	if(abs($var1-$var2) < $mesinepsilon){
		echo "sama";
	} else {
		echo "tidak sama";
	}
	//output: sama
?>