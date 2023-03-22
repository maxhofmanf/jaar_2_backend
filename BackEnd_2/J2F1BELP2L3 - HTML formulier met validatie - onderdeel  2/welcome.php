<?php
if( isset( $_GET[ 'submit' ] ) && $_SERVER[ 'REQUEST_METHOD' ] == "GET" ) {
    $username = html_check( $_GET[ 'username' ] );    
    $email = html_check( $_GET[ 'email' ] );
}
   function html_check($data){
    $data = trim( $data );
    $data = stripslashes( $data );
    
    return $data = htmlspecialchars( $data ) ;
   }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php if(!isset( $_GET[ 'submit' ])){?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
            <label for="username">name:</label><br>
            <input type="text" name="username" required><br>
            <label for="email">email:</label><br>
            <input type="text" name="email" required>
            <input type="submit" name="submit">
        </form>
        <?php } else { ?>
        <h1>De ingevulde gegevens zijn: </h1><br>
        <?php
        echo $username;
        echo"<br>";
        echo $email; 
        }
        ?>


    
</body>

</html>


