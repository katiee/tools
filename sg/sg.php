<html>
<head>
<meta charset="UTF-8">
<title>舒尔特表 Schulte Grid</title>
<style>
 table,td{border:1px solid blue;}
 table{width:500px; height:600px; margin:auto;}
 td{font-size:200%;text-align:center;}
</style>
</head>
<body>
<p>
<?php
	$n = 5;
	$arr = array();
	for($i=1; $i<=$n*$n; $i++) {
		$arr[$i-1]=$i;
	}
	shuffle($arr);
//print_r($arr);

	$str = "<table>";
	for($i=0; $i<$n; $i++) {
		$str .= "<tr>";
		for($j=0; $j<$n; $j++){
			$str .= "<td>".$arr[$i*$n+$j] ."</td>";
		}
		$str .= "</tr>";
	}
	$str .= "</table>";
	echo $str;
?>
</script>
</body>
</html>