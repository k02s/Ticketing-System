<?php



if(isset($_POST['ticket_id']) && isset($_POST['employee_id'])){
   
    include("../include/config.php");

    $ticket_id= $_POST['ticket_id'];
    $employee_id = $_POST['employee_id'];

    $qry_assign = "UPDATE ticket SET EmployeeemployeeId = '$employee_id' WHERE ticket_id = '$ticket_id'";
    // $qry_response =mysqli_query($connection,$qry_assign);

    if(mysqli_query($connection,$qry_assign))
    {
        header("location:../refresh_page.php");
        // echo "done";
    }else{
        echo "error";
    }



    }

?>