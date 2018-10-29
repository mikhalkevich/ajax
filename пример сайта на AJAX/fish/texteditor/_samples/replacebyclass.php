<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Replace Textareas by Class Name - CKEditor Sample</title>
	<meta content="text/html; charset=utf-8" http-equiv="content-type" />
	<script type="text/javascript" src="texteditor/ckeditor.js"></script>
	<script src="texteditor/_samples/sample.js" type="text/javascript"></script>
	<link href="texteditor/_samples/sample.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<!-- This <div> holds alert messages to be display in the sample page. -->
	<div id="alerts">
		<noscript>
			<p>
				<strong>CKEditor requires JavaScript to run</strong>. In a browser with no JavaScript
				support, like yours, you should still see the contents (HTML data) and you should
				be able to edit it normally, without a rich editor interface.
			</p>
		</noscript>
	</div>
			<label for="editor1">
				Пишем письмо:</label><br />
 
			<?
	        $editor1 = new field_textarea("editor1",
                "",
				 true,
                 $_REQUEST['editor1']);
			$form = new form(array(
	                       "editor1"        => $editor1),
						   "Введите текст",
						   "",
						   "in_input");
			    // Выводим HTML-форму 
            $form->print_form();
			?>
 
	<div id="footer">
		<hr />
	</div>
</body>
</html>
