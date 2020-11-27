<html>
<head>The Cookie Fortune Teller</head>
 <body>
<?php 

exec('/usr/games/fortune', $output);

echo "<p> <h2>";
for ($i = 0; $i < count($output); $i++) {
	echo $output[$i];
	echo "<br>";
}
echo "</h2>";
exit;
?>
 </body>
</html>

