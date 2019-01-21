Magic constants
PHP melayani sejumlah besar constant yang telah terdefinisi ke script manapun ketika itu di jalankan. banyak dari constant, bagaimanapun, terbuat dari variasi extensions, dan hanya akan ada ketika ekstensi tersebut tersedia, antara via dinamic loading atau karena mereka telah tercompile didalam.

terdapat 9 magical constants yang berubah tergantung dimana mereka digunakan. misalnya, value dari __LINE__ tergantung dari baris dia digunakan dalam script anda. semua "magical" constant ini terselesaikan pada waktu kompilasi, tidak seperti constants, dimaan terselesaikan saat berjalan. spesial karakter constant ini case-insensitive berikut beberapa magic constant PHP:

__LINE__ = mengetahui baris dari script
__FILE__ = full path dan nama file dari file. jika digunakan didalam include, nama dari include file yang ditampilkan.
__DIR__ = directory dari file. jika digunakan dalam include, directory dari include file yang dikembalikan. ini sama eperti dirname(__FILE__).
__FUNCTION__ = nama fungsi, atau {closure} untuk anonymous functions.
__CLASS__ = nama class, nama class termasuk namespace dimana ia di deklarasikan didalam (misalnya = Foo\Bar). sejak PHP 5.4 __CLASS__ bekerja juga dalam traits. ketikan menggunakannya didalam trait method, __CLASS__ adalah nama dari class trait yang digunakan.
__TRAIT__ = nama trait. nama trait termasuk namespace didaman ia dideklarasikan (misalnya = Foo\Bar).
__METHOD__ = nama method class
__NAMESPACE__ nama namespace saat ini.
ClassName::class = nama class yang memenuhi syarat.


<?php 
	echo __FILE__; //  /Users/jakaprimamaulana/Documents/workspace/homespace/belajar/php-basic-minimalist/18magic_constant.php
	echo __LINE__; // 31
	echo __DIR__; // /Users/jakaprimamaulana/Documents/workspace/homespace/belajar/php-basic-minimalist

	function fungsi_magic_constant() {
		echo __FUNCTION__; // fungsi_magic_constant
	}
	fungsi_magic_constant();
	


	class TestClassMagicConstant {
		public function printNamaClass() {
			echo "ini nama class = " . __CLASS__;
		}

		// print class dan nama method
		public function printNamaMethod() {
			echo "ini nama method = " . __METHOD__;
		}

		// print nama fungsi
		public function printNamaFungsi() {
			echo "ini nama fungsi = " . __FUNCTION__;
		}

		// hanya bekerja di PHP 5.3
		public function printNamespace() {
			echo "nama namespace = " . __NAMESPACE__;
		}
	}
	$test_class_magic_constant = new TestClassMagicConstant();
	echo $test_class_magic_constant->printNamaClass(); // ini nama class = TestClassMagicConstant
	echo $test_class_magic_constant->printNamaMethod(); // ini nama method = TestClassMagicConstant::printNamaMethod
	echo $test_class_magic_constant->printNamaFungsi(); // printNamaFungsi
	echo $test_class_magic_constant->printNamespace();

?>