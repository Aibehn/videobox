<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{title}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="<?php echo asset_url('img/apple-touch-icon.png') ?>">

    <link rel="stylesheet" href="<?php echo asset_url('css/bootstrap.min.css') ?>">
    <style>
        body {
	    background-image: url("<?php echo asset_url('img/fotoFondo.jpg') ?>");
	    background-size: cover;
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="<?php echo asset_url('css/bootstrap-theme.min.css')?>">
    <link href="<?php echo asset_url('css/font-awesome.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset_url('css/main.css') ?>">


    <script src="http://content.jwplatform.com/libraries/Aj2eIjhg.js"></script>
    <script type="text/javascript" src="https://bitmovin-a.akamaihd.net/bitdash/latest/bitdash.min.js"></script>
    <script src="<?php echo asset_url('js/vendor/jquery.min.js') ?>"></script>
    <script src="<?php echo asset_url('js/vendor/lodash.min.js') ?>"></script>
    <script src="<?php echo asset_url('js/vendor/bootstrap.min.js') ?>"></script>
    <script src="<?php echo asset_url('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') ?>"></script>

</head>
    <body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <?php $this->load->view('templates/nav-bar');?>

    <div class='container'>
