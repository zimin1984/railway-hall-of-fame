<?php

/* Модуль "Доска Почета Октябрьской железной дороги". Разработчик - Зимин Д.В., СПБ ИВЦ, отдел "ИНФОРМ" */

include "config.php"; 
$dbconn = odbc_connect($pg_main_name, $pg_main_username, $pg_main_password);

           session_start();
           
            if(!isset($_GET['category'])) {
	      $_GET['category']=0;
	      $hideMenu1 = true;
	   }
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
   
   <script type="text/javascript" src="jquery.mousewheel.js"></script>
	<script type="text/javascript" src="jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="jquery.fancybox.css" media="screen" />
                                        
    <!--[if lte IE 8]> 
       <link rel="stylesheet" type="text/css" href="styles-ie.css">
   <![endif]-->                                      
</head>
<body>
   <div id="confirmDeleteWindow">
    </div>
    <div id="main">
        <div id="container">
           <div id="header">
           </div>
            <div id="pageContent">
               <div id="menu">			    		     
		  <?php
                    if(isset($_GET['category'])){
                        if(($_GET['category'] == 9) || ($_GET['category'] >= 32 && $_GET['category'] <= 36)){
			      echo'<span class="menuitem1 opened">Рационализация </span><br><br>';
			      echo'<ul class="menuitem1 visibleMenu">';
                        }
			else{
			      echo'<span class="menuitem1">Рационализация </span><br><br>';
			      echo'<ul class="menuitem1">';
			}
		     }
		    ?>
                                                                        
                     <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=9'?>">Лучшие рационализаторы</a></li>
		     <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=32'?>">Лучший рационализатор до 30 лет</a></li>
                     <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=33'?>">Наиболее активный рационализатор</a></li>
                     <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=34'?>">Наиболее эффективный рационализатор</a></li>
                     <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=35'?>">Лучший организатор технического творчества</a></li>
                     <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=36'?>">Наиболее креативное рационализаторское предложение</a></li>

                  </ul>  
		<?php
                    if(isset($_GET['category'])){
                        if(($_GET['category'] >= 10 && $_GET['category'] <= 12)  || $_GET['category']==41 ){
			      echo'<span class="menuitem2 opened">Безопасность движения </span><br><br>';			   
			      echo'<ul class="menuitem2 visibleMenu">';
                        }
			else{
			      echo'<span class="menuitem2">Безопасность движения </span><br><br>';			   
			      echo'<ul class="menuitem2">';
			}
		     }
		    ?>							      
                  
                    <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=10'?>">Работники, отличившиеся при возникновении угрозы безопасности движения, жизни и здоровья людей</a></li>
                    <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=11'?>">Лучшие общественные инспекторы по безопасности движения поездов</a></li>
		    <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=12'?>">Руководители структурных подразделений, обеспечившие безаварийную работу подразделения в течение 5 лет</a></li>	  
		    <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=41'?>">Работники, внесшие значительный вклад в обеспечение безопасности движения поездов</a></li>
		     
		    
		    
		    </ul>
		    <?php
                    if(isset($_GET['category'])){
                        if($_GET['category'] >= 19 && $_GET['category'] <= 21){
			      echo'<span class="menuitem4 opened">Охрана труда </span><br><br>';			   
			      echo'<ul class="menuitem4 visibleMenu">';
                        }
			else{
			      echo'<span class="menuitem4">Охрана труда </span><br><br>';			   
			      echo'<ul class="menuitem4">';
			}
		     }
		    ?>						     
		    <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=21'?>">Лучший уполномоченный по охране труда полигона Октябрьской железной дороги</a></li>
                    <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=19'?>">Лучший специалист по охране труда полигона Октябрьской железной дороги</a></li>
                    <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=20'?>">Лучший специалист по охране труда и руководитель структурного подразделения полигона
		    железной дороги в рамках смотра-конкурса на лучшую организацию работы по охране труда</a></li>                                 
                  </ul>
		  
		    <?php
                    if(isset($_GET['category'])){
                        if(($_GET['category'] >= 27 && $_GET['category'] <= 28) || ($_GET['category'] >= 39 && $_GET['category'] <= 40)){
			      echo'<span class="menuitem7 opened">Лучшие работники &nbsp;&nbsp;&nbsp;&nbsp;полигона дороги</span><br><br>';			   
			      echo'<ul class="menuitem7 visibleMenu">';
                        }
			else{
			      echo'<span class="menuitem7">Лучшие работники &nbsp;&nbsp;&nbsp;&nbsp;полигона дороги</span><br><br>';			   
			      echo'<ul class="menuitem7">';
			}
		     }
		    ?>									   
                  
                     <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=27'?>">Награды Министерства транспорта Российской Федерации</a></li>
                     <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=28'?>">«Почетный работник Октябрьской железной дороги»</a></li>
		     <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=39'?>">Награды ОАО «Российские железные дороги»</a></li>
		     <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=40'?>">Награды Октябрьской железной дороги</a></li>
                  </ul>		  
										
		    <?php
                    if(isset($_GET['category'])){
                        if($_GET['category'] >= 13 && $_GET['category'] <= 18){
			      echo'<span class="menuitem3 opened">Победители &nbsp;&nbsp;&nbsp;&nbsp;производственных &nbsp;&nbsp;&nbsp;&nbsp;соревнований </span><br><br>';			   
			      echo'<ul class="menuitem3 visibleMenu">';
                        }
			else{
			      echo'<span class="menuitem3">Победители &nbsp;&nbsp;&nbsp;&nbsp;производственных &nbsp;&nbsp;&nbsp;&nbsp;соревнований </span><br><br>';			   
			      echo'<ul class="menuitem3">';
			}
		     }
		    ?>									   
                  
                     <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=13'?>">Лучшие по профессии</a></li>
                     <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=14'?>">Лучший мастер и лучший руководитель среднего звена</a></li>
                     <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=15'?>">Руководители лучших трудовых коллективов  смен, участков, колонн, бригад</a></li>
                     <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=16'?>">Лучшие трудовые коллективы – победители отраслевого соревнования</a></li>
		     <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=17'?>">Победители соревнования ж.д. узлов</a></li>
     		     <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=18'?>">Победители регионального соревнования трудовых коллективов Октябрьской ж.д.</a></li>
		     

                  </ul>
		  
		 
		
		  <?php
                    if(isset($_GET['category'])){
                        if($_GET['category'] >= 22 && $_GET['category'] <= 23){
			      echo'<span class="menuitem5 opened">Общественная жизнь </span><br><br>';			   
			      echo'<ul class="menuitem5 visibleMenu"> ';
                        }
			else{
			      echo'<span class="menuitem5">Общественная жизнь </span><br><br>';			   
			      echo'<ul class="menuitem5"> ';
			}
		     }
		    ?>							   
                  
                     <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=22'?>">Лучшие профсоюзные лидеры</a></li>
                     <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=23'?>">Лучшие спортсмены</a></li>
                  </ul>
		  <?php
                    if(isset($_GET['category'])){
                        if($_GET['category'] >= 24 && $_GET['category'] <= 26){
			      echo'<span class="menuitem6 opened">Молодёжный лидер</span>';			   
			      echo'<ul class="menuitem6 visibleMenu">';
                        }
			else{
			      echo'<span class="menuitem6">Молодёжный лидер</span>';			   
			      echo'<ul class="menuitem6">';
			}
		     }
		    ?>
                  
                              <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=24'?>">Молодёжный лидер</a></li>
                  </ul>
		  <br><br>
		   <?php
                    if(isset($_GET['category'])){
                        if($_GET['category'] == 31){
			      echo'<span class="menuitem8 opened">Наставничество</span>';			   
			      echo'<ul class="menuitem8 visibleMenu">';
                        }
			else{
			      echo'<span class="menuitem8">Наставничество</span>';			   
			      echo'<ul class="menuitem8">';
			}
		     }
		    ?>
                  
                              <li><a href="<?=$_SERVER['SCRIPT_NAME'].'?category=31'?>">Наставники молодёжи</a></li>
                  </ul>
		  
		 <br> <br><br>
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="archive" href="archive2017/">Архив 2017 года</a><br><br>
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="archive" href="archive2016/">Архив 2016 года</a><br><br>
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="archive" href="archive2015/">Архив 2015 года</a><br><br>
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="archive" href="archive2014/">Архив 2014 года</a><br><br>
	         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="archive" href="archive2013/">Архив 2013 года</a>
		
               </div>
                <div id="gallery">
                   <?php  
                    if(isset($_GET['category'])){		     		      
			if($_GET['category']==1)
                            echo'<span id="title">Победители по номинациям конкурса на кубок лидеров производительности имени А.К.Гастева</span><br><br>';
                        elseif($_GET['category']==2)
                            echo'<span id="title">Победители по номинациям конкурса на приз журнала "Железнодорожный транспорт"</span><br><br>';
                        elseif($_GET['category']==3)
                            echo'<span id="title">Победители по номинациям конкурса лучшее подразделение в проекте "Бережливое производство на полигоне ОАО "РЖД"</span><br><br>';
                        elseif($_GET['category']==4)
                            echo'<span id="title">Победители по номинациям конкурса "5С-предприятие" на полигоне ОЖД</span><br><br>';
                        elseif($_GET['category']==5)
                            echo'<span id="title">Победители конкурса «Лучший участник проекта по развитию Производственной Системы ОАО «РЖД» на полигоне Октябрьской железной дороги»</span><br><br>';										 			  
                        elseif($_GET['category']==6)
                            echo'<span id="title">Победитель регионального конкурса «Лучшие товары и услуги Мурманской области» </span><br><br>';
                        elseif($_GET['category']==7)
                            echo'<span id="title">Лучший аудитор СМК по результатам обучения по курсу "Внутренний аудит СМК"</span><br><br>';
                        elseif($_GET['category']==8)
                            echo'<span id="title">Победитель конкурса «100 лучших товаров России»</span><br><br>';
                        elseif($_GET['category']==9)
                            echo'<span id="title">Лучшие рационализаторы</span><br><br>';		    
                        elseif($_GET['category']==10)
                            echo'<span id="title">Работники, отличившиеся при возникновении угрозы безопасности движения, жизни и здоровья людей</span><br><br>';
                        elseif($_GET['category']==11)
                            echo'<span id="title">Лучшие общественные инспекторы по безопасности движения поездов</span><br><br>';   
                        elseif($_GET['category']==12)
                            echo'<span id="title">Руководители структурных подразделений, обеспечившие безаварийную работу подразделения в течение 5 лет</span><br><br>';		
			elseif($_GET['category']==13)
                            echo'<span id="title">Лучшие по профессии</span><br><br>';
                        elseif($_GET['category']==14)
                            echo'<span id="title">Лучший мастер и лучший руководитель среднего звена</span><br><br>';
                        elseif($_GET['category']==15)
                            echo'<span id="title">Руководители лучших трудовых коллективов  смен, участков, колонн, бригад</span><br><br>';
                        elseif($_GET['category']==16)
                            echo'<span id="title">Лучшие трудовые коллективы – победители отраслевого соревнования</span><br><br>';
                        elseif($_GET['category']==17)
                            echo'<span id="title">Победители соревнования ж.д. узлов</span><br><br>';
			elseif($_GET['category']==18)
                            echo'<span id="title">Победители регионального соревнования трудовых коллективов Октябрьской ж.д.</span><br><br>';
                        elseif($_GET['category']==19)
                            echo'<span id="title">Лучший специалист по охране труда полигона Октябрьской железной дороги</span><br><br>';
                        elseif($_GET['category']==20)
                            echo'<span id="title">Лучший специалист по охране труда и руководитель структурного подразделения полигона
		                железной дороги в рамках смотра-конкурса на лучшую организацию работы по охране труда</span><br><br>';
                        elseif($_GET['category']==21)
                            echo'<span id="title">Лучший уполномоченный по охране труда полигона Октябрьской железной дороги</span><br><br>';
                        elseif($_GET['category']==22)
                            echo'<span id="title">Лучшие профсоюзные лидеры</span><br><br>';
                        elseif($_GET['category']==23)
                            echo'<span id="title">Лучшие спортсмены</span><br><br>';
                        elseif($_GET['category']==24)
                            echo'<span id="title">Молодёжный лидер</span><br><br>';
                        elseif($_GET['category']==25)
                            echo'<span id="title">Новое звено</span><br><br>';
                        elseif($_GET['category']==26)
                            echo'<span id="title">Лидер перемен</span><br><br>';
			elseif($_GET['category']==27)
                            echo'<span id="title">Лучшие работники полигона дороги, награжденные за добросовестный труд государственными, ведомственными и отраслевыми наградами</span><br><br>';
                        elseif($_GET['category']==28)
                            echo'<span id="title">Лучшие работники полигона дороги, награжденные знаком «Почетный работник Октябрьской железной дороги»
			    за высокие достижения в труде и проявленную инициативу при выполнении производственных заданий</span><br><br>';
			elseif($_GET['category']==29)
                            echo'<span id="title">Победители по номинациям конкурса лучшее подразделение в проекте "Бережливое производство на полигоне ОЖД"</span><br><br>';
                        elseif($_GET['category']==30)
                            echo'<span id="title">Победители конкурса на соискание премии Правительства Ленинградской области по качеству</span><br><br>';
                        elseif($_GET['category']==31)
                            echo'<span id="title">Наставники молодёжи</span><br><br>';
			elseif($_GET['category']==32)
                            echo'<span id="title">Лучший рационализатор до 30 лет</span><br><br>';
			elseif($_GET['category']==33)
                            echo'<span id="title">Наиболее активный рационализатор</span><br><br>';
			elseif($_GET['category']==34)
                            echo'<span id="title">Наиболее эффективный рационализатор</span><br><br>';
			elseif($_GET['category']==35)
                            echo'<span id="title">Лучший организатор технического творчества</span><br><br>';
			elseif($_GET['category']==36)
                            echo'<span id="title">Наиболее креативное рационализаторское предложение</span><br><br>';   
			elseif($_GET['category']==37)
                            echo'<span id="title">Лидеры по развитию производственной системы Октябрьской железной дороги</span><br><br>';
			elseif($_GET['category']==39)
                            echo'<span id="title">Награды ОАО «Российские железные дороги»</span><br><br>';
			elseif($_GET['category']==40)
                            echo'<span id="title">Награды Октябрьской железной дороги</span><br><br>';
			 elseif($_GET['category']==41)
                            echo'<span id="title">Работники, внесшие значительный вклад в обеспечение безопасности движения поездов</span><br><br>';    
		     
                        
                        if(isset($_SESSION['admin']) && $_GET['category']!=0){?>
                          &nbsp;&nbsp;&nbsp;&nbsp;<img id="plusImage" src="images/add.png" style="position:relative;top:3px;">&nbsp;<a id="addImageLink">Добавить нового сотрудника в эту номинацию</a><br><br>
                           <form id="uploadForm" method="post" action="save_image.php" enctype="multipart/form-data">
                             <span>ФИО сотрудника: </span><br>
                             <input type="text" name="fio" id="fio"><br><br>
                             <span>Должность: </span><br>
			      <textarea name="doljnost" id="doljnost"></textarea><br><br>       								     										    
			     <span>За что награждён: </span><br>
			      <textarea name="zaslugi" id="zaslugi"></textarea><br><br>       								     
                             <span>Выберите фотографию сотрудника: </span><br>
                	     <input type="file" name="image_file" id="image_file" style="background:#fff;"><br><br><br><br>
                             <input type="hidden" name="nominacia" value="<?=$_GET['category']?>">
                             <input id="saveImageButton" type="submit" onclick="return false;" value="Добавить" name="save_image">
			      &nbsp;&nbsp;&nbsp;&nbsp;<button id="hideForm" onclick="return false;">Отмена</button>
                          </form>
                        <?php }
                        
                        if(is_numeric($_GET['category'])){?>
                        <?php
			    if($_GET['category']==0)
			    	echo'<img id="logo" src="images/logo.jpg" alt="">';
			    else{
			       $query = 'SELECT * FROM doska_pocheta.doska_pocheta_tab where nominacia='.$_GET['category'].' order by images_order';		    
                               $result = odbc_exec($dbconn, $query);
                               echo'<table>';
                               $col=0;
                               while($rec = odbc_fetch_array($result)){ 
                                    if($col==0) echo "<tr>";
                                    echo'<td><a rel="gallery1" class="imagegallery" href="sotrudniki/'.$rec['id'].'.jpg"><img class="thumb" src="sotrudniki/'.$rec['id'].'_thumb.jpg"></a><br>'.$rec['fio'].'<br><span class="smallText"><br>'.$rec['doljnost'].'<br><br>'.$rec['zaslugi'].'</span>';
                                    if(isset($_SESSION['admin'])){
					echo'<br><img src="images/cross.png" style="position:relative;top:3px;">&nbsp;<a href="#" class="deleteLink" data-fio="'.$rec['fio'].'" data-url="delete.php?category='.$_GET['category'].'&id='.$rec['id'].'">Удалить</a><br><br>
					     <span>
					     <span class="position">
					     </span>
					     <a class="changePosLink">(Изменить)</a>
					     <span style="display:none;">
					     <input style="width:50px;" type="text" data-id="'.$rec['id'].'"  data-position="'.$rec['images_order'].'" class="changePosForm">
					     <input type="hidden" id="nominacia" value="'.$_GET['category'].'">
					     <input style="width:40px;" type="button" value="OK" class="changePosButton">
					  </span>
				       </span>';
                                    }
                                    echo'</td>';
                                    $col++;
                            
                                    if($col==3) {
                                            echo "</tr>";
                                            $col=0;
                                    }
                            }
                            odbc_free_result($result);
                            ?>
                            </table>
                    <?php 
                        }
			}
                    }
                  ?>
               </div>
            </div>
         </div>
    </div>
</body>
</html>
<?php  
    odbc_close($dbconn);
?>
