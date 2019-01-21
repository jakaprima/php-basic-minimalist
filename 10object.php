<?php
	// ------------------------------------------------------------------ penginisialisasian object dengan new
	class Wadah{
	  //properti
	  public $air = 40;
	  public $satuan = "ml";

	  //method
	  public function isi(){
	    echo "tettttt isi air ". $this->air.' '. $this->satuan;
	  }
	}

	$kegiatan = new Wadah();
	echo $kegiatan->air; // akses public variable // 40
	$kegiatan->isi(); // tettttt isi air 40 ml
?>

<br>

<?php
	// ------------------------------------------------------------------ konversi ke object
	//tidak tampil dan error
	$object = (object) array('1' => 'value');
	echo gettype($object); // object
	var_dump(isset($object)); // bool(true)
	// var_dump(key($obj)); // // output 'string(1) "1"' kalo di PHP 7.2.0; 'int(1)'

	// akan tampil
	$obj = (object) 'halo';
	echo '<br>';
	echo gettype($obj); // object
	echo '<br>';
	echo $obj->scalar;  // halo
?>

<br>

<?php
	$var1 = null;
	var_dump($var1);
?>