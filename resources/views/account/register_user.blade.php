<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GoLyfty</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../css/general-styles.css">
        <link rel="stylesheet" type="text/css" href="../css/form-styles.css">
        <link rel="stylesheet" type="text/css" href="../css/list-styles.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
        
        <script type="text/javascript" language="javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" language="javascript" src="../js/script.js"></script>

    </head>
    <body>
        <section class="main-box">
            <header class="top-header">
                <section class="logo-menu">
                    <a href="../../views" id="golyfty-logo">
                    	<img src="../images/symbol.png" id="symbol">
                    	<img src="../images/logo.png" id="logo">
                    </a>
                    <nav>
                        <a href="../browse-lifts">
                            <i class="fa fa-search"></i> Browse Lifts
                        </a>
                        <a href="../offer-lift">
                            <i class="fa fa-car"></i> Offer Lift
                        </a>
                        <a href="../account/register" class="fa fa-user-plus"></a>
                        <!--a href="../account/login" class="fa fa-sign-in"></a-->
                        <a class="fa fa-sign-in" id="login-btn"></a>
                    </nav>
                </section>
                
            </header>
        </section>
        
        <section class="main-content-box">
        	<h1 id="heading">Register</h1>
            
            <section class="register-form">
                <form action="" method="post">
                    <article id="fb-login-btn">
                        <a href=""><i class="fa fa-facebook-f"></i> Register with Facebook</a>
                    </article>
                    <article id="or"><strong>OR</strong></article>
                    <!--article>Enter your correct details to login</article-->
                    
                    
                    <input type="text" name="" id="flname" placeholder="First Name">
                    <input type="text" name="" id="flname" placeholder="Last Name">
                    <input type="text" name="" placeholder="Email Address">
                    <input type="password" name="" placeholder="Password">
                    <input type="password" name="" placeholder="Confirm Password">
                    <select name="">
                    	<option selected>Year of Birth</option>
                    	<?php
						$END_DATE = date('Y') - 18;
						$START_DATE = $END_DATE - 100;?>
                        @for($YR = $END_DATE; $YR >= $START_DATE; $YR--):
						
                    	<option>{{ $YR }}</option>
                        @endfor
                    </select>
                    
                    <label><input type="checkbox"> I accept the <a href="../terms-of-use">Terms of Use</a> &amp; <a href="../privacy-policy">Privacy Policy</a></label>
                    
                    <input type="submit" name="" value="Register with my email">
                </form>
            </section>
        </section>
        
        
        <footer>
        	<article class="footer-links">
            	<a href="../browse-lifts"><strong>BROWSE LIFTS</strong></a>
            	<a href="../offer-lift"><strong>OFFER LIFT</strong></a>
                <a href="../">Home</a>
                <a href="../about">About Us</a>
                <a href="../contact">Contact Us</a>
                <a href="../account/register">Register</a>
                <a href="../account/login">Login</a>
                <a href="../how-it-works">How It Works</a>
            </article>
        	<a href="../"><img src="../images/footer-logo.png" id="footer-logo"></a>
            <article class="footer-soc">
            	<a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a>
                <a href="https://www.twitter.com/" target="_blank" class="fa fa-twitter"></a>
                <a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram"></a>
                <a href="https://www.linkedin.com/" target="_blank" class="fa fa-linkedin"></a>
                <a href="https://plus.google.com/" target="_blank" class="fa fa-google-plus"></a>
            </article>
        	<div id="copy">
            	&copy; 2017 GoLyfty. 
                <a href="../terms-of-use">Terms of Use</a> 
                <a href="../privacy-policy">Privacy Policy</a>
            </div>
        </footer>
        
        
        <section class="login-popup">
        	<form action="" method="post">
            	<a class="fa fa-close"></a>
            	<article id="fb-login-btn">
					<a href=""><i class="fa fa-facebook-f"></i> Login with Facebook</a>
				</article>
				<article id="or"><strong>OR</strong></article>
                
            	<input type="text" name="" placeholder="Email Address" style="margin-top:30px;">
                <input type="text" name="" placeholder="Password">
                
                <input type="submit" name="" value="Login">
                
                <nav>
                <a href="" id="fpass">I've forgotten my password</a>
                
                Not a member yet? <a href="../account/register">Register!</a>
                </nav>
            </form>
        </section>
    </body>
</html>
