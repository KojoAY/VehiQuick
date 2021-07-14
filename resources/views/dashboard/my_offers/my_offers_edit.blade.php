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
                                <h3 id="page-label">
                                    Pick-up &amp; Drop-off Points
                                </h3>
                                <article id="pickup-loc"><div id="label">Pick-up</div> 
                                	<input type="text" name="">
                                </article>
                                <article id="pickup-loc"><div id="label">Drop-off</div> 
                                	<input type="text" name="">
                                </article>
                                
                                <article id="pickup-loc"><div id="label">Stopover Points</div> 
                                	Offering to pick up and drop off passangers along the way is a sure way to fill your car. List them on new lines
                                	<textarea name=""></textarea>
                                    
                                </article>
                            </section>
                            
                            <section class="user-info-divs">
                            	<h3 id="page-label">
                                    Trip Type
                                </h3>
                                <article id="pickup-loc"><div id="label">Trip Type</div> 
                                    <label><input type="radio"> One Way Trip</label>
                                    <label><input type="radio"> Return Trip</label>
                                </article>
                            </section>
                            
                            <section class="user-info-divs">
                                <h3 id="page-label">
                                    Pick-up Date &amp; Time
                                </h3>
                                <article id="pickup-loc"><div id="label">Pick-up Date</div> 
                                	<input type="text" name="">
                                </article>
                                <article id="pickup-loc"><div id="label">Pick-up Time</div> 
                                    <input type="text" name="">
                                </article>
                            </section>
                            
                            <section class="user-info-divs">
                                <h3 id="page-label">
                                    Drop-off Date &amp; Time
                                </h3>
                                <article id="pickup-loc"><div id="label">Drop-off Date</div> 
                                	<input type="text" name="">
                                </article>
                                <article id="pickup-loc"><div id="label">Drop-off Time</div> 
                                    <input type="text" name="">
                                </article>
                            </section>
                            
                            <section class="user-info-divs">
                                <h3 id="page-label">
                                    Lift Details
                                </h3>
                                <article id="pickup-loc"><div id="label">Available Seats</div> 
                                	<input type="text" name="">
                                </article>
                                <article id="pickup-loc"><div id="label">Price per Seat</div> 
                                    <input type="text" name="">
                                </article>
                                
                                <article id="pickup-loc"><div id="label">Max. Luggage</div> 
                                    <select name="MaxLuggage">
                                        <option value="Small">Small</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Large">Large</option>
                                    </select>
                                </article>
                                
                                <article id="pickup-loc"><div id="label">Pick-up Flexibility</div> 
                                    <select name="PickUpFlex">
                                        <option value="Right on Time">Right on Time</option>
                                        <option value="In a 15 minute window">In a 15 minute window</option>
                                        <option value="In a 30 minute window">In a 30 minute window</option>
                                        <option value="In a 1 hour window">In a 1 hour window</option>
                                        <option value="In a 2 hour window">In a 2 hour window</option>
                                    </select>
                                </article>
                                
                                <article id="pickup-loc"><div id="label">Possible Detour</div> 
                                    <select name="Detour">
                                        <option value="None">None</option>
                                        <option value="15 minutes detour, max.">15 minutes detour, max.</option>
                                        <option value="30 minutes detour, max.">30 minutes detour, max.</option>
                                        <option value="Anything is fine">Anything is fine</option>
                                    </select>
                                </article>
                                
                                <article id="pickup-loc"><div id="label">Additional Details</div> 
                                    <div id="label-sep" style="display:block; clear:both">
                Please add further details about your ride - it will save you answering lots of questions from passengers</div>
                <textarea name="Desc" placeholder="Example: I'm going to Kumasi to visit my family. I'm leaving from Accra Kumasi station at 10am, next to the car park entrance. I'm willing to pick up or drop off passengers en route. There's space for a small suitcase each."></textarea>
                                </article>
                            </section>
                            
                            <section class="user-info-divs">
                            	<h3 id="page-label">
                                    Lift Rules
                                </h3>
                                
                                <article id="pickup-loc"><div id="label">Smoking</div> 
                                    <select name="Detour">
                                        <option value="">No</option>
                                        <option value="">Yes</option>
                                    </select>
                                </article>
                                <article id="pickup-loc"><div id="label">Food</div> 
                                    <select name="Detour">
                                        <option value="">No</option>
                                        <option value="">Yes</option>
                                    </select>
                                </article>
                                <article id="pickup-loc"><div id="label">Pet</div> 
                                    <select name="Detour">
                                        <option value="">No</option>
                                        <option value="">Yes</option>
                                    </select>
                                </article>
                                <article id="pickup-loc"><div id="label">Music</div> 
                                    <select name="Detour">
                                        <option value="">No</option>
                                        <option value="">Yes</option>
                                    </select>
                                </article>
                                <article id="pickup-loc"><div id="label">Stop &amp; Shop</div> 
                                    <select name="Detour">
                                        <option value="">No</option>
                                        <option value="">Yes</option>
                                    </select>
                                </article>
                            </section>
                            
                            <section class="user-info-divs">
                            	<label><input type="checkbox" id="ckbAccept" name="TermsPolicy"> I accept the <a href="terms">Terms &amp; Conditions</a> and <a href="policy">Privacy Policy</a>, certify that i hold a driver's licence and have valid car insurance.</label>
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
