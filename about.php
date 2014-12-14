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
"; 
$counting = $massive['count(id)'];

}
}
else { echo 'Не работает <!— '.mysql_errno().": ". mysql_error() .' —>'; }
$text_zaprosa = 'select count(id) from med';
$zapros = mysql_query($text_zaprosa);
$massive = mysql_fetch_array($zapros);
$total = $massive['count(id)'];
?> 
</div>
</div>
error_reporting(0);
$over = 16; 
if(empty($start)) { $start = 0; }
$text_zaprosa = 'select * from `med` where med_cat=2 order by `id` DESC LIMIT '.$start.','.$over.'';
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
"; 
$counting = $massive['count(id)']; 
}
}
else { echo 'Не работает <!— '.mysql_errno().": ". mysql_error() .' —>'; }
$text_zaprosa = 'select count(id) from med';
$zapros = mysql_query($text_zaprosa);
$massive = mysql_fetch_array($zapros);
$total = $massive['count(id)'];
?> 
</div>
</div>
