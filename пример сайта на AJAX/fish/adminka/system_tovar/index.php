<?php

  error_reporting(E_ALL & ~E_NOTICE);

  // Устанавливаем соединение с базой данных
  require_once("../../config/config.php");
  // Подключаем блок авторизации
  require_once("../utils/security_mod.php");
  // Подключаем SoftTime FrameWork
  require_once("../../config/class.config.dmn.php");
  // Подключаем блок отображения текста в окне браузера
  require_once("../utils/utils.print_page.php");

  // Данные переменные определяют название страницы и подсказку.
  $title = 'Управление блоком "Текстовое наполнение сайта"';
  $pageinfo = '<p class=help>Здесь можно добавить
               новостной блок, отредактировать или
               удалить уже существующий блок.</p>';

  // Включаем заголовок страницы
  require_once("../utils/top.php");

  try
  {
    // Количество ссылок в постраничной навигации
    $page_link = 3;
    // Количество позиций на странице
    $pnumber = 20;
    // Объявляем объект постраничной навигации
    $obj = new pager_mysql($tbl_news,
                           "WHERE lang = 'ru' AND url !='news'",
                           "ORDER BY id_news DESC",
                           $pnumber,
                           $page_link);
 
    // Получаем содержимое текущей страницы
    $news = $obj->get_page();
    // Если имеется хотя бы одна запись - выводим 
    if(!empty($news))
    {
      ?>
      <table width="100%" 
             class="table" 
             border="0" 
             cellpadding="0" 
             cellspacing="0">      
        <tr class="header" align="center">
          <td>Наименование</td>
          <td width=200px>Действия</td>
        </tr>
      <?php
      for($i = 0; $i < count($news); $i++)
      {
        // Если новость отмечена как невидимая (hide='hide'), выводим
        // ссылку "отобразить", если как видимая (hide='show') - "скрыть"
        $colorrow = "";
        $url = "?id_news={$news[$i][id_news]}&page=$page";
        if($news[$i]['hide'] == 'show')
        {
          $showhide = "<a href=newshide.php$url 
                          title='Скрыть новость в блоке новостей'>
					   <img src='../utils/img/folder_locked.gif' border=0 align='absmiddle' />
                       Скрыть</a>";
        }
        else
        {
          $showhide = "<a href=newsshow.php$url 
                          title='Отобразить новость в блоке новостей'>
					   <img src='../utils/img/show.gif' border=0 align='absmiddle' />
                       Отобразить</a>";
          $colorrow = "class='hiddenrow'";
        }
        // Проверяем наличие изображения
        if($news[$i]['urlpict'] != '' && 
           $news[$i]['urlpict'] != '-' && 
           is_file("../../".$news[$i]['urlpict']))
        {
        $url_pict = "<b><a href=../../{$news[$i][urlpict]}>есть</a></b>";
        }
        else $url_pict = "нет";
        $news_url="";
        if (!empty($news[$i]['url']))
        {
          $news_url = "<br><b>Ссылка:</b> 
                       <a href='http://".$_SERVER['HTTP_HOST']."/{$news[$i][url]}'>
                         ".$_SERVER['HTTP_HOST']."{$news[$i][urltext]}</a>";
          if(empty($news[$i]['urltext']))
          {
            $news_url = "<br><b>Ссылка:</b> 
                         <a href='http://".$_SERVER['HTTP_HOST']."/{$news[$i][url]}.php' target='_blank'>
                            ".$_SERVER['HTTP_HOST']."/{$news[$i][url]}.php</a>";
          }
        }

        // Преобразуем дату из формата MySQL YYYY-MM-DD hh:mm:ss
        // в формат DD.MM.YYYY hh:mm:ss
        list($date, $time) = explode(" ", $news[$i]['putdate']);
        list($year, $month, $day) = explode("-", $date);
        $news[$i]['putdate'] = "$day.$month.$year $time";

        // Выводим новость
        echo "<tr $colorrow >
                <td>
                 <h1>{$news[$i][name]}</h1><br> $news_url </td>
                <td class='menu_right' valign='top' align=left>
				$showhide
				<a href=newsedit.php$url 
                title='Редактировать текст'>
			    <img src='../utils/img/kedit.gif' border=0 align='absmiddle' />Редактировать</a></td>
              </tr>";
      }
      echo "</table><br>";
    }
  
    // Выводим ссылки на другие страницы
    echo $obj;
  }
  catch(ExceptionMySQL $exc)
  {
    require("../utils/exception_mysql.php"); 
  }

  // Включаем завершение страницы
  require_once("../utils/bottom.php");

echo "";
?>