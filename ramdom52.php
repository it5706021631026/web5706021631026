<html>
 <head>
   <meta charset="utf-8">
 </head>
 <body bgcolor="#FFF8DC">
 <body>
    <?php
		$number=array();
		echo "<form>";
		echo "<table align='center' width='350'>";
		echo "<table border='1' align='center' width='350'>";
		echo "<tr>";
		echo "<td align='center' colspan='4' bgcolor='#CDB38B'><big>Random ตัวเลข 1 ถึง 52 โดยไม่ซ้ำกัน</big></td>";
		echo "<td align='center' colspan='4'>Random ตัวเลข 1 ถึง 52 โดยไม่ซ้ำกัน</td>";
		echo "</tr>";
			for($n=1;$n<=13;$n++){
				echo "<tr>";
					for($n2=1;$n2<=4;$n2++){
						$rand=mt_rand(1,52);
							while(true){
								if(!isset($number[$rand])){
									$number[$rand]=$rand;
									break;
								}
								else $rand=mt_rand(1,52);
							}
								if($number[$rand]%2==0)
									echo "<td align='center' bgcolor='#ff7e00'>";
								elseif($number[$rand]%3==0)
									echo "<td align='center' bgcolor='#ffae00'>";
								elseif($number[$rand]%7==0)
									echo "<td align='center' bgcolor='#ffcc00'>";
								else
									echo "<td align='center' bgcolor='#fff000'>";
									echo "<big>".$number[$rand]."</big>";
									echo "<td align='center'>";
									echo $number[$rand];
									echo "</td>";
					}
					echo "</tr>";
			}
			echo "</table>";
			echo "</form>";
   ?>
 </body>
 </html>