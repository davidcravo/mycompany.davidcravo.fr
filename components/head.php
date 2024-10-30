<?php
    $title = $title ?? "My Company";
    $description = $description ?? "Mon nouveau projet"
?>

<!DOCTYPE html>
<html lang="fr-fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title); ?></title>
    <meta name="description" content="<?= htmlspecialchars($description) ?>">

    <link rel="icon" href="/assets/images/david_cravo_logo.jpeg">
    <link rel="stylesheet" href="/assets/css/style_find_us.css">
    <link rel="stylesheet" href="/assets/css/style_header.css">
    <link rel="stylesheet" href="/assets/css/style_home.css">
    <link rel="stylesheet" href="/assets/css/style_portfolio.css">
    <link rel="stylesheet" href="/assets/css/style_newsletter.css">
    <link rel="stylesheet" href="/assets/css/style_footer.css">

</head>

<body>