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
                    <a href="../" id="golyfty-logo">
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
        
        <section class="filter-box">
        	
        </section>
        
        <section class="main-content-box" style="padding:0 4%; width: 92%;">
        	<a id="set-request-btn" style="margin-right:3%;"><i class="fa fa-bell"></i> Request Lift</a>
            
            <section class="set-lift-alert-popup">
                <form action="" method="post">
                    <a class="fa fa-close"></a>
                    <div>
                        <i class="fa fa-map-marker"></i>
                        <input type="text" name="" placeholder="Departing from...">
                    </div>
                    <div>
                        <i class="fa fa-map-marker"></i>
                        <input type="text" name="" placeholder="Going to...">
                    </div>
                    <div>
    	                <i class="fa fa-calendar"></i>
	                    <input type="text" name="" placeholder="Departure date">
                    </div>
                    <div>                    
                        <i class="fa fa-envelope-o"></i>
                        <input type="text" name="" placeholder="Email">
                    </div>
                    
                    <input type="submit" name="" value="Set Alert">
                    
                </form>
            </section>
            
        	
        	<h3 id="page-label" style="margin-left: 3%;">
                <strong>380 lifts found</strong> - [ page 2 of 20 pages ]
                <!--span>0 results found for your search.</span-->
            </h3>
            
            <section class="latest-list">
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
                            <a href="browse-lifts/details" id="expand" class="fa fa-angle-double-right"></a>
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
                            <a href="browse-lifts/details/kumasi/cape-coast/dateposted/oneway" id="expand" class="fa fa-angle-double-right"></a>
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
                            <a href="browse-lifts/details/kumasi/cape-coast/dateposted/oneway" id="expand" class="fa fa-angle-double-right"></a>
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
                            <a href="browse-lifts/details/kumasi/cape-coast/dateposted/oneway" id="expand" class="fa fa-angle-double-right"></a>
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
                            <a href="browse-lifts/details/kumasi/cape-coast/dateposted/oneway" id="expand" class="fa fa-angle-double-right"></a>
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
                            <a href="browse-lifts/details/kumasi/cape-coast/dateposted/oneway" id="expand" class="fa fa-angle-double-right"></a>
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
                            <a href="browse-lifts/details/kumasi/cape-coast/dateposted/oneway" id="expand" class="fa fa-angle-double-right"></a>
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
                            <a href="browse-lifts/details/kumasi/cape-coast/dateposted/oneway" id="expand" class="fa fa-angle-double-right"></a>
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
                            <a href="browse-lifts/details/kumasi/cape-coast/dateposted/oneway" id="expand" class="fa fa-angle-double-right"></a>
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
                            <a href="browse-lifts/details/kumasi/cape-coast/dateposted/oneway" id="expand" class="fa fa-angle-double-right"></a>
                        </article>
                    </section>
            	</section>
            </section>
            
            <article class="pagination">
            	<a href="" class="fa fa-chevron-left"></a> 
                	<a href="">1</a>
                    <a href="" id="act">2</a>
                    <a href="">3</a>
                    <a href="">4</a>
                    <a href="">5</a>
                <a href="" class="fa fa-chevron-right"></a>
            </article>
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
