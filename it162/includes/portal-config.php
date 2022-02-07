<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

ob_start();

//this helps us avoid PHP date errors:

date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){

    case 'index.php':
        $title = " Lars Swenson's IT 162 Portal";
        $logo = 'fa-home';
        $PageID = 'Home';
    break;

    case 'aia.php':
        $title = "Sara's Final Project AIA (Client work)";
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#00f"';
        $PageID = 'AIA';
    break;
    
    case 'contact.php':
        $title = "Contact Lars";
        $logo = "fa-paper-plane-o";
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Contact Lars';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default 
        $PageID = '';

}

$nav1['index.php'] = 'Home';
$nav1['big/index.php'] = 'Big';
$nav1['aia.php'] = 'AIA';
$nav1['flowchart.php'] = 'Flowchart/Layout';
$nav1['fp/index.php'] = 'Final Project';
$nav1['contact.php'] = 'Contact Lars';

/* create function to generate links and keep highlight on current page

      <li><a href="index.php" class="selected">Home</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contact.php">Contact Lars</a></li>
*/

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
