<?
include("functions.php"); 
session_start();
$ses_id = session_id(); 
$nomer = mysql_real_escape_string($_GET['nomer']);
if($_GET['do']=='approve'&&$nomer>0) {
$text_zaprosa = "UPDATE `korzina` SET `korzina_session`='FAILURE' where `korzina_session`='$ses_id' and `korzina_id`=$nomer";
$zapros = mysql_query($text_zaprosa);

print "<div class=\"alert\"><b>Товар удален из корзины!</b>
<p /><a href=http://apteka-74.ru/index.php>Вы будете автоматически перенаправленны на главную страницу</a></div>";

}

?>
