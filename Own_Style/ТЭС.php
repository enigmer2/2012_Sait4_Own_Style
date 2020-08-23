<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Документ без названия</title>
</head>
<body>
<form enctype="multipart/form-data" action="index.php" method="post" target="_top">
  значение P1 <input name="p1" type="text" />
  значение P2 <input name="p2" type="text" />
  <input type="submit" value="Загрузить" />
</form>
<?
$p1=$_POST['p1'];
$p2=$_POST['p2'];

if ($p1 > $p2){$p1_k = 1;$p2_k = 0;$p1_n = strlen($p1_k);$p2_n = strlen($p2_k);}
else{$p1_k = 0;$p2_k = 1;$p1_n = strlen($p1_k);$p2_n = strlen($p2_k);}

echo <<<EOT
<div style="text-align:right">таблица №1</div>
<br>
<table width="100%" border="1" cellspacing="0"><tr>
  <th scope="col">Алфавит<br>источника</th>
  <th scope="col">Обозначения<br>кодовых слов</th>
  <th scope="col">Вероятность P(Si)</th>
  <th scope="col">Код Хафмена</th>
  <th scope="col">Число символов</th></tr>
  <tr><td align="center">x1</td><td align="center">X1</td><td align="center">$p1</td><td align="center">$p1_k</td><td align="center">$p1_n</td></tr>
  <tr><td align="center">x2</td><td align="center">X2</td><td align="center">$p2</td><td align="center">$p2_k</td><td align="center">$p2_n</td>  </tr>
</table>
<br>
EOT;

$y1=$p1*$p1;
$y2=$p1*$p2;
$y3=$p2*$p1;
$y4=$p2*$p2;

//----------------------------------------------------------------------------
$PRE1= array("1"=>"$y1","2"=>"$y2","3"=>"$y3","4"=>"$y4");
print_r($PRE1);								echo "исходный<br>";

function TEC($PRE1,$m)
{
	for ($i=0;$i<$m;$i++){
	arsort($PRE1);
	print_r($PRE1);
end($PRE1);									echo "сорт.<br>";
$DB1 = each($PRE1);
@$DB1 = array_pop ($DB1);
	print_r($DB1); 							echo " => 0<br>"; 
@$var1 = array_pop ($PRE1);//1 раз
end($PRE1);
$DB2 = each($PRE1);
@$DB2 = array_pop ($DB2);
	print_r($DB2); 							echo " => 1"; 
@$var2 = array_pop ($PRE1);//2 раз
reset($PRE1);								echo "<br> сумма $DB1 + $DB2 = ";
$varS = $var1 + $var2;
	print_r($varS);							echo "<br><hr align=\"left\" width=\"800\">";
$PRE2= array("{$DB1}.{$DB2}"=>"$varS");
$PRE1 = $PRE1 + $PRE2;
	print_r($PRE2);							echo "<br>";
	print_r($PRE1);							echo "<br>";
	}
}

echo TEC($PRE1,3);

	
//----------------------------------------------------------------------------

echo <<<EOT
<div style="text-align:right">таблица №2</div><br>
<table width="100%" border="1" cellspacing="0"><tr>
    <th scope="col">Алфавит<br>источника</th>
    <th scope="col">Обозначения<br>кодовых слов</th>
    <th scope="col">Вероятность P(Si)</th>
    <th scope="col">Код Хафмена</th>
    <th scope="col">Число символов</th></tr>
	<tr><td align="center">x1 &middot x1</td><td align="center">Y1</td><td align="center">$y1</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
	<tr><td align="center">x1 &middot x2</td><td align="center">Y2</td><td align="center">$y2</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
	<tr><td align="center">x2 &middot x1</td><td align="center">Y3</td><td align="center">$y3</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
	<tr><td align="center">x2 &middot x2</td><td align="center">Y4</td><td align="center">$y4</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
</table>
<br>
EOT;


$z1=$p1*$p1*$p1;
$z2=$p1*$p1*$p2;
$z3=$p1*$p2*$p1;
$z4=$p1*$p2*$p2;
$z5=$p2*$p1*$p1;
$z6=$p2*$p1*$p2;
$z7=$p2*$p2*$p1;
$z8=$p2*$p2*$p2;


echo <<<EOT
<div style="text-align:right">таблица №3</div>
<br>
<table width="100%" border="1" cellspacing="0"><tr>
    <th scope="col">Алфавит<br>источника</th>
    <th scope="col">Обозначения<br>кодовых слов</th>
    <th scope="col">Вероятность   P(Si)</th>
    <th scope="col">Код Хафмена</th>
    <th scope="col">Число символов</th></tr>
	<tr><td align="center">x1 &middot x1 &middot x1</td><td align="center">Z1</td><td align="center">$z1</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
	<tr><td align="center">x1 &middot x1 &middot x2</td><td align="center">Z2</td><td align="center">$z2</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
	<tr><td align="center">x1 &middot x2 &middot x1</td><td align="center">Z3</td><td align="center">$z3</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
	<tr><td align="center">x1 &middot x2 &middot x2</td><td align="center">Z4</td><td align="center">$z4</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
    <tr><td align="center">x2 &middot x1 &middot x1</td><td align="center">Z5</td><td align="center">$z5</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
	<tr><td align="center">x2 &middot x1 &middot x2</td><td align="center">Z6</td><td align="center">$z6</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
	<tr><td align="center">x2 &middot x2 &middot x1</td><td align="center">Z7</td><td align="center">$z7</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
	<tr><td align="center">x2 &middot x2 &middot x2</td><td align="center">Z8</td><td align="center">$z8</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
</table>
<br>
EOT;

$PRE1= array("1"=>"$z1","2"=>"$z2","3"=>"$z3","4"=>"$z4","5"=>"$z5","6"=>"$z6","7"=>"$z7","8"=>"$z8");
//----------------------------------------------------------------------------
print_r($PRE1);
echo "<br>";


echo TEC($PRE1,7);
//----------------------------------------------------------------------------


$q1=$p1*$p1*$p1*$p1;
$q2=$p1*$p1*$p1*$p2;
$q3=$p1*$p1*$p2*$p1;
$q4=$p1*$p1*$p2*$p2;
$q5=$p1*$p2*$p1*$p1;
$q6=$p1*$p2*$p1*$p2;
$q7=$p1*$p2*$p2*$p1;
$q8=$p1*$p2*$p2*$p2;
$q9=$p2*$p1*$p1*$p1;
$q10=$p2*$p1*$p1*$p2;
$q11=$p2*$p1*$p2*$p1;
$q12=$p2*$p1*$p2*$p2;
$q13=$p2*$p2*$p1*$p1;
$q14=$p2*$p2*$p1*$p2;
$q15=$p2*$p2*$p2*$p1;
$q16=$p2*$p2*$p2*$p2;



echo <<<EOT
<div style="text-align:right">таблица №4</div>
<br>
<table width="100%" border="1" cellspacing="0"><tr>
    <th scope="col">Алфавит<br>источника</th>
    <th scope="col">Обозначения<br>кодовых слов</th>
    <th scope="col">Вероятность   P(Si)</th>
    <th scope="col">Код Хафмена</th>
    <th scope="col">Число символов</th></tr>
<tr><td align="center">x1 &middot x1 &middot x1 &middot x1</td><td align="center">Q1</td><td align="center">$q1</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
<tr><td align="center">x1 &middot x1 &middot x1 &middot x2</td><td align="center">Q2</td><td align="center">$q2</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
<tr><td align="center">x1 &middot x1 &middot x2 &middot x1</td><td align="center">Q3</td><td align="center">$q3</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
<tr><td align="center">x1 &middot x1 &middot x2 &middot x2</td><td align="center">Q4</td><td align="center">$q4</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
<tr><td align="center">x1 &middot x2 &middot x1 &middot x1</td><td align="center">Q5</td><td align="center">$q5</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
<tr><td align="center">x1 &middot x2 &middot x1 &middot x2</td><td align="center">Q6</td><td align="center">$q6</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
<tr><td align="center">x1 &middot x2 &middot x2 &middot x1</td><td align="center">Q7</td><td align="center">$q7</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
<tr><td align="center">x1 &middot x2 &middot x2 &middot x2</td><td align="center">Q8</td><td align="center">$q8</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
<tr><td align="center">x2 &middot x1 &middot x1 &middot x1</td><td align="center">Q9</td><td align="center">$q9</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
<tr><td align="center">x2 &middot x1 &middot x1 &middot x2</td><td align="center">Q10</td><td align="center">$q10</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
<tr><td align="center">x2 &middot x1 &middot x2 &middot x1</td><td align="center">Q11</td><td align="center">$q11</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
<tr><td align="center">x2 &middot x1 &middot x2 &middot x2</td><td align="center">Q12</td><td align="center">$q12</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
<tr><td align="center">x2 &middot x2 &middot x1 &middot x1</td><td align="center">Q13</td><td align="center">$q13</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
<tr><td align="center">x2 &middot x2 &middot x1 &middot x2</td><td align="center">Q14</td><td align="center">$q14</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
<tr><td align="center">x2 &middot x2 &middot x2 &middot x1</td><td align="center">Q15</td><td align="center">$q15</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
<tr><td align="center">x2 &middot x2 &middot x2 &middot x2</td><td align="center">Q16</td><td align="center">$q16</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>
</table>
<br>
EOT;

$PRE1= array("1"=>"$q1","2"=>"$q2","3"=>"$q3","4"=>"$q4","5"=>"$q5","6"=>"$q6","7"=>"$q7","8"=>"$q8","9"=>"$q9","10"=>"$q10","11"=>"$q11","12"=>"$q12","13"=>"$q13","14"=>"$q14","15"=>"$q15","16"=>"$q16");
print_r($PRE1);
echo "исходный<br>";

echo TEC($PRE1,15);?>

</body>
</html>