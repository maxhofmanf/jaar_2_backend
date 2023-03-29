<?php
$question_1 = $question_2 = $questoin_3 = $question_4 = $question_5 = $questoin_6 = $question_7 =  "";
$x = 1;
$form = "grid";
$answer = "none";
if ( $_SERVER[ 'REQUEST_METHOD' ] == "POST" ) {
    foreach($_POST as $item){
        
        if (!empty($item)){
            ${"question_$x"} = HTML_check($item);
        }
        $x++;
    }
    
    $form = "none";
    $answer = "block";
}

function HTML_check( $data ) 
{
    $data = trim( $data );
    $data = stripslashes( $data );
    return $data = htmlspecialchars( $data );
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MadLibs - Onkunde</title>
</head>
<body>
    <div class="container">
        <img src="logo.png" alt="logo">
        <div class="container-content">
            <header>
                <nav>
                    <a href="paniek.php">Er heerst paniek...</a>
                    <strong><a href="ontkunde.php">Onkunde</a></strong>
                </nav>
            </header>
            
            <main>
                <h1>Onkunde</h1>
                <form style="display: <?php echo $form; ?>;" class="form" action="<?php echo htmlspecialchars( $_SERVER[ 'PHP_SELF' ] ); ?>" method="post">
                    <label for="ability">Wat zou je graag willen kunnen?</label>
                    <input type="text" name="ability" id="ability">
                    <label for="person">Met welke persoon kun je goed opschieten?</label>
                    <input type="text" name="person" id="person">
                    <label for="number">Wat is je favoriete getal?</label>
                    <input type="text" name="number" id="number">
                    <label for="vacation">Wat heb je altijd bij je als je op vakantie gaat?</label>
                    <input type="text" name="vacation" id="vacation">
                    <label for="bestCharacteristic">Wat is je beste persoonlijke eigenschap?</label>
                    <input type="text" name="bestCharacteristic" id="bestCharacteristic">
                    <label for="worstCharacteristic">Wat is je slechtste persoonlijke eigenschap?</label>
                    <input type="text" name="worstCharacteristic" id="worstCharacteristic">
                    <label for="worstHappening">Wat is het ergste dat je kan overkomen?</label>
                    <input type="text" name="worstHappening" id="worstHappening">
                    <br>
                    <input type="submit" name="submit" id="submit" value="Verzenden">
                </form>
                <p style="display: <?php echo $answer; ?>;">
                    Er zijn veel mensen die niet kunnen <span><?php echo $question_1; ?></span>.
                    Neem nou <span><?php echo $question_2; ?></span>. Zelfs met de hulp van een <span><?php echo $question_4 ?></span>
                    of zelfs <span><?php echo $questoin_3; ?></span> kan <span><?php echo $question_2; ?></span>
                    niet <span><?php echo $question_1; ?></span>. Dat heet niet te maken met gebrek aan 
                    <span><?php echo $question_5; ?></span>, maar met een te veel aan 
                    <span><?php echo $questoin_6; ?></span>.
                    Te veel <span><?php echo $questoin_6; ?></span>
                    leidt tot <span><?php echo $question_7; ?></span> en dat is niet goed als je wilt 
                    <span><?php echo $question_1; ?></span>. Helaas voor <span><?php echo $question_2; ?></span>
                </p>
            </main>
            <footer>
                <p>&copy; Max Hofman 29/03/2023</p>
            </footer>
        </div>
    </div>
</body>
</html>