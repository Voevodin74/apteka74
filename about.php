<title>Интернет - аптека</title>
<div id="grid-4" class="left full">
<div id="grid-4-inner" class="left full"><title>Интернет - аптека</title>
<div id="grid-4" class="left full">
<div id="grid-4-inner" class="left full">
<?
error_reporting(0);
$over = 16; 
if(empty($start)) { $start = 0; }//Это условие нам необходимо для начальной страницы
$text_zaprosa = 'select * from `med` where med_cat=1 order by `id` DESC LIMIT '.$start.','.$over.'';
$zapros = mysql_query($text_zaprosa);
if(mysql_errno()==0)
