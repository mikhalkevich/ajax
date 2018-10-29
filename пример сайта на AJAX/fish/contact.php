<?php
 require_once ("templates/top.php");
          $query = "SELECT * FROM $tbl_news WHERE url = '".$file."' AND hide = 'show'";
          $adr = mysql_query($query);
          if (!$adr) exit("Ошибка при обращении к блоку статей");
          $tbl_users = mysql_fetch_array($adr);
?>
<h2><?php echo $tbl_users['name']; ?></h2>
<?php echo $tbl_users['body']; ?>
<div class="avatar" align=left>
<div id="content" class="tablemain">

<?php
    $name        = new field_text("name",
                                  "Тема сообщения",
                                  true,
                                  $_POST['name']);
	$email       = new field_text("email",
                                  "Ваш контактый e-mail",
                                  true,
                                  $_POST['email']);
	$fio       = new field_text("fio",
                                  "ФИО",
                                  true,
                                  $_POST['fio']);
	$phone       = new field_text("phone",
                                  "Телефон",
                                  true,
                                  $_POST['phone']);
	$editor1 = new field_textarea("editor1",
                "Содержение",
				 true,
                 $_POST['editor1']);
    $form = new form(array(
	                       "name"    => $name, 
                           "editor1" => $editor1, 
						   "fio"     => $fio,
						   "phone"   => $phone,
                           "email"   => $email
						   ), 
                     "Отправить",
                     "field");

    // Обработчик HTML-формы
    if(!empty($_POST))
    {
      // Проверяем корректность заполнения HTML-формы
      // и обрабатываем текстовые поля
      $error = $form->check();
      if(empty($error))
      {
        // Скрытая или открытая директория
        if($form->fields['hide']->value) $showhide = "подписка на новости";
        else $showhide = "";
        // Формируем SQL-запрос на добавление
        // новостного сообщения
$to      = 'zms08@mail.ru';
$subject = "Сообщение с сайта от {$form->fields[fio]->value}";
$message = "
<table cellpadding=0 cellspacing=0 width=100% border=0>
<tr>
<td bgcolor='#d18c53'>
<p align='center'><font color='#fcfbcd' size='+2'> 
Пользователь: <b>{$form->fields[fio]->value}</b>  </font></b></p>
<p align='center'><font color='#fcfbcd' size='+2'> 
Контактный телефон: <b>{$form->fields[phone]->value}</b>  </font></b></p>
<p align='center'><font color='#fcfbcd' size='+2'> 
Контактный e-mail: <b>{$form->fields[email]->value}</b>  </font></b></p>
<p align='center'><font color='#fcfbcd' size='+2'> 
Откуда узнал: <b>{$form->fields[from]->value}</b>  </font></b></p>
<p>
{$form->fields[fio]->value} ".$showhide."
</p>
</td>
</tr>
</table>
<p>Текст сообщения</p>
<p align='left'><font color='#d18c53' size='+2'> 
 <em>{$form->fields[editor1]->value}</em>  </font></p>
<br /><br />
		 ";
$headers = 'From: vestkul@tut.by' . "\r\n" .
    'Reply-To: vestkul@tut.by' . "\r\n" .
	'Content-Type: text/html; charset=utf-8' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers); 
        ?>
		<script>
		 document.location.href="thankyoupage.php";
		</script>
		<?php
      }
    }
 // Выводим сообщения об ошибках, если они имеются
    if(!empty($error))
    {
      foreach($error as $err)
      {
        echo "<span style=\"color:red\">$err</span><br>";
      }
    }
?>
<div class="table_user">
* поля, отмеченные звездочкой, обязательны для заполнения
<?
    // Выводим HTML-форму 
    $form->print_form();
?>
</div>
</div>
</div>
<?php
 require_once ("templates/bottom.php");
?>
