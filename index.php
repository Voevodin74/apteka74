<?
include("config.php"); 
 session_start();
 
 // считываем текущее время 
$start_time = microtime(); 
// разделяем секунды и миллисекунды (становятся значениями начальных ключей массива-списка) 
$start_array = explode(" ",$start_time); 
//стартовое время 
$start_time = $start_array[1] + $start_array[0];

$ses_id = session_id(); 


?>

<html>
<title>Интернет - аптека</title> 
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8;charset=utf-8" />
    <meta http-equiv="Content-Language" content="ru" />
   <script type="text/javascript" async="" src="http://apteka-74.ru/img_files/ga.js"></script><script src="http://apteka-74.ru/img_files/modernizr-2.5.3.min.js"></script>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://apteka-74.ru/img_files/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ur-720bfb5a-7f69-8e88-3568-ee0f3d6fe31b"}); </script>

<link rel="stylesheet" href="http://apteka-74.ru/img_files/framework.css">
<link rel="stylesheet" href="http://apteka-74.ru/img_files/style.css">

</head>
    <body class="webkit">
        <div id="wrap" class="left full">
            <div id="inner" class="centre width-span-4">
                 				<div id="header">
                    <div id="logo" class="left column-1">
                        <div id="logo-inner" class="column-1-inner">
                            <h1 class="no-margin no-padding no-overflow"><a href="http://apteka-74.ru/index.php">Логотип</a></h1>
                        </div>
                    </div>
                    <div id="navigation" class="left column-1">
                        <div id="navigation-inner" class="column-1-inner position-relative">
                            <ul class="no-margin no-padding position-absolute">
                            	
                                <li><a href="http://apteka-74.ru/bol/" class="link">От боли</a></li>
                                
                                <li><a href="http://apteka-74.ru/kashel/" class="link">От кашля</a></li>
                                
                                <li><a href="http://apteka-74.ru/temperatura/" class="link">От температуры</a></li>
                                
                                <li><a href="http://apteka-74.ru/uspok/" class="link">Успокоительные</a></li>
                                
                                
                            </ul>
                        </div>
                    </div>
                    <div id="social" class="left column-1">
                        <div id="social-inner" class="column-1-inner position-relative">
                            <ul class="no-margin no-padding position-absolute">
                                <li>Справочная служба</li>
								<li>8(952)5178522</li>
                            </ul>
                        </div>
                    </div>
                    <div id="cart" class="right column-1 position-relative">
                        <div id="cart-inner" class="column-1-inner position-relative">
                            <ul class="no-margin no-padding position-absolute">
                                <li><a href="http://apteka-74.ru/index.php?n=kor">Корзина</a></li>
                                <li><a href="http://apteka-74.ru/dostavka/">Условия доставки</a></li>
                                <li><a href="">Группа ВКонтакте</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                                <div id="content" class="left full">


<?
	<!-- СРЕДНЯЯ ЯЧЕЙКА -->
	<?php
	if(!isset($n)) $n="about";

		// Проверка переменной на специальные символы
			$n=check_var($n);
			// Товары, которые выходят на главной странице
			if($n=="about"){
				include("about.php");
			}
                        // товары от боли
			if($n=="about2"){
				include("about2.php");
			}
                        // товары от кашля
			if($n=="about3"){
				include("about3.php");
			}
                        // товары от температуры
			if($n=="about4"){
				include("about4.php");
			}
                        // товары успокоительные
			if($n=="about5"){
				include("about5.php");
			}
			// корзина
			if($n=="kor"){
				include("korzina.php");
			}
			// контакты
			if($n=="cont"){
			include("contacts.html");
			}
			
                        // дсотавка
			if($n=="dost"){
			include("dos.php");
			}
						
			?>
        
                       </div>
                				<div id="footer" class="left full">
                    <div id="footer-alpha" class="left column-1">
                        <div class="left column-1-inner position-relative">
                            <ul class="position-absolute bottom-0 no-margin no-padding">
                                <li>© 2014</li>
                                <li> Воеводин Андрей
                            </li></ul>
                        </div>
                    </div>
                    <div id="footer-beta" class="right column-1">
                        <div class="left column-1-inner position-relative">
                            <ul class="position-absolute bottom-0 no-margin no-padding">
                                <li><a href="#top" class="top">Вверх</a></li>
                                
                                
                                <li><a href="http://apteka-74.ru/dostavka/">Условия доставки</a></li>
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?
$end_time = microtime(); 
$end_array = explode(" ",$end_time); 
$end_time = $end_array[1] + $end_array[0]; 
// вычитаем из конечного времени начальное 
$time = $end_time - $start_time; 

?>
