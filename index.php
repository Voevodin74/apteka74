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
тут будет место для верстки
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
?>
место для футера
