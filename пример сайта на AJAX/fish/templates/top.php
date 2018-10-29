<?php
  // Подключаем SoftTime FrameWork
  require_once("config/class.config.php");
  require_once("config/config.php");
 
$file = $_GET['url'];
if (!$_GET['url'])
{
$file = "index";
}
          $query = "SELECT * FROM $tbl_news WHERE url = '".$file."' AND hide = 'show'";
          $adr = mysql_query($query);
          if (!$adr) exit("Ошибка при обращении к блоку статей");
          $tbl_users = mysql_fetch_array($adr);
		  
$im['ryba_natyralnaya'] = "<img width=115px align=center src='files/im1.png' />";
$im['presservy'] = "<img width=115px align=center src='files/im3.png' />";
$im['ryba_solonaya'] = "<img width=115px align=center src='files/im2.png' />";
$im['ryba_kopchenaya'] = "<img width=115px align=center src='files/im4.png' />";
$im['kapusta'] = "<img width=115px align=center src='files/im6.png' />";
$im['ryba_vyalenaya'] = "<img width=115px align=center src='files/im5.png' />";
$im['conservy'] = "<img width=115px align=center src='files/im7.png' />";
$im['rybnaya_kylinaria'] = "<img width=115px align=center src='files/im8.png' />";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8;charset=utf-8" />
<title>КУП "Гомельский РЫБОКОМПЛЕКС"</title>
<meta name="description" content="Web Application" />
<meta name="keywords" content="web, application" />
<link href="files/main0000.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="content">
<div class="logo"> <img src="files/logo.png" width=230px /> </div>
<div id="header">
  <table id="menu" width=100%>
    <td >&nbsp;</td>
      <td width=14%><a href="index.php">О компании</a></td>
      <td width=14%><a href="#">Продукция</a></td>
      <td width=14%><a href="#">Контакты</a></td>
      <td width=14%><a href="news.php">Новости</a></td>
      <td width=14%><a href="#">Вакансии</a></td>
      <td width=14%><a href="#">Достижения</a></td>
  </table>
</div>
<div id="teaser">
  <div class="wrap">
    <div id="image"></div>
    <div class="box">
      <div class="riva"> Попробуйте нашу продукцию, <br />
        и узнайте вкус здоровья, <br />
        красоты и долголетия</div>
      <br style="clear:both" />
      <br />
      <br />
      <div class="mainhh"> Коммунальное унитарное предприятие<br />
      <span class="bigmain">"Гомельский Рыбокомплекс"</span> </div>
    </div>
  </div>
</div>
<div class="dobro">
<?php
if (!$_GET)
{
?>
Добро пожаловать на сайт!
<?php
}
else
{
 echo "<table width=100%><tr><td width=120px align=left> ".$im["$tbl_users[url]"]."</td>";
 echo "<td class='mainname' align=left> <a href='index.php' class='prod'>Продукция</a> -> ".$tbl_users['name']."</td>"; 
 echo "</tr></table>";
}
?>
</div>
<div class="dobroline">

</div>
<div id="bar" align="center">
<?php
if (!$_GET)
{
?>
<table width=990px align="center" cellpadding="0" cellspacing="0">
 <tr align="center">
  <td valign="top" class="workloadcell" id="picim1" width="12%">
    <?php echo $im['ryba_natyralnaya']; ?>
     <div class="workload"><a href="?url=ryba_natyralnaya" class="bara">Рыба натуральная свежемороженная</a></div> 
   </td>
   <td valign="top" class="workloadcell" width="13%">
    <?php echo $im['presservy']; ?>
     <div class="workload"><a href="?url=presservy" class="bara">Пресервы</a></div>
    </td>
   <td valign="top" class="workloadcell" width="13%">
    <?php echo $im['ryba_solonaya']; ?>
     <div class="workload"><a href="?url=ryba_solonaya" class="bara">Рыбопродукция соленая, пряная</a></div>
   </td>
   <td valign="top" class="workloadcell" width="12%">
    <?php echo $im['ryba_kopchenaya']; ?>
     <div class="workload"><a href="?url=ryba_kopchenaya" class="bara">Рыбопродукция холодного&nbsp;и горячего&nbsp;копчения, подкопчения</a></div>
    </td>
   <td valign="top" class="workloadcell" width="12%">
    <?php echo $im['kapusta']; ?>
     <div class="workload"><a href="?url=kapusta" class="bara">Капуста&nbsp;морская и&nbsp;салаты</a></div>
    </td>
   <td valign="top" class="workloadcell" width="13%">
    <?php echo $im['ryba_vyalenaya']; ?>
     <div class="workload"><a href="?url=ryba_vyalenaya" class="bara">Рыбопродукция вяленая</a></div>
    </td>
   <td valign="top" class="workloadcell" width="12%">
   <?php echo $im['conservy']; ?>
     <div class="workload"><a href="?url=conservy" class="bara">Консервы</a></div>
    </td>
   <td valign="top" class="workloadcell" width="13%">
    <?php echo $im['rybnaya_kylinaria']; ?>
     <div class="workload"><a href="?url=rybnaya_kylinaria" class="bara">Рыбная кулинария</a></div>
  </td>
 </tr>
</table>
<?php
}
?>
</div>
<div class="fonn">
<div class="wrap">
<!--
  <div class="col">
    <p id="im1"><a href="">Рыба натуральная свежемороженная</a></p>
    <p id="im2"><a href="">Рыбопродукция соленая, пряная</a></p>
    <p id="im3"><a href="">Пресервы</a></p>
    <p id="im4"><a href="">Рыбопродукция холодного копчения, подкопчения</a></p>
    <p id="im5"><a href="">Рыбопродукция горячего копчения</a></p>
    <p id="im6"><a href="">Рыбопродукция вяленая</a></p>
    <p id="im7"><a href="">Капуста морская и салаты</a></p>
    <p id="im8"><a href="">Консервы</a></p>
    <p id="im9"><a href="">Рыбная кулинария</a></p>
  </div>-->
  <div class="col2">
	 <div class="price">
	 <div class="price"><a href="price.xls"><img src="files/predlozhenia.png" /></a></div>	
     <div class="price"><a href="price.xls"><img src="files/price.png" /></a></div>	
	 <br style="clear:both">
<?php
if ($_GET)
{
?>
	 <a href="?url=ryba_natyralnaya" class="bara">Рыба натуральная свежемороженная</a><br />
	 <a href="?url=presservy" class="bara">Пресервы</a><br />
	 <a href="?url=ryba_solonaya" class="bara">Рыбопродукция соленая, пряная</a><br />
	 <a href="?url=ryba_kopchenaya" class="bara">Рыбопродукция холодного&nbsp;и горячего&nbsp;копчения, подкопчения</a><br />
	 <a href="?url=kapusta" class="bara">Капуста&nbsp;морская и&nbsp;салаты</a><br />
	 <a href="?url=ryba_vyalenaya" class="bara">Рыбопродукция вяленая</a><br />
	 <a href="?url=conservy" class="bara">Консервы</a><br />
	 <a href="?url=rybnaya_kylinaria" class="bara">Рыбная кулинария</a><br />
	 <a href="/" class="bara">НА ГЛАВНУЮ</a><br />
<?php
}
?>
	 </div>	