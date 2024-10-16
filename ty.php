<!DOCTYPE html>
<html lang="en">

<?php
header("Cache-Control: no-store, no-cache, no-transform, must-revalidate");
header("Expires: " . date("r"));

include 'datasite.php';
include 'lang.php';

$succsesObj = getSuccsesPhrases('en');
$titlePage = $h1 = $succsesObj["h1"];
$description = $succsesObj["desc"];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="no-transform" />
    <meta http-equiv="Cache-control" content="no-cache" />
    <meta name="google" content="nopagereadaloud" />
    <meta name="description" content="Подяка" />
    <meta name="robots" content="index, follow" />
    <meta itemprop="name" content="Набір для приготування морозива">
    <link rel="icon" type="image/svg+xml" href="./img/favicon.webp" />
    <link href="./css/reset.css" rel="stylesheet" type="text/css" media="all" />
    <link href="./css/succses.css" rel="stylesheet" type="text/css" media="all" />
    <title><?= $domain ?> - <?= $titlePage ?></title>
    <meta name="description" content="<?= $titlePage ?>">
    <?= isset($headParam) ? $headParam : ""; ?>
</head>

<body>
    <main>
        <div class="container">
            <div class="info size">
                <svg width="100" height="100" aria-label="icon-linkedin">
                    <use href="./img/symbol-defs.svg#icon-succes"></use>
                </svg>
                <h1 class="title"><?= $h1 ?></h1>
                <p class="description"><?= $description ?></p>
            </div>
        </div>
    </main>
</body>

</html>
