<!DOCTYPE html>
<html>
    <head>
        <title>SonyBuy</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/style.css" />

    <style>

.error
{
color: red;
}
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
    width: 5%;
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
    /* color: black; */
    color:var(--secondary-color);
}
.right_element a:hover
{
     color: gray;  
} 
/* form styling💜 */
main {
    margin: 10px 430px;
    padding: 10px 20px;
    background-image: linear-gradient(to right, #E29AA8 , #8CABEF);

}
input[type=text] {
    width: 280px;
    height: 20px;
    border-radius: 10px;
}

input[type=date] {
    width: 280px;
    height: 20px;
    border-radius: 10px;
}

input[type=email] {
    width: 280px;
    height: 20px;
    border-radius: 10px;
}

input[type=number] {
    width: 280px;
    height: 20px;
    border-radius: 10px;
}
select {
    width: 280px;
    height: 20px;
    border-radius: 10px;
}

input[type=submit] {
    width: 80px;
    margin: 10px 120px;
    padding: 5px 10px;
    border-radius: 10px;
    background-color: #E29AA8;
}
input[type=submit]:hover {
    color: aliceblue;
}
textarea
{
    width: 280px;
    height: 150px;
}
#contact {
    text-align: center;
    background-image: linear-gradient(to right, #E29AA8 , #8CABEF);
    border-radius: 20px;
    margin: 40px 0px 0px 0px;

}

    </style>  
    </head>

    <body>
        <div class="error">
        <?php

            //  In order to stay on the same page when he's in an error
            if(isset($_POST['error']))
            {
               echo $_POST['error'];
            }
        ?>
        </div>

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
                    <li> <a href="#contact">Contact</a></li>
                    <img id="moon_icon" src="img/moon.png" alt="">
                     <!-- login button -->
                </ul>
            </nav>
        </div>
    </div>
    </header>
        
        <main>
        <form action="process/ticket_process.php" method="post">
            <h3>Hi , I'm ticket 🤗✉️</h3>
            <p> <b>please fill out all field to send your problem:</b> </p>
        Name: <br> <input type="text" name="name" required> <br>
        Email: <br> <input type="text" name="email" required> <br>
        Phone Number: <br> <input type="number" name="phone_number" required> <br>
        Product Category: <br>
        <select name=product_category>
            <option>Heaters</option>
            <option>Hair dryer</option>
            <option>microwaves</option>
            <option>washing machines</option>
            <option>refrigerators</option>
        </select> <br>
        Purchased Date: <br> <input type="date" name="purchased_date" required> <br>
        Product Serial Number: <br> <input type="number" name="product_serial_number" required> <br>
        Ticket Issue Date: <br> <input type="date" name="ticket_issue_date" required> <br>
        Problem Description: <br> <textarea name="problem_description"rows="5"cols="40" ></textarea> <br>
        <input type="submit" name="submit" value="send">
        </form>
        </main>

        <footer>
            <!-- contact ✨ -->
            <div id="contact">
            <p><b>Contact information</b></p>
            <p>
            <i class="fa-solid fa-envelope"></i>Email: 21023192@student.ltuc.com
            </p>
            <p><i class="fa-solid fa-phone"></i> Phone Number: 0799999999</p>
            <p>made with  &#128153;	By Khadijah</p>
            <p>&copy; 2022 Copyright</p>
            </div>
        </footer>

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




