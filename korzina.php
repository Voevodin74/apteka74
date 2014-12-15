<?
error_reporting(0);
//больше 5 покупок пользователь не увидит
$over = 5;	
//массив в котором перетягиваем идентификаторы покупок
$myarray = array();

if(empty($start)) { $start = 0; }//Это условие нам необходимо для начальной страницы
//выводим список наших покупок,если совпадает идентификатор сессии

$text_zaprosa = "select * from korzina where korzina_session='".$ses_id."'";
$zapros = mysql_query($text_zaprosa);
if(mysql_errno()==0)

?>
