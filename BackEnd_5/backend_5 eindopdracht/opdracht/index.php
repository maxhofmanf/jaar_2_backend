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
  $stmt  = $conn->query('SELECT * FROM characters');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <main>
        <?php
        $characters_array = $stmt->fetchall(PDO::FETCH_ASSOC);

            // $character = $_GET['content'];
            foreach ($characters_array as $item){
                    $char_item = $item;
                    echo '<div class="character_info">';
                    echo '<h3>' . $char_item['name'] . "</h3>";
                    echo '<p class="char_bio">'. $char_item['bio'] . '</p>';
                    echo '<img src="images/' . $char_item['avatar'] . '" alt="img">';
                    echo '</div>';;
            }
        
            // echo '<h3>' . $char_item['name'] . "</h3>";
            // echo '<p class="char_bio">'. $char_item['bio'] . '</p>';
            // echo '<img src="images/' . $char_item['avatar'] . '" alt="img">';
            // echo '<br>';
            

        ?>
    </main>
</body>
</html>