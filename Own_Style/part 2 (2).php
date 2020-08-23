<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>part 1</title>
<style type="text/css">

#slideshow {
	
	width:640px;
	height:263px;
	background:transparent ;
	position:relative;
}
#slideshow #slidesContainer {
  margin:0 auto;
  width:560px;
  height:263px;
  overflow:auto; 
  position:relative;
}
#slideshow #slidesContainer .slide {
  margin:0 auto;
  width:540px; 
  height:263px;
}

.control {
  display:block;
  width:39px;
  height:263px;
  text-indent:-10000px;
  position:absolute;
  cursor: pointer;
}
#leftControl {
  top:0;
  left:0;
  background:transparent url(img%202/control_left.png) no-repeat 0 0;
}
#rightControl {
  top:0;
  right:0;
  background:transparent url(img%202/control_right.png) no-repeat 0 0;
}


* {
  margin:0;
  padding:0;
  font:normal 11px Verdana, Geneva, sans-serif;
  color:#00F;
}
a {
  color: #fff;
  font-weight:bold;
  text-decoration:none;
}
a:hover {
  text-decoration:underline;
}
body {
    background:transparent;
}
#pageContainer {
  margin:0 auto;
  width:960px;
}
.slide img {
	float: none;
	margin:0 34% 0 35%;
}
#footer {
  height:100px;
}
#footer p {
  margin:30px 0 0 0;
  display:block;
  width:560px;
  height:40px;
}
</style>
<script type="text/javascript" src="../js/jquery-1.5.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  var currentPosition = 0;
  var slideWidth = 560;
  var slides = $('.slide');
  var numberOfSlides = slides.length;

  $('#slidesContainer').css('overflow', 'hidden');

  slides
    .wrapAll('<div id="slideInner"></div>')
	.css({
      'float' : 'left',
      'width' : slideWidth
    });

  $('#slideInner').css('width', slideWidth * numberOfSlides);

  $('#slideshow')
    .prepend('<span class="control" id="leftControl">Clicking moves left</span>')
    .append('<span class="control" id="rightControl">Clicking moves right</span>');

  manageControls(currentPosition);

  $('.control')
    .bind('click', function(){
	currentPosition = ($(this).attr('id')=='rightControl') ? currentPosition+1 : currentPosition-1;
    
    manageControls(currentPosition);
    $('#slideInner').animate({
      'marginLeft' : slideWidth*(-currentPosition)
    });
  });

  function manageControls(position){
	if(position==0){ $('#leftControl').hide() } else{ $('#leftControl').show() }
    if(position==numberOfSlides-1){ $('#rightControl').hide() } else{ $('#rightControl').show() }
  }	
});
</script>
<?php

$db = mysql_connect("localhost","root","");
mysql_select_db("enigmer",$db);

$result = mysql_query("SELECT * FROM pro",$db); // ~ order by id limit 2") вместо 2 можно вывести переменную которая ограничивает выводимые на экран количество строк 
$myrow = mysql_fetch_array($result);
?>

</head>
<body>
<div id="pageContainer">
  <div id="slideshow">
    <div id="slidesContainer">
<?
do
{
			 echo "
	<div class=\"slide\">
		$myrow[photo]
	</div>";

}
while ($myrow = mysql_fetch_array($result));

?>

  </div>
</div>
</div>
</body>
</html>
