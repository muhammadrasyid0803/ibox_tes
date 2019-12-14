<?php 

$db = mysqli_connect('localhost','root','','db_ibox');
if ($db) {
	echo "berhasil";
}else{
	echo 'GAGAL';
}

 ?>