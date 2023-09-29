<?php


    include("process/process_get_ticket_manager_info.php"); 
    include("process/process_get_manager_info.php");
   ;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SonyBuy</title>
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" />

    <style>
        /* nav bar styling💜 */
        #moon_icon
        {
            padding-right: 20px;
            width: 7%;
            cursor: pointer;
        }
        .nav_bar
        {
            padding: 5px 20px;
        }
        .left_element img {
            float: left;
            width: 170px;
            height: 80px;
            padding-left: 20px;
        }
        .left_element{
            display: inline-block;
        }
        .right_element {
            float: right;
            padding: 0px 100px;
        }
        .right_element nav ul li 
        {
            list-style-type: none;
            display: inline-block;
        }
        .right_element nav ul li
        {
            padding: 10px 20px;
        }
        .right_element a 
        {
            text-decoration: none;
            color:white;
        }
        .logout_btn 
        {
            border-radius: 10px;
            border: #9FB9F1 2px solid;
            padding: 6px 15px;
            margin-left: 50px;
            background-color: #7C83F4;
            
            
        }
        .refresh_btn 
        {
            border-radius: 10px;
            border: #9FB9F1 2px solid;
            padding: 6px 15px;
            margin-left: 50px;
            background-color: blueviolet;
            
        }

        /* table styling 💜*/
        table ,th ,td
        {
            border: 1px solid  blueviolet;
        }
        table
        {
            width: 100%;
            margin-top: 290px;
            margin-bottom: 100px;
        }
        html,body {
        height: 100%;
        }

        body {
        margin: 0px;
        background-image: linear-gradient(to right, #E29AA8 , #8CABEF);
        font-family: sans-serif;
        font-weight: 100;
        }

        .container {
        
        position: absolute;
        top: 10%;
        left: 50%;
        transform: translate(-50%, -50%);
        }

        table {
        width: 1100px;
        border-collapse: collapse;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        th,td 
        {
        padding: 15px;
        background-color: rgba(255,255,255,0.2);
        color: #fff;
        }

        th 
        {
        text-align: left;
        color :#55608f
        }

        thead  th 
        {
            background-color: #55608f;
        }
        tbody tr:hover 
        {
            background-color: rgba(255,255,255,0.3);  
        }
        td:hover:before 
        {
                position: relative;
                content: "";
                position: absolute;
                background-color: rgba(255,255,255,0.2);
                
        }


        .form_assign
        {
            margin-top: 500px;
            margin-left: 500px;
            margin-right: 500px;
            padding: 15px 10px;
            background-color: #fff;
            border-radius: 15px;
            border: solid 2px blueviolet;
        }
        .form_assign h2
        {
            text-align: center;
          
        }
        input[type=submit]
        {
            background-image: linear-gradient(to right, #E29AA8 , #8CABEF);
            border-radius: 10px;
            padding: 7px 7px;
            width: 70px;
            margin: 0px 65px;
        }
        input[type=number]
        {
            border-radius: 7px;
        }
    </style>
</head>
<body>

<header>
    <!-- navigation bar✨ -->
    <div class="nav_bar">
        <div class="left_element">
            <!-- logo -->
           <a href="index.php"><img src="img/logo.png" alt=""></a> 
        </div>
        
        <div class="right_element">
            <nav>
                <ul> 
                    <button class="logout_btn"><a href="process/process_logout.php">Logout</a></button>
                </ul>
            </nav>
        </div>
    
    </div>
</header>
    <table class= "container">
        <tr>
            <th>Ticket ID</th>
            <th>customer Name</th>
            <th>email</th>
            <th>phone Number</th>
            <th>serial Number</th>
            <th>product Category</th>
            <th>purchased Date</th>
            <th>issue Date</th>
            <th>problem Description</th>
            
        </tr>

        <?php
        //    while loop to take rows and stored in right column
            while($data=mysqli_fetch_assoc($ticket_info_response))
            {
                echo "<tr>";
                echo "<td>".$data['ticket_id']."</td>";
                echo "<td>".$data['customerName']."</td>";
                echo "<td>".$data['email']."</td>";
                echo "<td>".$data['phoneNumber']."</td>";
                echo "<td>".$data['serialNumber']."</td>";
                echo "<td>".$data['productCategory']."</td>";
                echo "<td>".$data['purchasedDate']."</td>";
                echo "<td>".$data['issueDate']."</td>";
                echo "<td>".$data['problemDescription']."</td>";
            
            }
        ?>

    </table>
   
    <div class="form_assign">
        <form action="process/assign_ticket_by_manager.php" method="post" target="_self">
            <h2>Assign Ticket✉️</h2>
        Ticket ID: <br><input type="number" name="ticket_id" ><br>
        Employee ID:<br><input type="number" name="employee_id" ><br>
        <br>
        <input type="submit" value="assign">
        </form>
    </div>
</body>
</html>