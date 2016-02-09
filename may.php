<!DOCTYPE html>
<html>
	<head>
		<title>may_profile</title>
		<meta charset="UTF-8">
		<link rel ="stylesheet" href="4.css">
	</head>
	<body>
		<div class="wrapper">
			<header><center><br><br><br><h1>Profile</h1></br></br></br></center></header>
			<nav></nav>
					      <p>
<?php

	$T = $_GET['T'];
	$n1 = $_GET['n1'];
	$n2 = $_GET['n2'];
	$n3 = $_GET['n3'];
	$d = $_GET['d'];
	$m = $_GET['m'];
	$y = $_GET['y'];
	$a = $_GET['a'];
	$r = $_GET['r'];
	$na = $_GET['na'];
	$re = $_GET['re'];
	$h = $_GET['h'];
	$w = $_GET['w'];
	$ad = $_GET['ad'];
	$p = $_GET['p'];
	$e = $_GET['e'];
	$j = $_GET['j'];
	$t = $_GET['t'];
	$hb = $_GET['hb'];
	
	echo "<p>";
	echo "Title : " ;
	if($T == "1") echo Mr."<br/>";
	if($T == "2") echo Mrs."<br/>";
	if($T == "3") echo Miss."<br/>";
	if($T == "4") echo Ms."<br/>";
	if($T == "5") echo Dr."<br/>";

	echo "Fritname : Lasename(Nickname) : $n1 : $n2   ( $n3 )</br>" ;
	
	echo "Birthday :  $d  $m  $y</br>" ;
	
	echo "Age : $a " ;
	if($a > 100 ) echo "error<br/>";
    
	echo "Race : $r </br>" ;
	
	echo "Nationality  : $na</br>" ;
	
	echo "Religion : $re </br>" ;
	echo "Height : $h C.M.</br>" ;
	echo "Weight : $w K.M.</br>" ;
	echo "Address  : $ad</br>" ;
	echo "Phone : $p</br>" ;
	echo "E-Mail : $e</br>" ;
	echo "Job : $j</br>" ;
	echo "Talent : $t</br>" ;
	echo "Hobby : $hb</br>" ;
?>						  
						  </p>
			<footer>
			</footer>
		</div>
	</body>
</html>