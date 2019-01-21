
<?php
	function fungsi1(){
		return 5;
	}
?>

<?php
	$pertama ? $kedua : $ketiga;
?>

<?php
	function fungsi2($i){
		return $i * 2;
	}

	$b = $a = 5; // mendefinisikanvalue 5 ke variable $a dan $b berisi value $a
	$c = $a++; // post-increment, menanadai original value dari $a 5 ke $c // output: 5
	$e = $d = ++$b; // pre-increment, memasukan increment value $b ke $d dan $e // output: 6

	// pada point ini, baik $d dan $e sama dengan ke 6
	$f = fungsi2($d++); // 6 * 2 = 12 ke $f
	$g = fungsi2(++$e) // 2 * 7 = 14 
	$h = $g += 10; // $g di increment dengan 10 dan berakhir dengan value 24
?>
