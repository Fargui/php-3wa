<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    <?php
    if($dossier = opendir('./')){
        while (false !== $fichier = readdir($dossier)){ ?>
            <li><a href="<?= $fichier ?>"><?= $fichier ?></a></li>
            <?php
        }
        closedir($dossier);
    } ?>
</ul>
</body>
</html>