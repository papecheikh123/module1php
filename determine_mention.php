<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Bac_Mention</title>
</head>

<body>
    <h1>la Mention</h1>
    <?php
    $moyenne = 18;
    $decision = '<p>Vous êtes admis avec la mention: </p>';
    if ($moyenne < 10) {
        $decision = '<p>Vous êtes éliminé</p>';
    } else {
        if ($moyenne >= 17) {
            $mention = '<span class="text-warning">Excelent</span>';
        } elseif ($moyenne >= 16) {
            $mention = '<span class="text-primary">Trés bien</span>';
        } elseif ($moyenne >= 14) {
            $mention = '<span class="text-warning">Bien</span>';
        } elseif ($moyenne >= 12) {
            $mention = '<span class="text-dark">Assez bien</span>';
        } else {
            $mention = '<span class="text-warning">Passable</span>';
        }
        echo $decision . '<span class="fs-2 ">' . $mention . ' </span>';
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>