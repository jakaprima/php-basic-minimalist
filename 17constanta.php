<?php

    // nama constants yang valid

    define("VAR", "isi var 1");

    define("VAR2", "isi var 2");

    define("VAR_3", "isi var 3");



    // nama constant yang salah

    define("2VAE",    "sesuatu");



    // ini valid tapi harus dihindari

    define("__VAR__", "sesuatu lagi"); 

?>


<?php

    define("CONSTANT1", "halo primasaja.com");

    echo CONSTANT1; // halo primasaja.com

    echo Constant1; // output "Constant1" dan pemberitahuan isu error

?>


<?php

    // bekerja dari PHP 5.3.0

    const CONSTANT2 = "halo2 primasaja.com";

    echo CONSTANT2; // halo2 primasaja.com



    const CONSTANT3 = CONSTANT2.'; SELAMAT DATANG';

    echo CONSTANT3; // halo2 primasaja.com; SELAMAT DATANG



    const BINATANG = array('kucing', 'bebek');

    echo BINATANG[1]; // bebek

?>