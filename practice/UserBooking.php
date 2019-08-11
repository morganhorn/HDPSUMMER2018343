<!DOCTYPE html><html lang="en">
	<?php session_start();

if ( isset( $_SESSION['user_id'] ) ) {
} else {
    header("Location: login.php");
}
?>
 <head>
	 <link rel="stylesheet" type="text/css" href="Style.css">
    <!-- Bootstrap -->
    <link href="bootstrap-4.0.0.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <img src="logo.png" width="150"  alt="" href="#"/>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link ml-2 active text-primary" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="AboutUs.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="Experience.html"><!--What to put here-->
				Book Now</a></li>
			
          <li class="nav-item">
            <a class="nav-link text-primary" href="ContactUs.html">Contact Us</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>	
        </form>
		  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log in</button><!--Admin Login-->
      </div>
    </nav>
    <div class="row">
		<div class="col-4">
			<form action="UserBooking.php" method="post">
		<h3>Contact Information</h3>
		<p>Fill in the form with the correct values</p>
			<label for="firstname">
			<b>First Name:</b>
			</label>
		<br>
			<input type="text" name="firstname" id="firstname" required>
		<br>
			<label for="lastname">
			<b>Last Name:</b>
			</label>
		<br>
			<input type="text" name="lastname" id="lastname" required>
		<br>
			<label for="email">
			<b>email:</b>
			</label>
		<br>
			<input type="text" name="email" id="email" required>
		<br>
			<label for="phonenumber">
			<b>Phone Number:</b>
			</label>
		<br>
			<input type="text" name="phonenumber" id="phonenumber" required>
		<br>
				<label for="address">
			<b>Address Line 1:</b>
			</label>
		<br>
			<input type="text" name="address" id="address" required>
		<br>
				<label for="address">
			<b>Address Line 2:</b>
			</label>
		<br>
			<input type="text" name="address2" id="address2" >
		<br> 
			<label for="city">
			<b>City:</b>
			</label>
		<br>
			<input type="text" name="city" id="city" required>
		<br>
			<label for="country">
			<b>Country:</b>
			</label>
		<br>
			<input type="text" name="country" id="country" required>
		</div>
			<div class="col-4">
		<h3>Vehicle Information</h3>
		<p>Fill in the form with the correct values</p>
			<form action="UserBooking.php" method="post">
			<label for="vyear">
			<b>Vehicle Year:</b>
			</label>
		<br><select id="rec_mode"></select>
			<!--<input type="text" name="vyear" id="vyear" required>-->
		<br>
			<label for="vmake">
			<b>Vehicle Make:</b>
			</label>
		<br>
			<select id="make_mode"></select>
			<!--<input type="text" name="vmake" id="vmake" required>-->
		<br>
			<label for="vmodel">
			<b>Vehicle Model:</b>
			</label>
		<br>
			<select id="model_mode"></select>
			<!--<input type="text" name="vmodel" id="vmodel" required>-->
		<br>
				<label for="vlicense">
			<b>Vehicle License Details:</b>
			</label>
		<br>
			<input type="text" name="vlicense" id="vlicense" required>
		<br>
			<label for="vengine">
			<b>Vehicle Engine Type:</b>
			</label>
		<br>
				<select name="vengine" ID="EngineType">
					<option value="Diesel">Diesel</option>
					<option value="Petrol">Petrol</option>
					<option value="Hybrid">Hybrid</option>
					<option value="Electric">Electric</option>
					</select>
		<br>
				<label for="comments">
			<b>Comments:</b>
			</label>
		<br>
			<textarea></textarea>
				</div>
				<div class="col-4"> 
					<h3>Appointment Information</h3>
			<label for="vservice">
			<b>Service Needed:</b>
			</label>
		<br>
					<select name="services" ID="ServicesNeeded">
					<option value="Annual Service">Annual Service</option>
					<option value="Major Service">Major Service</option>
					<option value="Repair/Fault">Repair/Fault</option>
					<option value="Major Repair">Major Repair</option>
					</select>
		<br>
		<h4>Booking Time: </h4>
			<label for="date">
			<b>Service Date:</b>
			</label>
		<br>
			<input type="date" name="firstdate" id="date" required>
		<br><label for="vservice">
			<b>Time:</b>
			</label>
		<br>
					<select name="firsttime" ID="firsttime">
					<option value="9:00 a.m">9:00 a.m</option>
					<option value="10:00 a.m">10:00 a.m</option>
					<option value="11:00 a.m">11:00 a.m</option>
					<option value="12:00 p.m">12:00 p.m</option>
					<option value="13:00 p.m">13:00 p.m</option>
					<option value="14:00 p.m">14:00 p.m</option>
					<option value="15:00 p.m">15:00 p.m</option>
					<option value="16:00 p.m">16:00 p.m</option>
					<option value="17:00 p.m">17:00 p.m</option>
					</select>
		<br>	
		&nbsp;			
		<input class="btn btn-dark" id="submit" type="submit" name="save" value="Reserve">
		</div>
				
		</div>
		</form>
		<!--third column Apointment Times- First & Second Choice +Service needed-->
</div>

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-12">
            <h3 class="text-center">WHO WE ARE</h3>
            <p>How do we stay small and sell big? It's simple: years of experience. At Ger's Garage, our mission is to offer you the latest in parts and products at the best prices, and with unparalleled service. We pledge our best efforts to make your experience both beneficial and enjoyable. Once you try us, we're sure you'll be back for more!</p>
          </div>
          <div class="col-md-4 col-12">
            <h3 class="text-center">GET IN TOUCH</h3>
            <address class="text-center">
              <strong>Ger's Garage</strong><br>
              Dublin, Ireland<br>
            <br>
              <abbr title="Phone">P:</abbr> +353 (83) 860-8164
            </address>
          </div>
          <div class="col-md-4 col-12">
            <h3 class="text-center">Employees Only</h3>
            <form>
              <div class="form-group col-12">
                <button class="btn btn-dark mt-2" href="Admin.html">Admin</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © MyCompany. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
	   <script src="jquery-3.2.1.min.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	var year = {
    2019 : '2019',
    2018 : '2018',
    2017 : '2017',
	 2016 : '2016',
    2015 : '2015',
    2014 : '2014',
	 2013 : '2013',
    2012 : '2012',
    2011 : '2011',
	 2010 : '2010',
    2009: '2009',
    2008 : '2008',
};
var select = document.getElementById("rec_mode");
for(index in year) {
    select.options[select.options.length] = new Option(year[index], index);
}
	var make = {
    Jeep : 'Jeep',
    Chrysler : 'Chrysler',
    Audi : 'Audi',
	 BMW : 'BMW',
    Bugatti : 'Bugatti',
    Buick : 'Buick',
	 Ford : 'Ford',
	 Honda : 'Honda',
    GMC: 'GMC',
    Kia : 'Kia',
	LandRover : 'Land Rover',
    Saab : 'Saab',
    Toyota : 'Toyota',
    Volvo : 'Volvo',
    Volkswagen : 'Volkswagen',
    Subaru : 'Subaru',
	 Lexus : 'Lexus',
	Maserati : 'Maserati Rover',
    Infiniti : 'Infiniti',
    GM : 'GM',
	 McLaren : 'McLaren',
    Yamaha : 'Yamaha',
    Indian : 'Indian',
	 Ram : 'Ram',
    HarleyDavidson : 'Harley Davidson'
};
	var select = document.getElementById("make_mode");
for(index in make) {
    select.options[select.options.length] = new Option(make[index], index);
}
	var model = {
    GrandCher : 'Grand Cherokee',
    Compass : 'Compass',
    Wrangler : 'Wrangler',
	 Patriot : 'Patriot',
    300 : '300',
    Pacifica : 'Pacifica',
	 150 : '150',
    200 : '200',
    300 : '300',
	 YZFR3 : 'YZF-R3',
    FJR1300: 'FJR1300',
    Kxsr700 : 'Kxsr700',
		YZFR6 : 'YZF-R6',
    Runnner : '4Runnner',
    Avalon : 'Avalon',
	 Camry : 'Camry',
    Corolla : 'Corolla',
    Accord : 'Accord',
	 Civic : 'Civic',
    Fit : 'Fit',
    Insight : 'Insight',
};
var select = document.getElementById("model_mode");
for(index in model) {
    select.options[select.options.length] = new Option(model[index], index);
}
	
	$(function(){
		$('#submit').click(function(e){
			var valid = this.form.checkValidity();
			if(valid){
			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email = $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var address	= $('#address').val();
			var address2 	= $('#address2').val();
			var city 	= $('#city').val();
			var country 	= $('#country').val();
			var year 	= $('#vyear').val();
			var make	= $('#vmake').val();
			var model 		= $('#vmodel').val();
			var license = $('#vlicense').val();
			var engine	= $('#vengine').val();
			var services 	= $('#services').val();
			var firstdate	= $('#firstdate').val();
			var firsttime	= $('#firsttime').val();
			var seconddate	= $('#seconddate').val();
			var secondtime	= $('#secondtime').val();
			var comments 	= $('#comments').val();
				e.preventDefault();	
				$.ajax({
					type: 'POST',
					url: 'userbookings.php',
					data: {firstname: firstname,lastname: lastname,email:email,phonenumber: phonenumber,address: address, address2: address2, city: city, country: country, year: year,make: make,model: model,license: license,engine: engine, services: services, firstdate: firstdate, firsttime: firsttime, seconddate: seconddate, secondtime: secondtime, comments: comments},
					success: function(data){
					Swal.fire({
								'title': 'Your Booking has been saved',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});
				
			}else{
				
			}
			
		});		
		
	});
	  </script>
	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="bootstrap-4.0.0.js"></script>
    </body>
</html>