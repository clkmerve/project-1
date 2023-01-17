<?php

session_start();
$_SESSION=array();

session_destroy();//oturum sonlandırma

header("location:panelgiris.php")//kullanıcı buraya yönlendirilcek

?>