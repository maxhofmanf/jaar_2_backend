<?php 
$serverName = "localhost";
$username = "root";
$password = "mysql";
$dbName = "databank_php";

try {
	$conn = new PDO("mysql:host=$serverName;dbname=$dbName", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

  } catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
  }
  $stmt  = $conn->query('SELECT * FROM onderwerpen');

  ?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>J2F1BELP5L2 - Content uit je database</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
	//  laad hier via php je header in (vanuit je includes map) 
	 include("includes/header.php");

	//  Haal hier uit de URL welke pagina uit het menu is opgevraagd. Gebruik deze om de content uit de database te halen. 
	$array = $stmt->fetchall(PDO::FETCH_ASSOC);

	if (!empty($_GET)) {
        $content = $_GET['content'];
		foreach ($array as $item){
			if($item['id'] == $content) {
				$subject = $item;
			}
		}
		echo $subject['name'] . "<br>";
		echo $subject['description'];
		echo '<img src="' . $subject['image'] . '" alt="img">';
      }
	//  Laat hier de content die je op hebt gehaald uit de database zien op de pagina.
		
		
	?>
	<?php
	//  laad hier via php je footer in (vanuit je includes map)
	 include ("includes/footer.php"); ?>

</body>
</html>