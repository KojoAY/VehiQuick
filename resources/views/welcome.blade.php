<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GoLyfty</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/home-styles.css">
        <link rel="stylesheet" type="text/css" href="css/form-styles.css">
        <link rel="stylesheet" type="text/css" href="css/list-styles.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        
        <script type="text/javascript" language="javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" language="javascript" src="js/script.js"></script>

    </head>
    <body>
        <section class="main-box">
            <header class="top-header">
                <section class="logo-menu">
                    <a href="/" id="golyfty-logo">
                    	<img src="images/symbol-home.png" id="symbol">
                    	<img src="images/logo-home.png" id="logo">
                    </a>
                    <nav>
                        <a href="browse-lifts">
                            <i class="fa fa-search"></i> Browse Lifts
                        </a>
                        <a href="offer-lift">
                            <i class="fa fa-car"></i> Offer Lift
                        </a>
                        <a href="account/register" class="fa fa-user-plus"></a>
                        <!--a href="../account/login" class="fa fa-sign-in"></a-->
                        <a class="fa fa-sign-in" id="login-btn"></a>
                    </nav>
                </section>

                <section class="banner">
                    
                </section>
                <section id="trans-hover">
                    <form action="" method="get" class="home-search-box">
                        <h1><i class="fa fa-binoculars"></i> Search for Lift</h1>
                        <h3>Find lyfts offered by drivers</h3>

                        <article>
                            <i class="fa fa-map-marker"></i>
                            <input type="text" name="" placeholder="From">
                        </article>

                        <article>
                            <i class="fa fa-map-marker"></i>
                            <input type="text" name="" placeholder="To">
                        </article>

                        <div><input type="submit" name="" value="Start Search"></div>
                    </form>
                </section>

                
                <!--section id="banner-arrows">
                    <span>
                    <i class="fa fa-angle-left"></i>
                    <i class="fa fa-angle-right"></i>
                    </span>
                </section-->
            </header>
        </section>
        
        <section class="golyfty-desc">
        	<h1>Share a Ride!</h1>
            <p>Do you need a lift? or Are you diving with no or less passengers? Then why don't you shear a ride. <br>Golyfty is a secure ride-sharing platform.</p>
            <div id="more-btn"><a href="">get started</a></div>
        </section>
        
        <section class="latest-list-home">
        	<h1 id="heading">Recent Offers</h1>
        	
            <section class="offer-list-display">
            	<article id="date-time">
                	<strong>Thu, May 30</strong>
                    <span><i class="fa fa-clock-o"></i> 05:00PM</span>
                </article>
                
                <section class="list-ride-info">
                	<article>
                    	<div><i class="fa fa-map-marker"></i> Kumasi</div>
                    	<div><i class="fa fa-long-arrow-down"></i></div>
                    	<div><i class="fa fa-map-marker"></i> Kasunanankana</div>
                        
                        <div id="rate-seat">
                        	<strong>GH&cent;<span>20</span>.00</strong>
                            3 seats left
                        </div>
                    </article>
                    
                    <article class="list-user-info">
                    	<i class="fa fa-check" id="verified"></i>
                    	<img src="">
                        <div>
                        	<strong>Emmanuel A.</strong>
                            M - 30y/o
                        </div>
                        <a href="" id="expand" class="fa fa-angle-double-right"></a>
                    </article>
                </section>
            </section>
            
            <section class="offer-list-display">
            	<article id="date-time">
                	<strong>Thu, May 30</strong>
                    <span><i class="fa fa-clock-o"></i> 05:00PM</span>
                </article>
                
                <section class="list-ride-info">
                	<article>
                    	<div><i class="fa fa-map-marker"></i> Kumasi</div>
                    	<div><i class="fa fa-long-arrow-down"></i></div>
                    	<div><i class="fa fa-map-marker"></i> Kasunanankana</div>
                        
                        <div id="rate-seat">
                        	<strong>GH&cent;<span>20</span>.00</strong>
                            3 seats left
                        </div>
                    </article>
                    
                    <article class="list-user-info">
                    	<i class="fa fa-check" id="verified"></i>
                    	<img src="">
                        <div>
                        	<strong>Emmanuel A.</strong>
                            M - 30y/o
                        </div>
                        <a href="" id="expand" class="fa fa-angle-double-right"></a>
                    </article>
                </section>
            </section>
            
            <section class="offer-list-display">
            	<article id="date-time">
                	<strong>Thu, May 30</strong>
                    <span><i class="fa fa-clock-o"></i> 05:00PM</span>
                </article>
                
                <section class="list-ride-info">
                	<article>
                    	<div><i class="fa fa-map-marker"></i> Kumasi</div>
                    	<div><i class="fa fa-long-arrow-down"></i></div>
                    	<div><i class="fa fa-map-marker"></i> Kasunanankana</div>
                        
                        <div id="rate-seat">
                        	<strong>GH&cent;<span>20</span>.00</strong>
                            3 seats left
                        </div>
                    </article>
                    
                    <article class="list-user-info">
                    	<i class="fa fa-check" id="verified"></i>
                    	<img src="">
                        <div>
                        	<strong>Emmanuel A.</strong>
                            M - 30y/o
                        </div>
                        <a href="" id="expand" class="fa fa-angle-double-right"></a>
                    </article>
                </section>
            </section>
            
            <section class="offer-list-display">
            	<article id="date-time">
                	<strong>Thu, May 30</strong>
                    <span><i class="fa fa-clock-o"></i> 05:00PM</span>
                </article>
                
                <section class="list-ride-info">
                	<article>
                    	<div><i class="fa fa-map-marker"></i> Kumasi</div>
                    	<div><i class="fa fa-long-arrow-down"></i></div>
                    	<div><i class="fa fa-map-marker"></i> Kasunanankana</div>
                        
                        <div id="rate-seat">
                        	<strong>GH&cent;<span>20</span>.00</strong>
                            3 seats left
                        </div>
                    </article>
                    
                    <article class="list-user-info">
                    	<i class="fa fa-check" id="verified"></i>
                    	<img src="">
                        <div>
                        	<strong>Emmanuel A.</strong>
                            M - 30y/o
                        </div>
                        <a href="" id="expand" class="fa fa-angle-double-right"></a>
                    </article>
                </section>
            </section>
            
        <article id="more-btn"><a href="./browse-lifts">browse more lifts</a></article>
        </section>

        <section class="home-feat-sum">
            <article>
            	<i class="fa fa-money"></i>
            	<h2>Make Money</h2>
                Share your ride and fuel cost and make extra cash as well; and you get to to ride in awesome company.
            </article>
            
            <article>
            	<i class="fa fa-shield"></i>
            	<h2>Serious About Safty</h2>
                All drivers on our platform have been verified. Plus you are provided with driver and car information as well.
            </article>
            
            <article>
            	<i class="fa fa-bolt"></i>
            	<h2>Get There Fast</h2>
                Request a ride and you will be on your way to your destination in no time; and it's affordable too.
            </article>
        </section>
        
        <section class="home-sign-up-sect">
        	<i class="fa fa-"></i>
        	<h1>Sign up Now!</h1>
            <p>Become part of this amazing revolution and enjoy all the benefites that come along with it.</p>
            <a href="">Get Started!</a>
        </section>
        
        <footer>
        	<article class="footer-links">
            	<a href="browse-lifts"><strong>BROWSE LIFTS</strong></a>
            	<a href="offer-lift"><strong>OFFER LIFT</strong></a>
                <a href="./">Home</a>
                <a href="about">About Us</a>
                <a href="contact">Contact Us</a>
                <a href="account/register">Register</a>
                <a href="account/login">Login</a>
                <a href="how-it-works">How It Works</a>
            </article>
        	<a href="/"><img src="images/footer-logo.png" id="footer-logo"></a>
            <article class="footer-soc">
            	<a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a>
                <a href="https://www.twitter.com/" target="_blank" class="fa fa-twitter"></a>
                <a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram"></a>
                <a href="https://www.linkedin.com/" target="_blank" class="fa fa-linkedin"></a>
                <a href="https://plus.google.com/" target="_blank" class="fa fa-google-plus"></a>
            </article>
        	<div id="copy">
            	&copy; 2017 GoLyfty. 
                <a href="terms-of-use">Terms of Use</a> 
                <a href="privacy-policy">Privacy Policy</a>
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
