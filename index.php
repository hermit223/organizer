<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Organizer</title>
</head>
<body>
<?php
$conn = new mysqli("localhost", "root", "", "egzamin6");
if(isset($_POST['wpis']))
{
	$wpis = $_POST['wpis'];
	$sql = "UPDATE zadania SET wpis='$wpis' WHERE dataZadania='2020-08-10'";
	$result = $conn->query($sql);
	$conn->close();
}
?>
<header>
	<div id="baner1">
		<h1>Orgaznizer SIERPIEŃ</h1>
	</div>

<div id="baner2">
	<form action="index.php" method="post">
		<label for="wpis">Zapisz wydarzenia:</label>
		<input type="text" name="wpis" id="wpis">
		<input type="submit" value="OK">
	</form>
	
</div>

<div id="baner3">
	<img src="logo2.png" alt="sierpień" width="120px" height="120px">
</div>
</header>

<main>
<?php
$conn = new mysqli("localhost", "root", "", "egzamin6");
$sql2 = "SELECT dataZadania, miesiac, wpis FROM zadania WHERE miesiac='sierpien'";
if ($conn->connect_errno != 0)
{
	echo "Nie ma połonczenia";
}
else
{
$result2 = $conn->query($sql2);
while($wiersz = $result2->fetch_assoc())
{
$data = $wiersz['dataZadania'];
$wpis = $wiersz['wpis'];
echo '<div>';
echo "<h5>$data</h5>";
echo "<a>$wpis</a>";
echo '</div>';
}
$result2->free();
}
?>
</main>
<footer>
    <?php
        $sql = "SELECT miesiac, rok FROM `zadania` WHERE dataZadania = '2020-08-01'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $miesiac = $row['miesiac'];
        $rok = $row['rok'];
        echo "<h1>miesiąc: $miesiac, rok: $rok</h1>";
        $db->close();
		echo "<p>Stronę wykonał: 00000000000</p>"
    ?>
		<p>"Stronę wykonał : Piotr"</p>
</footer>
<p>"Stronę wykonał : Piotr"</p>
</body>
</html>