<?php

// this following helps PHP date errors
date_default_timezone_set('America/Los_Angeles');



switch(THIS_PAGE)
{    
    case 'index.php': 
    $title = "AD320_Group_Sprint"; 
    break;      
        
    case 'Page1.php': 
    $title = "Page1"; 
    break;
        
    case 'Page2.php': 
    $title = "Page2"; 
    break;
    
    case 'Page3.php': 
    $title = "Page3"; 
    break;
        
    default: 
    $title = THIS_PAGE;  
    $logo = "";
}