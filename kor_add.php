<?php
include("functions.php"); 
session_start();
// считываем текущее время 
$start_time = microtime(); 
// разделяем секунды и миллисекунды (становятся значениями начальных ключей массива-списка) 
$start_array = explode(" ",$start_time); 
//стартовое время 
$start_time = $start_array[1] + $start_array[0];

//идентификатор сессии переводим в переменную
$ses_id = session_id();
$nomer = mysql_real_escape_string($_GET['nomer']);
if($_GET['do']=='approve'&&$nomer>0) {
$text_zaprosa = "select * from `med` where `id`='$nomer'";
$zapros = mysql_query($text_zaprosa);
if(mysql_errno()==0)
{
while($massive = mysql_fetch_array($zapros))
{

$result = mysql_query("SELECT id FROM med WHERE `id`='$nomer'");
//делаем массив
$_SESSION['id'] = array();
while($myrow = mysql_fetch_assoc($result))
$_SESSION['id'][] = $myrow['id'];
foreach ($_SESSION['id'] as $value) {

}
$med_name = stripslashes($massive['med_name']);
$med_price = stripslashes($massive['med_price']);
формируем запрос к бд
$query="insert into `korzina` values (\"\",'$ses_id','$med_name','$med_price','$nomer')";
mysql_query($query); unset($query,$curdate);
}
}
}

echo '</div>';
echo '</div>';
echo '</div>';

print "<div class=\"alert\"><b>Товар добавлен в корзину</b>
<p /><a href=http://apteka-74.ru/index.php>Вы будете перенаправленные на главную страницу</a></div>";

?>
