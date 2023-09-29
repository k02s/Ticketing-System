<?php


include("include/config.php");
// include("process/process_get_emp_info.php");
// session_start();
// $user_info = $_SESSION['userId'];
// include("process_get_emp_info.php");

    $qry ="SELECT * FROM ticket WHERE EmployeeemployeeId = '$user_info'";
    $ticket_info_response= mysqli_query($connection , $qry );
    
    // $ticket_info_data = mysqli_fetch_all($ticket_info_response , MYSQLI_ASSOC);

    // echo '<pre>';
    // print_r($ticket_info_data);
    // echo '</pre>';

?>