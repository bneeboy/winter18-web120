<!DOCTYPE html>
<html lang="en">
 <head>
  <title><?=$title?></title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <script src="https://use.fontawesome.com/d364dcdd75.js"></script>
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
 </head>
 <body>
     <header>
         <h1><a href="index.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i> Christian Patton's WEB120 Website</a></h1>
       <nav> 
           <ul class="topnav" id="myTopnav">
           <?=makeLinks($nav1)?>
       <!-- START NAV       
       <li><a href="index.php" class="selected">Welcome</a></li>
       <li><a href="elements.html">HTML Elements</a></li>
       <li><a href="aia.html">AIA</a></li>
       <li><a href="big/index.html">BIG</a></li>
       <li><a href="http://w3schools.com" target="_blank">W3 Schools</a></li>
       <li><a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a></li>
       <li><a href="https://docs.google.com/drawings/d/1jGhUcQ1KrnoEPub0_1ADTRVeJSl9ldPF83Mce4XvILQ/edit?usp=sharing">Flowchart</a></li>
       <li><a href="fp/index.html">Final Project</a></li>
       <li><a href="contact.php">Contact Christian</a></li>
         END NAV -->
               <li class="icon"> <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a> </li>
     </ul>       
     </nav>
     </header>