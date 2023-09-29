<?php

    // we write session because id stored in it 
    session_start();
    $user_info = $_SESSION['userId'];
    // we write path like this because in manager_page.php || employee_page.php we included this page its mean we are still in  manager_page.php || employee_page.php we does so we dont write ../ because itz mean exit from SonyBuy_System_BETC
    include("include/config.php");
    // to print employee name in employee_page
    $user_info_qry ="SELECT * FROM employee WHERE UseruserId = '$user_info'";
    $user_info_response= mysqli_query($connection , $user_info_qry );
    $user_info_data = mysqli_fetch_assoc($user_info_response);
    

    
?>