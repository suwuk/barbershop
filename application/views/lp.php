<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Men's Barbershop</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/lp.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/fontawesome/css/all.css');?>">
</head>
<body>

<header>
    <div id="Home" class="hdr" style="margin-left: 20px;">      
        <img src="<?=base_url('assets/img/lp/logo.png');?>" alt="logo" height="70px"> 
    </div>

    <div class="hdr" style="margin-left: 50px;">
        <nav>  
            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="<?=base_url('autentifikasi');?>">Book</a></li>
                <li><a href="#Services">Services</a></li>
                <li><a href="#Products">Product</a></li>
                <li><a href="#Hair_Artist">Hair Artist</a></li>
                <li><a href="#About_Us">About Us</a></li>
                <li><a href="#Contact_Us">Contact Us</a></li>   
            </ul> 
        </nav> 
    </div>
    
    <div class="hdrk" style="float: right; margin: 16px 20px 0 0">
        <a href="<?=base_url('autentifikasi/registrasi');?>" class="Button">Register</a>
        <a href="<?=base_url('autentifikasi');?>" class="Button">Log in</a>
    </div>
</header>

<main>
    <article id="Home">
        <img src="<?=base_url('assets/img/lp/banner.png');?>" alt="logo" width="100%">
        <div id="Book">
            <p align = center style="font-weight: bold;" >Book</p>
        </div>
    </article>

    <article id="Services" class="Services">
        <h2 align= center>SERVICES</h2>
        
        <div class="Service">
            <div class="srv" align = center>
                <img src="<?=base_url('assets/img/lp/haircut.png');?>" alt="haircut">
                <div class="desc_srv">
                    <p>Rapihkan rambut dengan gaya</p>
                </div>
            </div>
            
            <div class="srv" align = center>
                <img src="<?=base_url('assets/img/lp/shave.png');?>" alt="shave">
                <div class="desc_srv">
                    <p>Kumis, Janggut dan cambang</p>
                </div>
            </div>

            <div class="srv" align = center>
                <img src="<?=base_url('assets/img/lp/coloring.png');?>" alt="coloring">
                <div class="desc_srv">
                    <p>Hidupkan rambutmu</p>
                </div>
            </div>
        </div>
    </article>

    <img src="<?=base_url('assets/img/lp/wave1.svg');?>" alt="">
    <article id="Products">
        <h2 align= center>PRODUCT</h2>

        <div class="Product" align = center>
            <div class="prd">
                <img src="<?=base_url('assets/img/lp/hair powder.jpeg');?>" alt="hair powder">
                <p>Hair Powder Sevich</p>
                <p class="harga">70K</p>
            </div>
            
            <div class="prd">
                <img src="<?=base_url('assets/img/lp/pomade.png');?>" alt="pomade">
                <p>Morgan's Pomade</p>
                <p class="harga">95K</p>
            </div>

            <div class="prd">
                <img src="<?=base_url('assets/img/lp/Parfum.jpg');?>" alt="Parfum">
                <p>Tumbuh Lab Parfum</p>
                <p class="harga">52K</p> 
            </div>

        </div>

        <div class="buy_now">
            <p align=center style="padding-top: 20px;">Buy Now</p>
        </div>
    </article>
    <img src="<?=base_url('assets/img/lp/wave2.svg');?>" alt="">

    <article id="Hair_Artist">
        <h2 align= center>Hair Artist</h2>

        <div class="Heroes" align = center>
            <div class="hero">
                <img src="<?=base_url('assets/img/lp/aldi.png');?>">
                <p>Aldi</p>
            </div>

            <div class="hero">
                <img src="<?=base_url('assets/img/lp/Diaz.png');?>">
                <p>Diaz</p>
            </div>

            <div class="hero">
                <img src="<?=base_url('assets/img/lp/dimas.png');?>">
                <p>Dimas</p>
            </div>

            <div class="hero">
                <img src="<?=base_url('assets/img/lp/Satria.jpeg');?>">
                <p>Satria</p>
            </div>

            <div class="hero">
                <img src="<?=base_url('assets/img/lp/vinaro.png');?>">
                <p>Vinaro</p>
            </div>

            <div class="hero">
                <img src="<?=base_url('assets/img/lp/rina.png');?>">
                <p>Rina</p>
            </div>

        </div>
    </article>

    <article id="About_Us">
        <img src="<?=base_url('assets/img/lp/about.png');?>" alt="">
        <h1>About US</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum!</p>
    </article>

    <article id="Contact_Us">
        <h2 align= center> Contact US </h2>
        <div class="Pesan">
            <form>              
                <input type="text" class="masuk" placeholder="Type Your Name">  <br>           
                <input type="text" class="masuk" placeholder="E-mail">     <br>
                <input type="text" class="masuk" placeholder="Phone Number"> <br>
                <textarea name="" id="" cols="30" rows="10" class="masuk" placeholder="Message"></textarea>  <br>
                <input type="submit" value="Send" id="Submit" style="margin-right: 20px;">    
                <input type="reset" value="Reset" id="Reset">  
            </form>
            
        </div>

        <div class="sosmed">
            <h2>Visit our social media</h2>
            <div class="icons">
                <i class="fa fa-brands fa-whatsapp fa-3x"></i>
            </div>
            
            <div class="icons">
                <i class="fa-brands fa-facebook fa-3x"></i>
            </div>
          
            <div class="icons">
                <i class="fa fa-brands fa-instagram fa-3x"></i>
            </div>
          
          </div>

    </article>
</main>

<footer>
    <p align = center>Copyrights © 2022 Men’s Barbershop</p>
</footer>

</body>
</html>
