<?php
  error_reporting(E_ALL & ~E_NOTICE);

  // ���� ��������� DEBUG ����������, �������� ����������
  // �������, � ��������� ��������� ��������� ��������� ��
  // �������������� ���������, ��������� � MySQL � ���
  define("DEBUG", 1);
  // ������ ��������� ������ ��������� ������
  $dblocation = "localhost";
  // ��� ���� ������, �� �������� ��� ��������� ������
  $dbname = "partneri_fish";
  // ��� ������������ ���� ������
  $dbuser = "partneri_admin";
  // � ��� ������
  $dbpasswd = "NOkHHMd1";

  // ��������
  $tbl_accounts         = 'system_accounts';
  // �������
  $tbl_news             = 'system_news';
   
  // ������������� ���������� � ����� ������
  $dbcnx = mysql_connect($dblocation,$dbuser,$dbpasswd);
  if(!$dbcnx)
    exit("<P>� ��������� ������ ������ ���� ������ �� 
          ��������, ������� ���������� ����������� 
          �������� ����������.</P>" );
  // �������� ���� ������
  if(! @mysql_select_db($dbname,$dbcnx))
    exit("<P>� ��������� ������ ���� ������ �� ��������, 
          ������� ���������� ����������� �������� 
          ����������.</P>" );

  @mysql_query("SET NAMES 'utf8'");

  if(!function_exists('get_magic_quotes_gpc'))
  {
    function get_magic_quotes_gpc()
    {
      return false;
    }
  }
?>