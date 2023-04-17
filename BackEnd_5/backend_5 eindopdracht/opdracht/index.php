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
  $stmt  = $conn->query('SELECT * FROM characters ');
  // ORDER BY name ASC
  $characters_array = $stmt->fetchall(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet"/>
</head>
<body>

<header><?php if($_GET['character_info']== null){ ?><h1>Alle <?php echo count($characters_array) ?> uit de database</h1>
    <?php } else { 
        if(isset($characters_array[$_GET['character_info']])){ 
            $char_item = $characters_array[$_GET['character_info']]; 
            echo $char_item['name']; 
        } else { 
            echo "Character not found"; 
        } 
    }?>
</header>
<main>

<?php

  if($_GET['character_info']== null){ 
    
    $x = -1;
    foreach ($characters_array as $char_item){
      $x++;

      include('character_info.php');
    }
  } else {
    $char_item = $characters_array[$_GET['character_info']];
    include('character.php');
  }
  function char_info(){
    
  }
?>
</main>


<footer>&copy; max hofman 2023</footer>
</body>
</html>