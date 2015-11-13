<!DOCTYPE html>

<head>
<meta charset="UTF-8">
<title>Boarding Pass Now</title>

<!--Meta Tags-->
<meta name="description" content="Create your own Google Now Boarding Pass from the data that your airline gives you." />
<!--Dokumente CSS-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Favicons-->
<link rel="icon" href="favicon.png">
<link rel="icon" sizes="228x228" href="logo.png">
<link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png?v=2">
<link rel="apple-touch-icon" href="apple-touch-icon.png?v=2">
<link rel="manifest" href="manifest.json">
<link rel="stylesheet" href="css/animate.min.css">

<!--Mobile Optimierungen-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="theme-color" content="#9C27B0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Boardingpass">
<meta name="application-name" content="Boardingpass" />
<script src="js/stay_standalone.js" type="text/javascript"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<!--MS Optimizations-->
<meta name="msapplication-TileImage" content="logo.png">
<meta name="msapplication-TileColor" content="#9C27B0">

<!-- STARTUP IMAGES -->

<!-- iPad retina portrait startup image -->
<link href="apple-touch-startup-image-1536x2008.png"
            media="(device-width: 768px) and (device-height: 1024px)
                   and (-webkit-device-pixel-ratio: 2)
                   and (orientation: portrait)"
            rel="apple-touch-startup-image">

<!-- iPad retina landscape startup image -->
<link href="apple-touch-startup-image-1496x2048.png"
            media="(device-width: 768px) and (device-height: 1024px)
                   and (-webkit-device-pixel-ratio: 2)
                   and (orientation: landscape)"
            rel="apple-touch-startup-image">

<!-- iPad non-retina portrait startup image -->
<link href="apple-touch-startup-image-768x1004.png"
            media="(device-width: 768px) and (device-height: 1024px)
                   and (-webkit-device-pixel-ratio: 1)
                   and (orientation: portrait)"
            rel="apple-touch-startup-image">

<!-- iPad non-retina landscape startup image -->
<link href="apple-touch-startup-image-748x1024.png"
            media="(device-width: 768px) and (device-height: 1024px)
                   and (-webkit-device-pixel-ratio: 1)
                   and (orientation: landscape)"
            rel="apple-touch-startup-image">

<!-- iPhone 6 Plus portrait startup image -->
<link href="apple-touch-startup-image-1242x2148.png"
            media="(device-width: 414px) and (device-height: 736px)
                   and (-webkit-device-pixel-ratio: 3)
                   and (orientation: portrait)"
            rel="apple-touch-startup-image">

<!-- iPhone 6 Plus landscape startup image -->
<link href="apple-touch-startup-image-1182x2208.png"
            media="(device-width: 414px) and (device-height: 736px)
                   and (-webkit-device-pixel-ratio: 3)
                   and (orientation: landscape)"
            rel="apple-touch-startup-image">

<!-- iPhone 6 startup image -->
<link href="apple-touch-startup-image-750x1294.png"
            media="(device-width: 375px) and (device-height: 667px)
                   and (-webkit-device-pixel-ratio: 2)"
            rel="apple-touch-startup-image">

<!-- iPhone 5 startup image -->
<link href="apple-touch-startup-image-640x1096.png"
            media="(device-width: 320px) and (device-height: 568px)
                   and (-webkit-device-pixel-ratio: 2)"
            rel="apple-touch-startup-image">

<!-- iPhone < 5 retina startup image -->
<link href="apple-touch-startup-image-640x920.png"
            media="(device-width: 320px) and (device-height: 480px)
                   and (-webkit-device-pixel-ratio: 2)"
            rel="apple-touch-startup-image">

<!-- iPhone < 5 non-retina startup image -->
<link href="apple-touch-startup-image-320x460.png"
            media="(device-width: 320px) and (device-height: 480px)
                   and (-webkit-device-pixel-ratio: 1)"
            rel="apple-touch-startup-image">
</head>

<body>
<header> 
  <!--Navigation-->
  <div class="navbar-fixed">
    <nav class="white" style="overflow:visible">
      <div class="nav-wrapper">
        <div class="container"> <a class="brand-logo"  style="font-weight:300; top:0px; color:#9C27B0">Boarding<i class="hide-on-small-only" style="font-weight:300; top:0px; color:#9C27B0">pass </i><i class="animated flipInX" style="font-weight:500; font-style:normal; color:#9C27B0">Now</i></a> </div>
      </div>
    </nav>
  </div>
</header>
<main>
  <div class="container">
    <form id="foo">
      <div class="row">
      <!--Eingabe persönliche Daten-->
      <div class="col s12 m12">
        <div class="card">
          <div class="card-content">
            <p  style="text-align:center"> <i class="material-icons purple-text">person</i> </p>
            <p>
            <div class="input-field col s12 m6">
              <input id="Name" type="text" class="validate" name="Name" required>
              <label for="Name">Name</label>
            </div>
            <div class="input-field col s12 m6">
              <input id="mail" type="email" class="validate" name="mail" required>
              <label for="mail">eMail</label>
            </div>
            </p>
          </div>
        </div>
      </div>
      <!--Eingabe Flugdaten-->
      <div class="col s12 m12">
        <div class="card">
          <div class="card-content">
            <p  style="text-align:center"> <i class="material-icons purple-text">flight</i> </p>
            <p>
            <div class="input-field col s6">
              <input id="IATA" type="text" length="2" name="airline" required>
              <label for="IATA">Airline IATA</label>
            </div>
            <div class="input-field col s6"   style="padding-bottom:8px">
              <input id="flightnumber" type="number" class="validate" name="flightnumber" required>
              <label for="flightnumber">Flightnumber</label>
            </div>
            </p>
            <p>
            <div class="input-field col s6">
              <input id="seat" type="text" class="validate" name="seat" required>
              <label for="seat">Seat</label>
            </div>
            <div class="input-field col s12 m6">
              <select class="browser-default" name="class" required>
                <option value="" disabled selected>How classy are you?</option>
                <option value="Economy">Economy</option>
                <option value="Premium Economy">Prem. Economy</option>
                <option value="Business">Business</option>
                <option value="First">First</option>
              </select>
            </div>
            </p>
          </div>
        </div>
      </div>
      <!--Eingabe Abflug-->
      <div class="col s12 m12">
        <div class="card">
          <div class="card-content">
            <p  style="text-align:center"> <i class="material-icons purple-text">flight_takeoff</i> </p>
            <p>
            <div class="input-field col s6">
              <input id="depairport" type="text" class="validate" name="depairport" required>
              <label for="depairport">Departure Airport</label>
            </div>
            <div class="input-field col s6">
              <input id="depdate" type="text" class="validate" name="depdate" required>
              <label for="depdate">YYYY-MM-DD</label>
            </div>
            </p>
            <p>
            <div class="input-field col s6">
              <input id="deptime" type="text" class="validate" name="deptime" required>
              <label for="deptime">HH:MM</label>
            </div>
            <div class="input-field col s6">
              <input id="depzone" type="text" class="validate" name="depzone" required>
              <label for="depzone">Timezone</label>
            </div>
            </p>
          </div>
        </div>
      </div>
      <!--Eingabe Ankunft-->
      <div class="col s12 m12">
        <div class="card">
          <div class="card-content">
            <p  style="text-align:center"> <i class="material-icons purple-text">flight_land</i> </p>
            <p>
            <div class="input-field col s6">
              <input id="arrairport" type="text" class="validate" name="arrairport" required>
              <label for="arrairport">Arrival Airport</label>
            </div>
            <div class="input-field col s6">
              <input id="arrdate" type="text" class="validate" name="arrdate" required>
              <label for="arrdate">YYYY-MM-DD</label>
            </div>
            </p>
            <p>
            <div class="input-field col s6">
              <input id="arrtime" type="text" class="validate" name="arrtime" required>
              <label for="arrtime">HH:MM</label>
            </div>
            <div class="input-field col s6">
              <input id="arrzone" type="text" class="validate" name="arrzone" required>
              <label for="arrzone">Timezone</label>
            </div>
            </p>
          </div>
        </div>
      </div>
      <!--Eingabe Abflug-->
      <div class="col s12 m12">
        <div class="card">
          <div class="card-content">
            <p  style="text-align:center"> <i class="material-icons purple-text">confirmation_number</i> </p>
            <p>
            <div class="input-field col s12">
              <input id="qrurl" type="url" class="validate" name="qr" required>
              <label for="qrurl">URL QR-Code</label>
            </div>
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="right-align">
          <button class="btn waves-effect waves-light purple white-text" type="submit" value="Send" id="result">Request<i class="mdi-content-send right"></i> </button>
        </div>
      </div>
    </form>
  </div>
</main>
<script type="text/javascript" data-cfasync="false">

jQuery( document ).ready(function( $ ) {
	
	// variable to hold request
	var request;
	// bind to the submit event of our form
	$("#foo").submit(function(event){

		// abort any pending request
		if (request) {
			request.abort();
		}
		// setup some local variables
		var $form = $(this);
		$('#result').attr("class", "btn grey white-text inactive");
		$('#result').text('Sending...');
		
		
		// let's select and cache all the fields
		var $inputs = $form.find("button, input, select, button, textarea");
		// serialize the data in the form
		var serializedData = $form.serialize();
	
		// let's disable the inputs for the duration of the ajax request
		// Note: we disable elements AFTER the form data has been serialized.
		// Disabled form elements will not be serialized.
		$inputs.prop("disabled", true);
	
		// fire off the request to /form.php
		request = $.ajax({
			url: "https://script.google.com/macros/s/AKfycbwlJ6epEzl2Tpp_KalWyZOTTEBoV8dy-sU_Sp0iMc8-wBl-TOWF/exec",
			type: "post",
			data: serializedData
		});

	
		// callback handler that will be called on success
		request.done(function (response, textStatus, jqXHR){
			// log a message to the console
			$('#result').text('Sent');
			$('#result').parent(this).hide();
			Materialize.toast('BoardingNow Sent', 4000)
			console.log("eMail Sent");
		});
	
		// callback handler that will be called on failure
		request.fail(function (jqXHR, textStatus, errorThrown){
			// log the error to the console
			console.error(
				"The following error occured: "+
				textStatus, errorThrown
			);
		});
	
		// callback handler that will be called regardless
		// if the request failed or succeeded
		request.always(function () {
			// reenable the inputs
			$('#result').text('eMail Sent');
			$_POST = array();
		});
	
		// prevent default posting of form
		event.preventDefault();
	});
});

</script> 

<!--Skripte--> 
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
<script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }</script> 
<script type="text/javascript" src="js/materialize.min.js"></script> 
<script src="js/init.js"></script> 

<!-- Footer beginnt hier-->
<footer class="page-footer hide-on-med-and-down">
  <div class="footer-copyright" style="background:#9C27B0; border-top:#CCC; border-top:thin; border-top-style:solid">
    <div class="container"> &#169; 2015 Boarding Pass Now
      <div class="right"> <a href="http://materializecss.com" target="_blank"> <img src="img/materializecss.png" height="12px" /> </a> </div>
    </div>
  </div>
</footer>
</body>
</html>