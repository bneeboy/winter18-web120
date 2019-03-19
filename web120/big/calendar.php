<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Christian Patton's BIG Website</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
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
     
<!--START LEFT COLUMN -->
    <section>
        <h2>Google Calendar</h2>
        
        <!-- SHOW/HIDE MONTH VIEW CALENDAR BASED ON RES-->
        <div class='month-view embed-container'>
            <iframe src='https://calendar.google.com/calendar/embed?showTitle=0&height=600&wkst=1&bgcolor=%23cccccc&src=b5rh4kgelcq7fkakbps07j87d4%40group.calendar.google.com&color=%23865A5A&ctz=America%2FLos_Angeles' style='border:solid 1px #777' width='800' height='600' frameborder='0' scrolling='no'>
            </iframe>
        </div>
                <!-- SHOW/HIDE AGENDA VIEW CALENDAR BASED ON RES -->
        <div class='agenda-view embed-container'>
            <iframe src='https://calendar.google.com/calendar/embed?showTitle=0&mode=AGENDA&height=600&wkst=1&bgcolor=%23cccccc&src=b5rh4kgelcq7fkakbps07j87d4%40group.calendar.google.com&color=%23865A5A&ctz=America%2FLos_Angeles' style='border:solid 1px #777' width='800' height='600' frameborder='0' scrolling='no'>
            </iframe>
        </div>
       </section>
       
<!--END LEFT COLUMN -->

  
       
    <?php include 'includes/footer.php';?>
  </div>
 </body>
</html>
