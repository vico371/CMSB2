<?php 
// header.php
require_once 'cms/cms.php';
global $cms;
$currentPage = $cms->getCurrentPage();
$pageTitle = $currentPage ? $currentPage['title'] . ' - Nexxus Tech' : 'Nexxus Tech';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1>Nexxus Tech</h1>
    </header>


