<!DOCTYPE html>
<html lang="en">
 <head>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/template.css" />
  <link rel="stylesheet" href="css/template_nav.css" />
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
<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
     
       <h2>Feedback/Suggestions</h2>

    <section class="contact">
    
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
			Would you like to contact a specific board member?<br />
			<select name="Contact a Board Member" required="required" title="Contact a Board Member" tabindex="30">
				<option value="">Choose A Member</option>
				<option value="Sandra Patton">Sandra Patton</option>
				<option value="Sheri Rapoza">Sheri Rapoza</option>
				<option value="No Thanks">No Thanks</option>
			</select>
		</label>
	</div>
	
	<div>	
		<fieldset>
			<legend>What is your affiliation with Mauna Lani?</legend>
			<input type="checkbox" name="Community Member" value="Community Member" tabindex="40" /> Community Member <br />
			<input type="checkbox" name="Employee" value="Employee" /> Employee <br />
			<input type="checkbox" name="Other" value="Other" /> Other <br />
		</fieldset>
	</div>
	
		<div>	
		<fieldset>
			<legend>Would you like to join the mailing list?</legend>
			<input type="radio" name="Join_Mailing_List?" value="Yes" 
			required="required" title="Mailing list" tabindex="50"  
			/> Yes <br />
			<input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
		</fieldset>
	</div>
	<div>	
		<label>
			Please leave your feedback or suggestion/'s here<br /><textarea name="Leave A Comment" cols="36" rows="4" placeholder="Your feedback and suggestions are important!" tabindex="60"></textarea>
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
        src="https://www.google.com/recaptcha/api.js?hl=en">
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