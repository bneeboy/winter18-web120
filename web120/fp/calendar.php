<!DOCTYPE html>
<html lang="en">
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/template.css" />
  <link rel="stylesheet" href="css/template_nav.css" />
     <!-- JQuery -->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
     <!-- MenuMaker Plugin -->
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
     <!-- Icon Library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="js/script.js"></script>
     
<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<!--START LEFT COLUMN -->
        <h2>Community Calendar</h2>
        
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
<!--END LEFT COLUMN -->
       
<?php include 'includes/footer.php';?>
</html>