<?php ?>

<?php

include_once __DIR__ . "/database.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi PHP</title>
</head>

<body>
    <!-- HEADER -->
    <header>
        <img src="img/logo-small.svg" alt="Logo Spotify">
        <div class="select-container">
            <select class="form-select"></select>
            <select class="form-select"></select>
        </div>
    </header>

    <!-- MAIN -->
    <main class="container main-container">
        <div class="cards-container">
            <?php foreach ($db as $disc) : ?>
                <div class="disc-card">
                    <img src="<?php echo $disc["poster"] ?>" alt="`Title: <?php echo $disc["title"] ?>; Genre: <?php echo $disc["genre"] ?>`">
                    <h4><?php echo $disc["title"] ?></h4>
                    <span class="author"><?php echo $disc["author"] ?></span>
                    <span class="year"><?php echo $disc["year"] ?>}</span>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>