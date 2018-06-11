<?php

include "config.php"; 
$dbconn = odbc_connect($pg_main_name, $pg_main_username, $pg_main_password);

session_start(); 

if(!isset($_SESSION['admin'])){
        die ('Ошибка доступа: для выполнения действия войдите как администратор');
}

		
if($_GET['direction']=='up'){
	odbc_exec($dbconn,"update doska_pocheta.doska_pocheta_tab set images_order=images_order+1 where
	images_order >= ".$_GET['new_pos']." and nominacia=".$_GET['nominacia']);
}
else{
	odbc_exec($dbconn,"update doska_pocheta.doska_pocheta_tab set images_order=images_order-1 where
	images_order <= ".$_GET['new_pos']." and nominacia=".$_GET['nominacia']);
}
	        
odbc_exec($dbconn,"update doska_pocheta.doska_pocheta_tab set images_order=".$_GET['new_pos']." where
	id=".$_GET['curr_pos_id']);
	
				       
Header("Location: index.php?category=".$_GET['nominacia'] );
odbc_close($dbconn);
?>
