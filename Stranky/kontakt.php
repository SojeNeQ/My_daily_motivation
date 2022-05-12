<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styly_kontakt.css">
    <!-- <link rel="stylesheet" href="css/queries.css"> -->
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/lightbox.min.css">


    <script src="js/lightbox-plus-jquery.min.js"></script>

    <title>Kontaktní formulář</title>
</head>

<body>

    <form action="mailer.php" method="post" class="box">

        <?php
        
        if($_GET['succes'] == 1){
            echo "<div class=\"form-result succes\">
            Odeslání proběhlo v pořádku.</div>";
        }

        if($_GET['succes'] == -1){
            echo "<div class=\"form-result error\">
            Chyba při odeslání. Zkuste znovu.</div>";
        }

        ?>


        <h1>Kontakt</h1>

        <input type="text" name="name" placeholder="Jméno a příjmení">

        <input type="email" name="email" placeholder="E-mail">

        <textarea name="message" cols="30" rows="10">

        </textarea>

        <input type="submit" value="Odeslat">


    </form>

    <a href="index.html" class="btn btn-full marg_kont">Zpět na úvodní stránku</a>
    
</body>
</html>