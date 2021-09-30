<!DOCTYPE html>
<html lang="es"> 
    <head>
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no,  initial-scale=1.0,maximun.scale=1.0,minimun-scale=1.0"> 

        <?php
        if (!isset($titulo) || empty($titulo)) {
            $titulo = 'I.E.D Rural Pubenza';
        }
        echo "<title> $titulo</title>";
        ?>
        
        <?php 
        include_once 'app/config.inc.php';
        ?>

        <link href="<?php echo RUTA_CSS ?>bootstrap.min.css" rel="stylesheet"> 
         <link href="<?php echo RUTA_CSS ?>font-awesome.min.css" rel="stylesheet"> 
        <link href="<?php echo RUTA_CSS ?>styles.css" rel="stylesheet">
    </head>
    <body>