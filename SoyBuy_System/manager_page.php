<?php

    // session_start();
    include("process/process_get_manager_info.php");
    // echo $_SESSION['userId'];
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SonyBuy</title>

    <link rel="stylesheet" href="css/style.css" />

    <style>
        :root
        {
            --primary-color: #fff;
            --secondary-color: #212121;
        }
        .dark_theme
        {
            --primary-color: #000106;
            --secondary-color: #fff;
        }
        body
        {
            background-color:var(--primary-color);
            color:var(--secondary-color);
        }
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
            color:var(--secondary-color);
        }
        .right_element a:hover
        {
            color: gray;  
        } 
        
        .hi_with_name
        {
            font-size: 40px;
            border-radius: 15px;
            background-image: linear-gradient(to right, #E29AA8 , #8CABEF);
            padding: 15px 15px;
            margin: 100px 400px;
            text-align: center;
        }
        .hi_with_name a
        {
            text-decoration: none;
            color:var(--secondary-color);
        }
        .hi_with_name button
        {
            background-image: linear-gradient(to right, #E29AA8 , #8CABEF);
            border: none;
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
                    <!-- <li> <a href="#contact">Contact</a></li> -->
                    <img id="moon_icon" src="img/moon.png" alt="">
                     <!-- login button -->
                </ul>
            </nav>
        </div>
    </div>
        </header>
    <div>
        <div class="hi_with_name">
    <?php 
         echo "Hi ". $user_info_data['first_name'] ." ". $user_info_data['last_name']."👋";
         echo "<br><button><a href='manager_ticket.php'>Click me to assign ticket ✉️</a></button>" ;
    ?>
    
        </div>
    </div>

     <!-- Dark mpde code -->
 <script>
        var moon_icon = document.getElementById("moon_icon");
        moon_icon.onclick = function(){
            document.body.classList.toggle("dark_theme");
            if(document.body.classList.contains("dark_theme")){
                icon.src = "img/ssunn.png";
            }else{
                icon.src = "img/moon.png";
            }
        }
    </script>
</body>
</html>