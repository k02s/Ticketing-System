<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SonyBuy</title>
    
    <link rel="stylesheet" href="css/style.css" />

    <!-- font awesome links -->
    <script
      src="https://kit.fontawesome.com/94f03f4734.js"
      crossorigin="anonymous"
    ></script>

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
header
{
    height: 80px;
    background-color:var(--primary-color);
    color:var(--secondary-color);
}
/* navigation bar styling💜 */
#moon_icon
{
    padding-right: 20px;
    width: 3%;
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
.login_btn 
{
    border-radius: 10px;
    border: #9FB9F1 2px solid;
    padding: 6px 15px;
    margin-left: 50px;
    background-color:var(--primary-color);
    color:var(--secondary-color);
}
.login_btn:hover
{
    background-image: linear-gradient(to right, #E29AA8 , #8CABEF);
    color: white;   
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
     color:#55608f;  
} 

/* home styling 💜 */
body
{
    background-color:var(--primary-color);
    color:var(--secondary-color);
}
.home_page_content
{
    padding: 100px 5px 0px 60px;
    float: left;
}
.home_page_content
{
    display: inline-block;
}
.home_page_content div span
{
    color : #E29AA8;
}
.home_page_content div h1
{
    font-size: 50px;
}
.open_ticket 
{
    background-image: linear-gradient(to right, #E29AA8 , #8CABEF);
    border-radius: 10px;
    border: #9FB9F1 2px solid;
    /* padding: 6px 11px; */
    margin-left: 50px;
    padding: 10px 10px;
    color : black;
    margin: 10px 0px;
}
.open_ticket  a
{
    text-decoration: none;
    color:black;
}
.home_page_img
{
    float: right;   
}
.home_page_img
{
    display: inline-block;
}
.home_page_img img
{
    width: 550px;
    height: 400px;
    margin-right: 50px;
    margin-top: 20px;
}
/* about-us styling 💜 */
.about-us_img
{
    display: inline-block;
    width: 100px;
    height: 60px;
    
}
.about-us_img
{
    float: left; 
}
.about-us_img img
{
    width:550px ;
    height: 430px;
   padding-right: 400px;
   margin-top: 530px;
   margin-left:-550px;

}
.about-us_content
{
    width: 100px;
    height: 60px;
    float: right;
    
}
.about-us_content
{
    display: inline-block;
    margin-right: 150px;
    margin-top: 150px;
    padding-right: 150px;
    
}
.about-us_content p 
{
    width: 200px;
    height: 250px;
    background-image: linear-gradient(to right, #E29AA8 , #8CABEF);
    padding: 22px 22px;
    border-radius: 12px;
}
/* reviews styling💜 */

/* #reviews
{
    width: 100%;
    height: 200px;
    background-color: red;
}
.reviwe1
{
    border-radius: 10px;
    padding: 10px 10px;
    display: inline-block;
    width: 300px;
    height: 200px;
    background-image: linear-gradient(to right, #E29AA8 , #8CABEF);
}
.reviwe1
{
    float: left; 
}
.reviwe2
{
    margin-bottom: -200px;
    border-radius: 10px;
    padding: 10px 10px;
    width: 300px;
    height: 200px;
    float: right;
    background-image: linear-gradient(to right, #E29AA8 , #8CABEF);
}
.reviwe2
{
    display: inline-block;
    margin-right: 150px;
    margin-top: 150px;
    padding-right: 150px;
} */

/* contact styling💜 */
#contact {
    text-align: center;
    background-image: linear-gradient(to right, #E29AA8 , #8CABEF);
    border-radius: 20px;
    margin: 1100px 0px 0px 0px;

}
    </style>

</head>

<body>
<header>
    <!-- navigation bar✨ -->
    <div class="nav_bar">
        <div class="left_element">
            <!-- logo -->
           <a href="#"><img src="img/logo.png" alt=""></a> 
        </div>
        <div class="right_element">
            <nav>
                <ul>
                    <li><a href="#about-us">About-Us</a></li>
                    <li> <a href="#">Reviews</a></li>
                    <li> <a href="#contact">Contact</a></li>
                    <img id="moon_icon" src="img/moon.png" alt="">
                     <!-- login button -->
                    <button class="login_btn"><a href="login_form.php">Login</a></button>
                </ul>
            </nav>
        </div>
    </div>
    </header>

    <main>
        <!-- home ✨ -->
<div class="home_page_content">
    <div>
        <h1>Welcome to Our....<br><span>Ticketing System</span></h1>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br>
             Aspernatur cum aperiam corporis eos eligendi quia perfere <br>
             ndis molestias. Perferendis voluptate sunt, dolore cum, co <br>
             nsequuntur culpa harum,laboriosam necessitatibus quod asper <br>
        </p>
    </div>
    <div>
    <!-- open ticket button -->
    <button class="open_ticket"><a href="ticket_form.php">Open Ticket</a></button>
    </div>
</div>
<div class="home_page_img">
    <img src="img/home.png" alt="">
</div>
    <!-- about-us ✨ -->
    <div id="about-us">
        <div class="about-us_img">
            <img src="img/about.png" alt="about-us_img">
        </div>
        <div class="about-us_content">
            
            <p>
               <b>About-Us</b> <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit
                . Quam accusantium harum adipisci maiores eaque perferend
                is officia, deserunt voluptatibus, tenetur incidunt volupt
                as illum, laboriosam iure perspiciatis possimus magni animi 
                quisquam
            </p>
        </div>
    </div>
    <!-- reviews ✨ -->
    <!-- <div id="reviews">
    <div class="reviwe1">
        <p>
        <i class="fa fa-quote-left fa-2x fa-pull-left fa-border"></i>
           <b>Lila Ahmad</b> <br>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam possimus enim illo delectus architecto minus consequuntur non voluptatem eos repudiandae fugit, laborum tempore aliquam quia nulla dignissimos quos facilis fugiat.
        </p>
    </div>
    <div class="reviwe2">
        <p>
        <i class="fa fa-quote-left fa-2x fa-pull-left fa-border"></i>
           <b>Alaa Ali</b> <br>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam possimus enim illo delectus architecto minus consequuntur non voluptatem eos repudiandae fugit, laborum tempore aliquam quia nulla dignissimos quos facilis fugiat.
        </p>
    </div>
    </div> -->
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

    <!-- Dark mpde code ✨-->
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

