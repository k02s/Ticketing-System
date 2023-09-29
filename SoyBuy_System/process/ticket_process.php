<?php

     include("../include/config.php");

// check if _POST send key,value
if (!empty($_POST))
{
    // validation on field is empty
    $errors="";
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone_number']) || empty($_POST['purchased_date']) || empty($_POST['problem_description']) || empty($_POST['product_serial_number']) || empty($_POST['ticket_issue_date']))
    {
        $errors .= '<li>you should fill out all field</li>';
    }
    // phone number constraint
    if(!preg_match("/^[0123456789]*$/",$_POST['phone_number']))
    {
        $errors .= '<li>phone number only numbers allowed</li>';
    }
    // product serial number constaint
    if (!filter_var($_POST['product_serial_number'], FILTER_VALIDATE_INT)) 
    { 
        $errors .= "<li>Invalid product serial number format</li>";
    }
    // email constraint
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
    { 
        $errors .= "<li>Invalid email format</li>";
    }



    // check if $errors is empty to go to DB
    if($errors != "")
    {
        header("location:../ticket_form.php?error=".$errors); // after ? is a variable with error name
    }else{ // in false case go to DB
        //here we check if field fill correctly then stores in DB
        // trim() to ignore spaces
        $name = trim(ucfirst($_POST['name']));
        $email = trim($_POST['email']);
        $phone_number = trim($_POST['phone_number']);
        $product_category =trim($_POST['product_category']);
        $purchased_date = trim($_POST['purchased_date']);
        $problem_description = trim($_POST['problem_description']);
        $product_serial_number = trim($_POST['product_serial_number']);
        $ticket_issue_date = trim($_POST['ticket_issue_date']);

        //Database 
        $sql_customer_ticket ="INSERT INTO ticket
        (serialNumber,productCategory,phoneNumber,customerName,email,purchasedDate,issueDate,problemDescription)
        VALUES ('$product_serial_number','$product_category','$phone_number','$name','$email','$purchased_date','$ticket_issue_date','$problem_description')";

        $customer_ticket_response= mysqli_query($connection , $sql_customer_ticket);

        header('location:../thank_you_ticket.php');
        // $customer_ticket_data = mysqli_fetch_assoc($customer_ticket_response);

        // if (mysqli_query($connection , $sql_customer_ticket))
        //     {
        //         echo "done ";
        //     }else{
        //         echo "Error: " . $sql_customer_ticket . "<br>" . mysqli_error($connection);
        //     }
       

    }
    




}else{

    echo "this page is not found 404";
}
?>