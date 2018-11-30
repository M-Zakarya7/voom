<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    
    <meta charset="utf-8">
    <title>VOOM WorkSpace</title>
    <meta name="description" content="">
    <meta name="author" content="">

    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    
    <script src="js/modernizr.js"></script>

    
    <link rel="shortcut icon" href="post/Logo-8.png" type="image/x-icon">
    <link rel="icon" href="post/Logo-8.png" type="image/x-icon">
    
    <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: none;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: none;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>

</head>

<body id="top">

    
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    
    <header class="s-header header">

        <div class="header__logo">
            <a class="Logo" href="index.html">
                <img src="post/Logo.svg" alt="Homepage" style="width:60px;height:60px;">
            </a>
        </div> 

        <a class="header__search-trigger" href="#0"></a>
        <div class="header__search">

            <form role="search" method="get" class="header__search-form" action="#">
                <label>
                    <span class="hide-content">Search for:</span>
                    <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off">
                </label>
                <input type="submit" class="search-submit" value="Search">
            </form>

            <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

        </div>  

        <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
        <nav class="header__nav-wrap">

            <h2 class="header__nav-heading h6">Navigate to</h2>
            


            <ul class="header__nav">
                <li class="current"><a href="index.html" title="">Home</a></li>
                
                <li class="has-children">
                    <a href="#0">Registeration</a>
                    <ul class="sub-menu">
                        <li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></li>
                        <li><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button></li>
                    </ul>
                    
                </li>
                
                <li class="has-children">
                    <a href="#0" title="">Credits</a>
                    <ul class="sub-menu">
                        <li><a href="10days-8hours.html">10 Days - 8 Hours</a></li>
                        <li><a href="10days-24hours.html">10 Days - 24 Hours</a></li>
                        <li><a href="20days-8hours.html">20 Days - 8 Hours</a></li>
                        <li><a href="20days-24hours.html">20 Days - 24 Hours</a></li>
                        <li><a href="30days-8hours.html">30 Days - 8 Hours</a></li>
                        <li><a href="30days-24hours.html">30 Days - 24 Hours</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <a href="#0" title="">Space Area</a>
                    <ul class="sub-menu">
                        <li><a href="Shared Space.html">Shared Space</a></li>
                        <li><a href="Reservation Rooms.html">Reservation Room</a></li>
                    </ul>
                </li>
                <li><a href="Services.html" title="">Services</a></li>
                <li><a href="page-about.html" title="">About</a></li>
                <li><a href="page-contact.html" title="">Contact</a></li>
            </ul> 

            <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

        </nav> 

    </header> 

    <div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
   <!--register-->
   <div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="reg.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

    <section class="s-featured">
        <div class="row">
            <div class="col-full">

                <div class="featured-slider featured" data-aos="zoom-in">

                    <div class="featured__slide">
                        <div class="entry">

                            <div class="entry__background" style="background-image:url('post/ABD_0421-Pano.jpg');"></div>
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">VOOM</a></span>

                                <h1><a href="#0" title="">What You Need For Quiet Studying</a></h1>

                                
                            </div> 
                            
                        </div> 
                    </div>

                    <div class="featured__slide">

                        <div class="entry">

                            <div class="entry__background" style="background-image:url('post/ABD_0375-Pano.jpg');"></div>
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">VOOM</a></span>

                                <h1><a href="#0" title="">To Achieve Your Work Easily</a></h1>

                                
                            </div> 
                            
                        </div> 

                    </div> 

                    <div class="featured__slide">

                        <div class="entry">

                            <div class="entry__background" style="background-image:url('post/ABD_0383.jpg');"></div>

                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">VOOM</a></span>

                                <h1><a href="#0" title="">HOST_YOUR_DREAM</a></h1>

                                
                            </div> 

                        </div> 

                    </div> 
                    
                </div> 

            </div> 
        </div>
    </section> 


    
    <section class="s-content">
        
        <div class="row entries-wrap wide">
            <div class="entries">

                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="post/ABD_0418-Pano.jpg" 
                                     srcset="post/ABD_0418-Pano.jpg 1x, post/ABD_0418-Pano.jpg 2x alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">    
                            <div class="item-entry__cat">
                                <a href="category.html">Shared Space</a> 
                            </div>  
                        </div>
                    </div> 

                </article> 

                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="post/ABD_0375-Pano.jpg" 
                                     srcset="post/ABD_0375-Pano.jpg 1x, post/ABD_0375-Pano.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="category.html">Indiviual Space</a>
                            </div>
                        </div>
                    </div> 
    
                </article> 

                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="post/ABD_0383.jpg" 
                                     srcset="post/ABD_0383.jpg 1x, post/ABD_0383.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="category.html">Class Room</a>
                            </div>
                        </div>
                    </div> 
    
                </article> 

                <article class="col-block">
                
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="post/ABD_0469-Pano.jpg" 
                                     srcset="post/ABD_0469-Pano.jpg 1x, post/ABD_0469-Pano.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="category.html">Double Share</a>
                            </div>
                        </div>
                    </div> 

                </article> 

                <article class="col-block">
                
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="post/ABD_0456-Pano.jpg" 
                                     srcset="post/ABD_0456-Pano.jpg 1x, post/ABD_0456-Pano.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="category.html">Cinema</a>
                            </div>
                        </div>
                    </div> 
    
                

    </section> 


    
    <footer class="s-footer">

        <div class="s-footer__main">
            <div class="row">
                
                <div class="col-six tab-full s-footer__about">
                        
                    <h4>About Voom</h4>

                    <p>
                        Voom is a wonderful work environment. It is beautiful, peaceful, colorful,
                    air-conditioned workspace. When you do your work in this atmosphere you feel like you are also relaxing and chilling.
                    It is a great community and place to connect and meet new people and make new friends</p>

                </div>  

                <div class="col-six tab-full s-footer__subscribe">
                        
                    
                    <div class="subscribe-form">
                        <form id="mc-form" class="group" novalidate="true">

                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                
                            <input type="submit" name="subscribe" value="Send">
                
                            <label for="mc-email" class="subscribe-message"></label>
                
                        </form>
                    </div>

                </div> 

            </div>
        </div> 

        <div class="s-footer__bottom">
            <div class="row">

                <div class="col-six">
                    <ul class="footer-social">
                        <li>
                            <a href="http://bit.ly/2Rbbdx3"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="http://bit.ly/2P1pSZI"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>

                
                
            </div>
        </div> 

        <div class="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"></a>
        </div>

    </footer> 


    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>