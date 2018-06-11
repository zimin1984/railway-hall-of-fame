<?php

include "config.php"; 
$dbconn = odbc_connect($pg_main_name, $pg_main_username, $pg_main_password);

$query = 'SELECT * FROM doska_pocheta.doska_pocheta_tab order by id';
	
$result = odbc_exec($dbconn, $query);              
$pos=100;
while($rec = odbc_fetch_array($result)){ 
	    odbc_exec($dbconn, "update doska_pocheta.doska_pocheta_tab set images_order=".$pos." where
			id=".$rec['id']);	       
            $pos=$pos+100;
}

odbc_free_result($result);
odbc_close($dbconn);

?>
