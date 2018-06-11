<?php

include "config.php"; 
$dbconn = odbc_connect($pg_main_name, $pg_main_username, $pg_main_password);

session_start(); 
    
if(!isset($_SESSION['admin'])){
	die ('Ошибка доступа: для выполнения действия войдите как администратор');
}
    
$result = odbc_exec($dbconn, 'DELETE FROM doska_pocheta.doska_pocheta_tab WHERE id='.$_GET['id']);
    
unlink("sotrudniki/".$_GET['id'].".jpg");
unlink("sotrudniki/".$_GET['id']."_thumb.jpg");

	  
Header("Location: index.php?category=".$_GET['category']);
	       
odbc_free_result($result);
odbc_close($dbconn);

?>
