<?php
//config.php

//enables page to know it's own name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//helps prevent date errors
date_default_timezone_set('America/Los_Angeles');

//reCAPTCHA credentials here

//Use this site key in the HTML code your site serves to users: "6LdGCJYUAAAAAKBDcOgAgAN32mlA_sXu8imIRxVN"

//Use this secret key for communication between your site and reCAPTCHA: "6LdGCJYUAAAAAORuQ-eI-F9_9iq3tH9Fs-8qrgLE"

//default in case pages don't have titles
$title = THIS_PAGE;

switch(THIS_PAGE){
   
    case 'index.php':
        $title = 'MLRA Members Only Homepage';
        $logo = "fa-home";
        $logo_color = ' style="color:black"';
    break;   
        
    case 'about.php':
        $title = 'MLRA Members Only About Page';
        $logo = "fa-info-circle";
        $logo_color = ' style="color:black"';
    break; 
        
    case 'resources.php':
        $title = 'MLRA Members Only Links &amp; Resources';
        $logo = "fa-globe";
        $logo_color = ' style="color:black"';
    break;
        
    case 'gallery.php':
        $title = 'MLRA Members Only Gallery';
        $logo = "fa-camera-retro";
        $logo_color = ' style="color:black"';
    break;
        
    case 'newsfeed.php':
        $title = 'MLRA Members Only News Feed';
        $logo = "fa-newspaper-o";
        $logo_color = ' style="color:black"';
    break;
        
    case 'calendar.php':
        $title = 'MLRA Members Only Calendar';
        $logo = "fa-calendar";
        $logo_color = ' style="color:black"';
    break;
        
    case 'map.php':
        $title = 'MLRA Members Only Map';
        $logo = "fa-map-o";
        $logo_color = ' style="color:black"';
    break;    
        
    case 'contact.php':
        $title = 'MLRA Members Only Feedback/Suggestions';
        $logo = "fa-phone";
        $logo_color = ' style="color:black"';
    break; 
        
}

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Home Page";
$nav1['about.php'] = "About";
$nav1['resources.php'] = "Links &amp; Resources";
$nav1['gallery.php'] = "Gallery";
$nav1['newsfeed.php'] = "Hawaii News Feed";
$nav1['calendar.php'] = "Community Calendar";
$nav1['map.php'] = "Resort Map";
$nav1['contact.php'] = "Feedback/Suggestions";
/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}



?> 