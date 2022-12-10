<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Men's Barbershop</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/book_style.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/service.css');?>">

    <link rel="stylesheet" href="<?=base_url('assets/fontawesome/css/all.css');?>">
</head>
<body>

<header>
    <div id="Home" class="logo" style="margin-left: 20px; float: left;">      
        <img src="<?=base_url('assets/img/lp/logo.png');?>" alt="logo" height="70px"> 
    </div>
    
    <div class="log_out">
        <a href="<?= base_url('autentifikasi/logout'); ?>"><p class="Button" align=center>Log out</p></a>
    </div>
</header>