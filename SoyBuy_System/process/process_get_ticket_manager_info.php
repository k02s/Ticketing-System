<?php

    // we write path like this because in manager_page.php || employee_page.php we included this page its mean we are still in  manager_page.php || employee_page.php we does so we dont write ../ because itz mean exit from SonyBuy_System_BETC
    include("include/config.php");

    $ticket_info_qry ="SELECT * FROM ticket WHERE EmployeeemployeeId IS NULL";
    $ticket_info_response= mysqli_query($connection , $ticket_info_qry );
    
    //$ticket_info_data = mysqli_fetch_all($ticket_info_response , MYSQLI_ASSOC);

    // echo '<pre>';
    // print_r($ticket_info_data);
    // echo '</pre>';

    // mysqli_free_result($ticket_info_response);
    // mysqli_close($connection);

?>