<?php

// this following helps PHP date errors
date_default_timezone_set('America/Los_Angeles');



switch(THIS_PAGE)
{    
    case 'index.php': 
    $title = "AD320_Group_Sprint"; 
    break;      
        
    case 'create.php': 
    $title = "create"; 
    break;
        
    case 'delete1.php': 
    $title = "delete"; 
    break;
    
    case 'update.php': 
    $title = "update"; 
    break;
    
    case 'read.php': 
    $title = "read"; 
    break;
        
    default: 
    $title = THIS_PAGE;  
    $logo = "";
}