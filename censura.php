<?php

    //FUNZIONE PER PRENDERE LA PAROLA DA CENSURARE

    if(isset($_GET['textCensura']) && $_GET['textCensura'] != ''){
        $textCensura = $_GET['textCensura'];
    } else {
        $textCensura = 'Inserisci una parola da censurare';
    }

    //FUNZIONE PER PRENDERE IL TESTO DA CUI CENSURARE LA PAROLA
    
    if(isset($_GET['text']) && $_GET['text'] != ''){

        //$text = trim($_GET['text']);
        $textCensura = trim($_GET['textCensura']);


        if(str_contains($_GET['text'], $textCensura)){
            $text = str_replace($textCensura, '***', $_GET['text']);
        } else {
            $text = $_GET['text'];
        }
       
        
    } else {
        $text = 'Inserisci del testo da cui censurare una parola';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Bad words response</title>
</head>
<body>

    <div class="text-center container">
        <h1>Bad Words</h1>

        <?php echo '<p>'.$textCensura.'</p>' ?>
        <?php echo '<p>'.$text.'</p>' ?>
        
        
    </div>

</body>
</html>