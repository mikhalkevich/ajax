 </div>
</div>

<div id="footer">
  <p>Designed by <a href="http://mikhalkevich.colony.by" alt="разработка сайтов на AJAX" title="разработка сайтов на AJAX - Михалькеви Александр" style="color:white">mikhalkevich</a>  &copy; Copyright 2010 &middot; <a href="http://partnerinfo.by" style="color:white">partnerinfo.by</a> &middot; All Rights Reserved</p>
</div>
</div>
</div>
<?php
 if (!strstr($_SERVER['HTTP_USER_AGENT'],'MSIE')) 
  { 
?>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load("jquery", "1.4.0");
    </script>
<script type="text/javascript">
$.ajaxSetup({
	   "type":"GET",
	   "url":"index.php",
	   "success":function(data){
	   $("body")
	   .html(data)}
	});
	$("a.bara").eq(0).attr("href", "#")
	  .bind("click", function(){
	  $.ajax({
	   "data":"url=ryba_natyralnaya",
	})
	});
	$("a.bara").eq(1).attr("href", "#")
	  .bind("click", function(){
	  $.ajax({
	   "data":"url=presservy",
	})
	});
	$("a.bara").eq(2).attr("href", "#")
	  .bind("click", function(){
	  $.ajax({
	   "data":"url=ryba_solonaya",
	})
	});
	$("a.bara").eq(3).attr("href", "#")
	  .bind("click", function(){
	  $.ajax({
	   "data":"url=ryba_kopchenaya",
	})
	});
	$("a.bara").eq(4).attr("href", "#")
	  .bind("click", function(){
	  $.ajax({
	   "data":"url=kapusta",
	})
	});
	$("a.bara").eq(5).attr("href", "#")
	  .bind("click", function(){
	  $.ajax({
	   "data":"url=ryba_vyalenaya",
	})
	});
	$("a.bara").eq(6).attr("href", "#")
	  .bind("click", function(){
	  $.ajax({
	   "data":"url=conservy",
	})
	});
	$("a.bara").eq(7).attr("href", "#")
	  .bind("click", function(){
	  $.ajax({
	   "data":"url=rybnaya_kylinaria",
	})
	});
</script>
<?php
 }
?>
</body>
</html>