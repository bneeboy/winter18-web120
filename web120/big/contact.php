<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Christian Patton's BIG Website</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/contact_form.css" />

     <!-- JQuery -->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
     <!-- MenuMaker Plugin -->
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
     <!-- Icon Library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="js/script.js"></script>
 </head>
 <body>
   <div class="wrapper">
     <header>
       <h1>Web Development Research Topics &amp; Examples </h1>
       <nav id="cssmenu">
  <ul>
     <li><a href="../index.php"><i class="fa fa-fw fa-institution"></i> WEB120</a></li>
     <li><a href="index.php"><i class="fa fa-fw fa-home"></i> BIG Website</a></li>
     <li><a href="flexbox.php"><i class="fa fa-fw fa-th-large"></i> Flexbox</a></li>
     <li><a href="rvm.php"><i class="fa fa-fw fa-mobile"></i> Responsive Vs. Mobile</a></li>
     <li><a href="gallery.php"><i class="fa fa-fw fa-camera-retro"></i> Image Gallery</a></li>
     <li><a href="#"><i class="fa fa-fw fa-bars"></i> Google Tools</a>
        <ul>
           <li><a href="shopping.php"><i class="fa fa-fw fa-shopping-cart"></i> Shopping Carts</a></li>
           <li><a href="calendar.php"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
           <li><a href="map.php"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
        </ul>
     </li>
     <li><a href="contact.php"><i class="fa fa-fw fa-server"></i> Contact Christian</a></li>
  </ul>
       </nav>
    </header>
     
<!--START CONTENT-->
    <section class="fullwidth">
        <h2>Contact Christian</h2>
       	<!-- START HTML FORM -->
	<form action="contact.php" method="post">
	<div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			How Did You Hear About Me?:<br />
			<select name="How_Did_You_Hear_About_Me?" required="required" title="How You Heard is required" tabindex="30">
				<option value="">Choose How You Heard</option>
				<option value="Online">Web</option>
				<option value="A Friend">A Friend</option>
				<option value="Other">Other</option>
			</select>
		</label>
	</div>
	
	<div>	
		<fieldset>
			<legend>What Services Are You Interested In?</legend>
			<input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> New Website <br />
			<input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
			<input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
		</fieldset>
	</div>
	
		<div>	
		<fieldset>
			<legend>Would you like to join the mailing list?</legend>
			<input type="radio" name="Join_Mailing_List?" value="Yes" 
			required="required" title="Mailing list is required" tabindex="50"  
			/> Yes <br />
			<input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
		</fieldset>
	</div>
	<div>	
		<label>
			Leave A Comment!<br /><textarea name="Leave A Comment" cols="36" rows="4" placeholder="Your comments are important!" tabindex="60"></textarea>
		</label>
	</div>	
	<div></div>
    <div class="g-recaptcha" data-sitekey="6LdGCJYUAAAAAKBDcOgAgAN32mlA_sXu8imIRxVN"></div>
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js">
    </script>
       <p class="clear-recaptcha"></p>
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
      
  </script>
       </section>
       

<?php include 'includes/footer.php';?> 
  </div>
 </body>
</html>