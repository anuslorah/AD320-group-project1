<?php

// this following helps PHP date errors
date_default_timezone_set('America/Los_Angeles');



switch(THIS_PAGE)
{    
    case 'index.php': 
    $title = "search for a bar";
    break;      
        
    case 'Page1.php': 
    $title = "add a new bar";
    break;
        
    case 'Page2.php': 
    $title = "update a bar";
    break;
    
    case 'Page3.php': 
    $title = "delete a bar";
    break;
        
    default: 
    $title = THIS_PAGE;  
    $logo = "";
}