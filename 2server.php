<?php 
print_r($_SERVER['HTTP_USER_AGENT']);

// check website browser
if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE' !== False)){
	echo '</br> anda menggunakan internet explorer';
}else{
	echo '</br> yang lainnya';
}
?>