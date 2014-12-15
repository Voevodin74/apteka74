<div id="grid-2" class="left full background-offset-single">
                        <div id="grid-2-inner" class="left full">
                           <div class="column-2 left">
                               <div class="column-2-inner left-inner padding-20">
           
<p><b>Список Ваших покупок:</b></p>


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
        {

                while($massive = mysql_fetch_array($zapros))
                      {
//поочередно заносим идентификаторы в массив
$myarray[] = $massive['korzina_med_id'];                   
$k = $massive['korzina_price'];      
echo "
<p>".htmlspecialchars($massive['korzina_name'])." ".htmlspecialchars($massive['korzina_price'])."  рублей  <a href=kor_del.php?do=approve&nomer=".htmlspecialchars($massive['korzina_id']).">[x]</a></p>  
";

 } 
 

}

$text_zaprosa2 = "select sum(korzina_price) as kprice from korzina where korzina_session='".$ses_id."'";
$zapros2 = mysql_query($text_zaprosa2);
if(mysql_errno()==0)
        {

                while($massive = mysql_fetch_array($zapros2))
                      {
echo "
<p>ИТОГО: ".htmlspecialchars($massive['kprice'])." рублей</p>
";

 } 
			
}

$zid = serialize( $myarray );
$_SESSION['zid'] = $zid;
?> 

 </div>
          </div>
                              
                           <div class="column-2 right">
                               <div class="column-2-inner left-inner padding-20">
          
<p><b>Оформление заказа:</b></p>

<form action="kor_add2.php" method="POST">
<p>Имя:</p>
<p><input type="text" name="subject" size="20" maxlenght="20" /></p>
<p>Телефон: (Формат ввода: 79525178522)</p>
<p><input type="text" name="minitext" size="20" maxlenght="20" /></p>
<p>
<input type="submit" value="Отправить" class="button" /></p>
</form>
                     </div>
                           </div>
                        </div>
                    </div>
            			
