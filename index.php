<?php 
// Creare una variabile con un paragrafo di testo a vostra scelta.
$myText = "Benvenuto in questa pagina PHP.";
// Stampare a schermo il paragrafo e la sua lunghezza.
// var_dump($myText);
// Una parola da censurare viene passata dall’utente tramite parametro GET.
$censoredWord = $_GET["word"];
// Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
$censoredText = str_replace($censoredWord, "***", $myText);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <p><?php echo $myText?></p>
        <p>Il testo è lungo <?php echo strlen($myText)?> caratteri.</p>
        </br>
        <p><?php echo $censoredText?></p>
        <p>il testo è lungo <?php echo strlen($censoredText)?> caratteri.</p>
    </body>
</html>