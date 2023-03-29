<?php
$question_1 = $question_2 = $question_3 = $question_4 = $question_5 = $question_6 = $question_7 = $question_8 =  "";
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
    <title>MadLibs - Er heerst paniek...</title>
</head>
<body>
    <div class="container">
        <img src="logo.png" alt="logo">
        <div class="container-content">
            <header>
                <nav>
                <strong><a href="paniek.php">Er heerst paniek...</a></strong>
                    <a href="ontkunde.php">Onkunde</a>
                </nav>
            </header>
            
            <main>
            <h1>Er heerst paniek...</h1>
            <form style="display: <?php echo $form; ?>;" class="form" action="<?php echo htmlspecialchars( $_SERVER[ 'PHP_SELF' ] ); ?>" method="post">
                
                <form action="paniek.php" method="POST">
                <label for="huisdier">Welk huisdier zal je nooit willen hebben?</label>
                <input type="text" name="huisdier">
                <label for="persoon">Wie is de belangerijkste persoon in je leven?</label>
                <input type="text" name="persoon">
                <label for="land">In welk land zal je graag willen wonen?</label>
                <input type="text" name="land">
                <label for="verveelt">Wat doe je als je je verveelt?</label>
                <input type="text" name="verveelt">
                <label for="speelgoed">Met welk speelgoed spelde jij als kind het meest?</label>
                <input type="text" name="speelgoed">
                <label for="docent">Bij welke docent spijbel je het liefst</label>
                <input type="text" name="docent">
                <label for="geld">Als je €100.000,- had, wat zou je dan kopen?</label>
                <input type="text" name="geld">
                <label for="bezigheid">Wat is je favoriete bezigheid?</label>
                <input type="text" name="bezigheid">
                <input type="submit" name="submit">

            </form>
                <p style="display: <?php echo $answer; ?>;">
                    Er heerst paniek in het koninkrijk <span><?php echo $question_2 ; ?></span>. Koning<span><?php echo $question_3;?></span> is ten einde raad en als koning <span><?php echo $question_6?></span> then einde raad is dan roept hij zijn ten-einde-raadsheer <span><?php echo $question_2;?></span>.
                    "<span><?php echo $question_2 ?></span> Het is een ramp! Het is een schande!"
                    "Sire, Majesteit, Uwe Luidruchtigheid , wat is er aan de hand?"
                    "Mijn <span><?php echo $question_1 ?></span> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <span><?php echo $question_5 ?></span> voor hem gekocht"
                    "Majesteit, uw <span><?php ?></span> komt vast vanzelf terug?"
                    "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <span><?php echo $question_8 ?></span> leren?"
                    "Maar Sire, daar kunt u toch uw <span><?php $question_7 ?></span> voor gebruiken."
                    "<span><?php $question_2?></span>, je hebt helemaal gelijk! Wat ozu ik doen als ik jou niet had."
                    "<span><?php echo $question_4  ?></span>, Sire."
                </p>
            </main>
            <footer>
                <p>&copy; Max Hofman 29/03/2023</p>
            </footer>
        </div>
    </div>
</body>
</html>
