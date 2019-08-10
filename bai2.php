<!DOCTYPE html>
<html>
<head>
	<title>Bài Tập Về Nhà</title>
</head>
<body>
	<h3 align="center">Bài 1 : Dãy số chẵn từ 1 => 20</h3>
	<h4 align="center">===========================</h4>
<?php 
	for ($i=1; $i < 20; $i++) { 
			if($i % 2 == 0)
			{
				echo "<b><p align='center'>$i </p></b>";
			}
		}
?>
<table border="2" align="center">
	<tr>
		<td align="center" colspan="3"><h3>Bài 2 : Lập bảng cửu chương</h3></td>
	</tr>
	<?php 
		echo "<tr align='center'>";
		for ($i=1; $i <= 3; $i++) { 
		 	echo "<td align='center'>";
				echo "<h3>Bảng Cửu Chương $i</h3>";
				for($j=1;$j<=9;$j++)
				{
					echo "$i x $j = ".$i*$j."<br>";
				}
			echo "</td>";
		}
		echo "</tr>";
		echo "<tr align='center'>";
		for ($i=4; $i <= 6; $i++) { 
		 	echo "<td align='center'>";
				echo "<h3>Bảng Cửu Chương $i</h3>";
				for($j=1;$j<=9;$j++)
				{
					echo "$i x $j = ".$i*$j."<br>";
				}
			echo "</td>";
		}
		echo "</tr>";
		echo "<tr align='center'>";
		for ($i=7; $i <= 9; $i++) { 
		 	echo "<td align='center'>";
				echo "<h3>Bảng Cửu Chương $i</h3>";
				for($j=1;$j<=9;$j++)
				{
					echo "$i x $j = ".$i*$j."<br>";
				}
			echo "</td>";
		}
		echo "</tr>";
	?>
</table>
</body>
</html>
	