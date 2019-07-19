@extends('style.index')

@section('style')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Credit Card Donation Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="refugee/css/stylom.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
@endsection

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('refugee/images/donate.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 class="mb-3 bread">Help Them </h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{URL('/home')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Donation <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
    <div class="main">
      <h1>Donate Now</h1>
      <form action="#" method="post"> 
      <div class="w3_agile_main_grids">
      
        <div class="agileits_w3layouts_main_grid">
          <div class="agile_main_grid_left">
            
              <h3>Your Details :</h3>
              <input type="text" name="full_name" placeholder="Full Name" required="">
              <input type="email" name="Email" placeholder="Email" required="">
              
              <select id="w3_agileits_select1" class="w3layouts_select" onchange="change_country(this.value)" required="">
                <option value="">Country</option>
                <option value="">America</option>
                <option value="">Bhutan</option> 
                <option value="">China</option>		
                <option value="">Europe</option>
                <option value="">Other</option>							
              </select>
              <select id="w3_agileits_select1" class="w3layouts_select" onchange="change_country(this.value)" required="">
                <option value="">City</option>
                <option value="">NewYork</option>
                <option value="">Boston</option> 
                <option value="">Washington</option>		
                <option value="">Chicago</option>
                <option value="">Other</option>							
              </select>
              <input type="text" name="Phone" placeholder="Phone Number" required="">
              <textarea name="Message" placeholder="Comments..." required=""></textarea>
            
            </div>
            <div class="agile_main_grid_left">
              <div class="w3_agileits_main_grid_left_grid">
                <h3>Your Donation :</h3>
              <div class="agileits_main_grid_left_l_grids">
                <div class="w3_agileits_main_grid_left_l">
                  <h4>Donation Type</h4>
                </div>
                <div class="w3_agileits_main_grid_left_r">
                  <form>
                    <div class="agileinfo_radio_button">
                      <label class="radio"><input type="radio" name="radio" checked=""><i></i>Once-Off-Gift</label>
                    </div>
                    <div class="agileinfo_radio_button">
                      <label class="radio"><input type="radio" name="radio"><i></i>Regular-Monthly-Gift</label>
                    </div>
                  </form>
                </div>
              </div>
              <div class="agileits_main_grid_left_l_grids">
                <div class="w3_agileits_main_grid_left_l">
                  <h4>Donation Amount</h4>
                </div>
                <div class="w3_agileits_main_grid_left_r">
                  <form>
                    <div class="agileinfo_radio_button">
                      <label class="radio"><input type="radio" name="radio" checked=""><i></i>$100</label>
                    </div>
              
                    <div class="agileinfo_radio_button">
                      <label class="radio"><input type="radio" name="radio"><i></i>$500</label>
                    </div>
                    <div class="agileinfo_radio_button">
                      <label class="radio"><input type="radio" name="radio"><i></i>$1000</label>
                    </div>
                  </form>
                </div>
              </div>
              </div>
              <div class="w3_agileits_qualifications">
                <h3>Credit Card</h3>
                <div class="w3-agile1">
                  <div class="payment-w3ls">	
                    <img src="{{URL('refugee/images/card.png')}}" alt=" " class="img-responsive">
                  </div>
                </div>
                <div class="card-bounding agileits"> 
                  
                    <div class="card-details"> 
                      <aside>Name On Card:</aside>
                      <input type="text" name="name" placeholder="Name On Card" required=""> 
                    </div>	
                    <aside>Card Number:</aside>
                    <div class="card-details">
                      <!--- ".card-type" is a sprite used as a background image with associated classes for the major card types, providing x-y coordinates for the sprite --->
                      
                      <input type="text" name="card number" class="hm" placeholder="0000 0000 0000 0000" maxlength="19" onkeyup="$cc.validate(event)" required="">
                      <!-- The checkmark ".card-valid" used is a custom font from icomoon.io --->
                      
                    </div> 
                    <div class="card-details agileits-w3layouts"> 
                      <div class="expiration">
                        <aside>Expiration Date</aside>
                        <input type="text" name="date" onkeyup="$cc.expiry.call(this,event)" maxlength="7" placeholder="mm/yyyy" required="">
                      </div> 
                      <div class="cvv">
                        <aside>CVV</aside>
                        <input type="text" name="cvv" placeholder="XXX" maxlength="3" required="">
                      </div> 
                      <div class="clear">	</div>		
                    </div>
                    <input type="submit" value="Donate">
                  
                </div>
              </div>
            </div>
            
            <div class="clear"> </div>
            
        </div>
      </div>
      </form>
      
    </div>
    <!-- Validator js -->  
    <script src="js/creditCardValidator.js" type="text/javascript"></script>
    <!-- //Validator --> 

@endsection