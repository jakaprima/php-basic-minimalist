<?php
	//contoh 1 fungsi callback
	function callback(){
	  echo 'tampil callback 1 <br>';
	}

	//contoh 2 callback method
	class wadah{
	  static function callback2(){
	    echo 'tampil callback 2 <br>';
	  }
	}

	//contoh simple memanggil function
	call_user_func('callback'); // tampil callback 1

	//contoh callback memanggil static method
	call_user_func(array('wadah', 'callback2')); // tampil callback 2

	//contoh callback object method
	$obj = new wadah();
	call_user_func(array($obj, 'callback2')); // tampil callback 2

	//contoh static class method call sejak PHP 5.2.3
	call_user_func('wadah::callback2'); // tampil callback 2

	//contoh memanggil relative static class method sejak PHP 5.3
	class wadah2{
	  public static function fungsi1(){
	    echo "fungsi 1";
	  }
	}
	class wadah3 extends wadah2{
	  public static function fungsi1(){
	    echo "fungsi 2";
	  }
	}

	//memanggil fungsi yang sama tetapi memanggil yang class dari orangtuanya waitu class wadah2 fungsi 1 bukan fungsi1 dari dari wadah3
	call_user_func(array('wadah3', 'parent::fungsi1')); // fungsi 1

	//sejak PHP 5.3 bisa melakukan implementasi object seperti berikut
	class wadah4{
	  public function __invoke($jumlahisi){
	    echo "<br> jumlah isi airnya adalah ". $jumlahisi;
	  }
	}

	$c = new wadah4();
	call_user_func($c, 500);
?>


<br>


<?php
	// ----------------------------------------------------------------------- closure
	$double = function($var1){
	  return $var1 * 2;
	};

	//range number
	$rangenomor = range(1, 5);
	$nomorbaru = array_map($double, $rangenomor);

	print implode(' ', $nomorbaru); // output :2 4 6 8 10
?>