<?php 
 require_once ("templates/top.php");
     // Число сообщений на странице
      $pnumber = 10;
      // Число ссылок в постраничной навигации
      $page_link = 2;
      // Объявляем объект постраничной навигации
      $obj = new pager_mysql($tbl_news,
                             "WHERE url  = 'news' AND hide = 'show'",
                             "ORDER BY id_news DESC",
                             $pnumber,
                             $page_link);
      // Получаем содержимое текущей страницы
      $news = $obj->get_page();
	if (!empty($news))
	{
?>
<table border=0 class="pictab" cellpadding=0 cellspacing=0>
<?php

			   for($i = 0; $i < count($news); $i++)
				 {

					 echo "<tr>";
 
					 echo "<td class='apok' align=left>";
?>
<div class="copyright" id="momore" align="left">
<?php echo "<span class='teter'>".$news[$i]['putdate']."</span> ";?>
 <b> <?php echo $news[$i]['name'] ?> </b> 
 </div> 
<?php
echo $news[$i]['body'];
					 echo "</td>";
 
					 echo "</tr>";
 
                 }
?>
</table>
<?php
      echo "<div class=main_txt align=center>";
      echo $obj;
      echo "</div>";
?>
<?php
   	}
	else
	{
	echo "Актуальных новостей на данный момент нет.";
	}
 require_once ("templates/bottom.php");
?>