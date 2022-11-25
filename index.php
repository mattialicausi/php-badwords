<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="text-center container">
        <h1>Scrivi un testo e censura una parola</h1>
        <form class="d-flex flex-column" action="censura.php">
            <input type="text" name="textCensura">
            <textarea name="text" id="text" cols="30" rows="5"></textarea>
            <button type="submit">Censura</button>
        </form>
    </div>

</body>
</html>