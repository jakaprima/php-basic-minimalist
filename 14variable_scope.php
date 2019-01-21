<?php
    $a = 1;
    echo "<br>";
    include '14variable_scope_b.php';
?>

<br>

<?php
    $a = 1; // global scope

    function test(){
        echo $a; // tereferensi ke local scope 
    } 

    test(); // tidak ada isinya
?>

<?php
    $a = 1;
    $b = 2;

    function fungsi1(){
        global $a, $b;

        $b = $a + $b; // 1 + 2 = 3
    } 

    fungsi1();
    echo $b; // 3
?>

<?php
    $a = 1;
    $b = 2;

    function fungsi2(){
        $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
    } 

    fungsi2();
    echo $b; // 3
?>


<?php
function test_global(){
    // paling awal pendefinisian variable bukan "super" dan require
    // global menjadi tersedia dalam function local scope
    global $HTTP_POST_VARS;
    echo $HTTP_POST_VARS['nama'];
    
    // Superglobals tersedia dalam scope mana saja dan tidak membutuhkan 'global'. Superglobals tersedia dari PHP 4.1.0 dan HTTP_POST_VARS sekarang sudah dianggap USANG / deprecated.
    echo $_POST['nama'];
}
?>


<?php
    function fungsi3(){
        $a = 0;
        echo $a; // 0
        $a++;
    }
    echo fungsi3(); // 0
    echo fungsi3(); // 0
?>

<?php
    function fungsi4(){
        static $a = 0;
        echo $a;
        $a++;
    }
    echo fungsi4(); // 0
    echo fungsi4(); // 1
?>

<?php
    function fungsi5(){
        static $count = 0;

        $count++;
        echo $count;
        if ($count < 10) {
            fungsi5();
        }
        $count--;
    }

    echo fungsi5(); // 12345678910
?>


<?php
    function fungsi6(){
        static $int = 0;          // benar 
        // static $int = 1+2;        // benar dari PHP 5.6
        // static $int = sqrt(121);  // salah karena itu function

        $int++;
        echo $int;
    }
    echo fungsi6(); // 1
    echo fungsi6(); // 2
?>



<?php
    function test_global_ref() {
        global $obj;
        $obj = &new stdclass;
    }

    function test_global_noref() {
        global $obj;
        $obj = new stdclass;
    }

    test_global_ref();
    var_dump($obj);
    test_global_noref();
    var_dump($obj);
    // output:
    // NULL
    // object(stdClass)(0) {
    // }
?>


<?php
function &get_instance_ref() {
    static $obj;

    echo 'Static object: ';
    var_dump($obj);
    if (!isset($obj)) {
        // mendeklarasikan reference ke static variable
        $obj = &new stdclass;
    }
    $obj->property++;
    return $obj;
}

function &get_instance_noref() {
    static $obj;

    echo 'Static object: ';
    var_dump($obj);
    if (!isset($obj)) {
        // Assign the object to the static variable
        $obj = new stdclass;
    }
    $obj->property++;
    return $obj;
}

$obj1 = get_instance_ref();
$still_obj1 = get_instance_ref();
echo "\n";
$obj2 = get_instance_noref();
$still_obj2 = get_instance_noref();
?>

<!-- contoh diatas akan teroutput :

Static object: NULL
Static object: NULL

Static object: NULL
Static object: object(stdClass)(1) {
["property"]=>
int(1)
}

contoh tersebut mendemonstrasikan ketika mendeklarasikan reference ke static variable, itu tidak teringat ketika memanggil &get_instance_noref() function kedua kali. -->



