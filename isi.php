<?php
$page = @$_GET['page'];

if($page == ''){
	include "dashboard.php";
}else if($page == 'enkripsi'){
	include "upload_enc.php";
}else if($page == 'dekripsi'){
	include "upload_dec.php";
}else{
	echo "Menu Tidak Di Temukan!";
}
?>