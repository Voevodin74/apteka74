$text_zaprosa = 'select count(id) from med';
$zapros = mysql_query($text_zaprosa);
$massive = mysql_fetch_array($zapros);
$total = $massive['count(id)'];
?> 
</div>
</div>
тут наверное можно и без описания
прост
файл about.php закончился
слееееедующий файл - это about2.php
тут значит будут находится товары от боли
лекарства всякие
тут все тоже самое,но распишим чтобы у тебя было много коммитов
начинам
первый коммит
<meta name="keywords" content="аптека доставка,
аптека на дом,
аптека онлайн,
аптеки поиск лекарств,
доставка лекарств,
доставка лекарств на дом,
заказ лекарств,
заказать лекарства,
заказать препарат,
интернет аптека,
лекарства в аптеках,
лекарства купить,
лекарства на дом,
наличие в аптеках,
наличие лекарств в аптеках,
поиск лекарств,
цены на лекарства,
лекарства от боли, 
от боли, болит, что если болит,
<?php $metatag ?>
" />
<div id="grid-4" class="left full">
<div id="grid-4-inner" class="left full">
<?
<div id="grid-4" class="left full">
<div id="grid-4-inner" class="left full">
<?
error_reporting(0);
$over = 16; 
if(empty($start)) { $start = 0; }//Это условие нам необходимо для начальной страницы
$text_zaprosa = 'select * from `med` where med_cat=3 order by `id` LIMIT '.$start.','.$over.'';
$zapros = mysql_query($text_zaprosa);
if(mysql_errno()==0)
{
while($massive = mysql_fetch_array($zapros))
{
echo "
<div class='product left position-relative margin-right-1'>
<p class='no-margin position-absolute bottom-20 left-20'>
<a href=http://apteka-74.ru/buy/".htmlspecialchars($massive['id']).">".htmlspecialchars($massive['med_name'])." <img src=http://apteka-74.ru/img_files/kor.png width=15 height=15><br>".htmlspecialchars($massive['med_price'])." руб </p> 
<img src=".htmlspecialchars($massive['med_img'])." width=230 height=150> 
</a>
</div>
