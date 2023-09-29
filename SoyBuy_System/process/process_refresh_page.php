<?php

include("../include/config.php");

$refresh_qry = "SELECT * FROM ticket where EmployeeemployeeId IS NULL";
$refresh_ticket_response= mysqli_query($connection , $refresh_qry );


$ticket_info_data = mysqli_fetch_all($refresh_ticket_response , MYSQLI_ASSOC);

    // echo '<pre>';
    // print_r($ticket_info_data);
    // echo '</pre>';

    // mysqli_free_result($refresh_ticket_response);
    // mysqli_close($connection);




?>