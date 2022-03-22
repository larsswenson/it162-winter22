<?php

ob_start();

//this helps us avoid PHP date errors:

date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = '';

switch(THIS_PAGE){

    case 'template.php':
        $title = "Alejandro Ulloa Hair";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;

    case 'appointments.php':
        $title = "Appointments";
        $logo = "fa-home";
        $PageID = 'Appointments';
    break;

    case 'services.php':
        $title = "Services";
        $logo = "fa-home";
        $PageID = 'Services';
    break;

    case 'products.php':
        $title = "Products";
        $logo = "fa-home";
        $PageID = 'Products';
    break;

    case 'about.php':
        $title = "About";
        $logo = "fa-home";
        $PageID = 'About';
    break;    
    
    case 'contact.php':
        $title = "Contact Alejandro";
        $logo = "fa-home";
        $PageID = 'Contact';
    break;

    default:
        $title = THIS_PAGE;
        $logo = ''; 
        $PageID = '';

}

$nav1['template.php'] = 'Welcome';
$nav1['appointments.php'] = 'Appointments';
$nav1['services.php'] = 'Services';
$nav1['products.php'] = 'Products';
$nav1['about.php'] = 'About';
$nav1['contact.php'] = 'Contact';


function makeLinks($linkArray) {
    
    $myReturn = '';
    foreach($linkArray as $url => $text){
        if($url == THIS_PAGE){
            $myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
        }
        else{
            $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;

        }
        
    }
    return $myReturn;
}

?>
