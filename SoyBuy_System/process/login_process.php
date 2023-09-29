<?php

    include("../include/config.php");

// check if _POST send key,value
if (!empty($_POST))
{

    // validation on field is empty ?
    $errors="";
    if(empty($_POST['username']) || empty($_POST['password']) )
    {
        $errors .= '<li>you should fill out the username and password</li>';
    }
    // to check on username just have a number
    if(!preg_match("/^[0123456789]*$/",$_POST['username']))
    {
        $errors .= '<li>username only numbers allowed</li>';
    }
    // to check on password  have a number charachter
    // if(!preg_match("/[a-zA-Z][0-9][_#*]/",$_POST['password']))
    // {
    //     $errors .= '<li>password must contain charachter(#,*,_ and number and letters</li>';
    // }

    
    
     // check if $errors is empty to go to DB
     if($errors != "")
     {
         header("location:../login_form.php?error=".$errors); // after ? is a variable with error name
     }else{ // in false case go to DB
        //here we check if field fill correctly then check if this user in DB
        // trim() to ignore spaces
         $username= trim($_POST['username']);
         $password= trim($_POST['password']);

         // Database
        $user_qry = "SELECT * FROM user WHERE user_name = '$username' AND password = '$password'";
        $user_response = mysqli_query($connection , $user_qry);
        // this vaiable to check on number of rows if 1 the user exist if 0 is not exist
        $num_user_rows = mysqli_num_rows($user_response);
        if($num_user_rows == 1){
            $data = mysqli_fetch_assoc($user_response);
            // userId is a column name
            // in $data variable we soterd all info row
            // echo $data['userId'];
            session_start();
            $_SESSION['userId'] = $data['userId'];

            if($data['role'] == "employee")
            {
                header("location:../employee_page.php");
            }else{
                header("location:../manager_page.php");
            }

        }else{
            $errors = "<li>user name or password does not exist</li>";
            header("location:../login_form.php?error=".$errors);
        }
        
        // to check if $connection and $user_qry send correctly not if this user exist in DB 
        // if(mysqli_query($connection , $user_qry)){
        //     echo "successes";
        // }else{
        //     echo "error";
        // }
     }
   
     

}else{
    // you can make design for this error
    echo "this page is not found 404";
}

?>