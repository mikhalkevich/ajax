<?php
  error_reporting(E_ALL & ~E_NOTICE);

  // Если константа DEBUG определена, работает отладочный
  // вариант, в частности выводится подробные сообщения об
  // исключительных ситуациях, связанных с MySQL и ООП
  define("DEBUG", 1);
  // сейчас выставлен сервер локальной машины
  $dblocation = "localhost";
  // Имя базы данных, на хостинге или локальной машине
  $dbname = "partneri_fish";
  // Имя пользователя базы данных
  $dbuser = "partneri_admin";
  // и его пароль
  $dbpasswd = "NOkHHMd1";

  // Аккаунты
  $tbl_accounts         = 'system_accounts';
  // Новости
  $tbl_news             = 'system_news';
   
  // Устанавливаем соединение с базой данных
  $dbcnx = mysql_connect($dblocation,$dbuser,$dbpasswd);
  if(!$dbcnx)
    exit("<P>В настоящий момент сервер базы данных не 
          доступен, поэтому корректное отображение 
          страницы невозможно.</P>" );
  // Выбираем базу данных
  if(! @mysql_select_db($dbname,$dbcnx))
    exit("<P>В настоящий момент база данных не доступна, 
          поэтому корректное отображение страницы 
          невозможно.</P>" );

  @mysql_query("SET NAMES 'utf8'");

  if(!function_exists('get_magic_quotes_gpc'))
  {
    function get_magic_quotes_gpc()
    {
      return false;
    }
  }
?>