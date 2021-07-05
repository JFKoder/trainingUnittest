
<?php
require_once('Klassentreff.php');

$A1 = new Klassentreff;
$A1->neueKlasse("A1");

$B1 = new Klassentreff;
$B1->neueKlasse("B1 - Sonderklasse");

?>


<html>

<head>
	<title>UnitTest</title>
</head>

<body>
	
<?php
$A1->halloKlasse();
echo "<br>";
$B1->halloKlasse();
?>


</body>

</html>