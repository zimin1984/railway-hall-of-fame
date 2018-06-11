<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="icon" href="/favicon.ico" type="image/x-icon">
   <link rel="SHORTCUT ICON" href="/favicon.ico" type="image/x-icon">
   <link rel="stylesheet" type="text/css" href="styles.css">
   <title>Доска Почёта Октябрьской железной дороги</title>
   <script type="text/javascript" src="jquery.js"></script>
   <script type="text/javascript" src="scripts.js"></script>
  <!--[if lte IE 8]> 
       <link rel="stylesheet" type="text/css" href="styles-ie.css">
   <![endif]-->     
</head>
<body>
    <div id="main">
        <div id="container">
           <div id="header">
           </div>
            <div id="pageContent">
              
                <div id="gallery" style="left:200px;top:100px;">
                  <?php  
                   if(!isset($_POST['admin_enter'])) { ?>
                     <form id="loginForm" method="post" action="<?=$_SERVER['SCRIPT_NAME']?>">
                          <span>Логин администратора доски почёта: </span><br>
                          <input type="text" name="login"><br><br>
                          <span>Пароль: </span><br>
                          <input type="password" name="pass"><br><br>
                          <input type="submit" value="Войти" name="admin_enter">
                     </form>
                     
                     <?php
                     } elseif(isset($_POST['admin_enter'])){
                        if(isset($_POST['login']) && isset($_POST['pass'])){
                          if($_POST['login']=='admin' && $_POST['pass']=='user-nok'){
                             $_SESSION['admin']='yes';
                     ?>
                        <script>location.href="index.php?category=1";</script>
                     <?php
                     }
                        else{
                           echo'<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           <img src="images/exclamation.png" style="position:relative;top:3px;">&nbsp;
                           Ошибка: Неверный логин или пароль администратора<br><br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1);">Вернуться назад</a><br><br><br><br><br>';   
                        }
                     }
                     else{
                        echo'<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <img src="images/exclamation.png" style="position:relative;top:3px;">&nbsp;
                        Ошибка: Не указан логин или пароль администратора<br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1);">Вернуться назад</a><br><br><br><br><br>';   
                     }
                   }
                   ?>
               </div>
            </div>
         </div>
    </div>
</body>
</html>
