<?php
//config.php

//enables page to know it's own name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//helps prevent date errors
date_default_timezone_set('America/Los_Angeles');

//reCAPTCHA credentials here

//default in case pages don't have titles
$title = THIS_PAGE;

switch(THIS_PAGE){
   
    case 'index.php':
        $title = 'Christian\'s Home Page!';
        $logo = "fa-home";
        $logo_color = ' style="color:black"';
    break;
        
    case 'contact.php':
        $title = 'Christian\'s Contact Page!';
        $logo = "fa-paper-plane-o";
    break;    
        
}

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.html'] = "AIA";
$nav1['https://docs.google.com/drawings/d/1jGhUcQ1KrnoEPub0_1ADTRVeJSl9ldPF83Mce4XvILQ/edit'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contact.php'] = "Contact Christian";

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