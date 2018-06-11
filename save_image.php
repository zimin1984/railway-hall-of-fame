<?php

include "config.php"; 
$dbconn = odbc_connect($pg_main_name, $pg_main_username, $pg_main_password);

session_start(); 

if(!isset($_SESSION['admin'])){
        die ('Ошибка доступа: для выполнения действия войдите как администратор');
}

require_once("ImageResize.php");

$next_id="";

$query = 'SELECT max(images_order) as maximgord FROM doska_pocheta.doska_pocheta_tab';
			    
$result = odbc_exec($dbconn, $query);

while($rec = odbc_fetch_array($result)){
	$next_imgorder=$rec['maximgord']+100;
}

$result = odbc_exec($dbconn, "SELECT nextval('doska_pocheta.doska_pocheta_seq')");

while ($line = odbc_fetch_array($result)) {
    foreach ($line as $col_value) {
        odbc_exec($dbconn, "INSERT INTO doska_pocheta.doska_pocheta_tab (id,fio,nominacia,doljnost,zaslugi,images_order) VALUES (".$col_value.",'".
                 $_POST['fio']."','".$_POST['nominacia']."','".$_POST['doljnost']."','".$_POST['zaslugi']."','".$next_imgorder."')");

        $next_id = $col_value;
    }
}

$imgDir = "sotrudniki";
$data = $_FILES['image_file'];

$tmp = $data['tmp_name'];
// Проверяем, принят ли файл.
if (@file_exists($tmp)) {
	
    $info = @getimagesize($_FILES['image_file']['tmp_name']);
    // Проверяем, является ли файл изображением.
    if (
    preg_match('{image/(.*)}is', $info['mime'], $p)
    ) {
        $name = "$imgDir/".$next_id;
       
        // Добавляем файл в каталог с фотографиями.
      
        if(!move_uploaded_file($tmp, $name.".jpg")){
	  die ('<b>Ошибка загрузки: не выставлены права на запись в папку "sotrudniki"!</b>');
        }
      
        copy($name.".jpg", $name."_thumb.jpg");

        $image = new SimpleImage();
	$image->load($name.".jpg");
	$image->resizeToWidth(800);
	$image->resizeToHeight(600);
	$image->save($name.".jpg");
	$image->resizeToWidth(122);
	$image->resizeToHeight(166);
	$image->save($name."_thumb.jpg");
      
        Header("Location: index.php?category=".$_POST['nominacia'] );
  	   
    } 
     
  } 

odbc_free_result($result);
odbc_close($dbconn);
?>
