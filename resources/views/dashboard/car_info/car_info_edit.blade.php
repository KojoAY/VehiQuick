<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GoLyfty</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../../../css/general-styles.css">
        <link rel="stylesheet" type="text/css" href="../../../css/form-styles.css">
        <link rel="stylesheet" type="text/css" href="../../../css/list-styles.css">
        <link rel="stylesheet" type="text/css" href="../../../css/font-awesome.css">
        
        <script type="text/javascript" language="javascript" src="../../../js/jquery.min.js"></script>
        <script type="text/javascript" language="javascript" src="../../../js/script.js"></script>

    </head>
    <body>
        <section class="main-box">
            <header class="top-header">
                <section class="logo-menu">
                    <a href="../../../" id="golyfty-logo">
                    	<img src="../../../images/symbol.png" id="symbol">
                    	<img src="../../../images/logo.png" id="logo">
                    </a>
                    <nav>
                        <a href="../../../browse-lifts">
                            <i class="fa fa-search"></i> Browse Lifts
                        </a>
                        <a href="../../../offer-lift">
                            <i class="fa fa-car"></i> Offer Lift
                        </a>
                        <a href="../../../account/register" class="fa fa-user-plus"></a>
                        <!--a href="../../../account/login" class="fa fa-sign-in"></a-->
                        <a class="fa fa-sign-in" id="login-btn"></a>
                    </nav>
                </section>
                
            </header>
        </section>
        
        
        <section class="main-content-box">
            
            <article class="lift-details-box" id="user-profile-box">
            	<section class="driver-info">
                    
                    <article id="user-photo" style="background: url(../users/photos/) #eee no-repeat center; background-size:cover;">
                    	<i class="fa fa-user"></i>
                        <i class="fa fa-check" id="verified"></i>
                    </article>
                    <article id="user-info">
                    	<a href="../../../profile/user-code">Emmanuel A.</a>
                    	M - 30y/o
                        <i style="display:block; margin-top:10px;" class="fa fa-star"></i>
                    </article>
                    
                    <a href="" id="msg-driver"><i class="fa fa-envelope"></i> Message Emmanuel</a>
                </section>
                
                
                <ul class="user-info-ul">
                	<li class="left-user-profile-nav">
                    	<nav><a href="../../../dashboard/user-code"><i class="fa fa-user"></i> Profile</a></nav>
                        <nav><a href="../../../dashboard/user-code/car-info"><i class="fa fa-info"></i> Car Information</a></nav>
                        <nav><a href="../../../dashboard/user-code/offers"><i class="fa fa-car"></i> My Offers</a></nav>
                        <nav><a href="../../../dashboard/user-code/lifts"><i class="fa fa-map-pin"></i> My Lifts</a></nav>
                        <nav><a href="../../../dashboard/user-code/requests"><i class="fa fa-bell"></i> Requests</a></nav>
                        <nav><a href="../../../dashboard/user-code/reviews"><i class="fa fa-star"></i> Reviews</a></nav>
                        <article>
                        	<h6>Verification</h6> 
                        	<span><i class="fa fa-check"></i> Phone</span>
                            <span><i class="fa fa-check"></i> Email</span>
                            <span><i class="fa fa-check"></i> ID</span>
                        </article>
                    </li>
                    
                    
                	<li class="user-info">
                        <form action="" method="post" class="dashboard-form">
                            <section class="user-info-divs">
                                <article id="pickup-loc"><div id="label">Brand</div> 
                                	<select name="">
                                        <option>Honda</option>
                                    </select>
                                </article>
                                <article id="pickup-loc"><div id="label">Model</div> 
                                	<select name="">
                                        <option>Civic</option>
                                    </select>
                                </article>
                                <article id="pickup-loc"><div id="label">Body Type</div> 
                                	<select name="">
                                        <option>Saloon</option>
                                    </select>
                                </article>
                                <article id="pickup-loc"><div id="label">Doors</div> 
                                    <select name="">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </article>
                            </section>
                            
                            <section class="user-info-divs">
                                <article id="pickup-loc"><div id="label">Seats</div>
                                    <select name="">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </article>
                                <article id="pickup-loc"><div id="label">Number</div> <input type="text" name=""></article>
                            </section>
                            
                            <section class="user-info-divs">
                                <article id="pickup-loc"><div id="label">Colour</div> <input type="text" name=""></article>
                            </section>
                            
                            <section id="action"><a href="../dashboard/user-code/save-changes">Save</a></section>
                        </form>
                    </li>
                </ul>
                
        	</article>
        </section>
        
        <footer>
        	<article class="footer-links">
            	<a href="../../../browse-lifts"><strong>BROWSE LIFTS</strong></a>
            	<a href="../../../offer-lift"><strong>OFFER LIFT</strong></a>
                <a href="../../../">Home</a>
                <a href="../../../about">About Us</a>
                <a href="../../../contact">Contact Us</a>
                <a href="../../../account/register">Register</a>
                <a href="../../../account/login">Login</a>
                <a href="../../../how-it-works">How It Works</a>
            </article>
        	<a href="../../../"><img src="../../../images/footer-logo.png" id="footer-logo"></a>
            <article class="footer-soc">
            	<a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a>
                <a href="https://www.twitter.com/" target="_blank" class="fa fa-twitter"></a>
                <a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram"></a>
                <a href="https://www.linkedin.com/" target="_blank" class="fa fa-linkedin"></a>
                <a href="https://plus.google.com/" target="_blank" class="fa fa-google-plus"></a>
            </article>
        	<div id="copy">
            	&copy; 2017 GoLyfty. 
                <a href="../../../terms-of-use">Terms of Use</a> 
                <a href="../../../privacy-policy">Privacy Policy</a>
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
                
                Not a member yet? <a href="../../../account/register">Register!</a>
                </nav>
            </form>
        </section>
    </body>
</html>
