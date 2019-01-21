
simple HTML form
<form action="16variable_eksternal.php" method="post">
    Nama:  <input type="text" name="nama" /><br />
    Email: <input type="text" name="email" /><br />
    <input type="submit" name="submit" value="klik transfer inputan value" />
</form>

contoh langkah 2 akses data dari simple POST HTML form:
<?php
  echo $_POST['nama']; // output: sesuai inputan
  echo $_REQUEST['nama']; // output: sesuai inputan
?>

<?php
  // awas: cara ini tidak support lagi
  // diapus di PHP 5.4.0
     // import_request_variables('p', 'p_');
     // echo $p_username;

  // diapus di PHP 5.4.0
     // echo $HTTP_POST_VARS['username'];

  // diapus di PHP 5.4.0
     // echo $username;
?>


contoh complex form
<?php
  if ($_POST){
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
  }
?>

<form action="" method="post">
    Nama:  <input type="text" name="infouser[nama]" /><br />
    Email: <input type="text" name="infouser[email]" /><br />
    Minuman: <br />
    <select multiple name="minuman[]">
        <option value="fanta">Fanta</option>
        <option value="indomilk">Indomilk</option>
        <option value="susu-cap-enak">Susu Cap Enak</option>
    </select><br />
    <input type="submit" value="klik!" />
</form>

<?php
  setcookie("cookie_saya[satu]", 'isi cookie 1', time()+3600);
  setcookie("cookie_saya[dua]", 'isi cookie 2', time()+3600);
?>


<?php
  if (isset($_COOKIE['hasil'])) {
      $hasil = $_COOKIE['hasil'] + 1;
  } else {
      $hasil = 1;
  }

  setcookie('hasil', $hasil, time()+3600);
  setcookie("Keranjang[$hasil]", $barang, time()+3600);
?>