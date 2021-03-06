
<!DOCTYPE html>
<html>

<head>
    <title>WEB</title>
    <link rel="stylesheet" href="css/aboutUs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <ul class="nav-bar">
    <?php

include('session.php');
if(isset($_SESSION['User'])){
    echo '<li class="li-bar"><a href="Logged-In.php">Home</a></li>
    <li class="li-bar"><a href="contact.php">Contact</a></li>
    <li class="li-bar"><a href="about.php">About</a></li>
    ';
}
else if(isset($_SESSION['Admin'])){
    echo '<li class="li-bar"><a href="Logged-In.php">Home</a></li>
    <li class="li-bar"><a href="contact.php">Contact</a></li>
    <li class="li-bar"><a href="about.php">About</a></li>
    <li class="li-bar"><a href="create.php">Add Phone</a></li>
    <li class="li-bar"><a href="products.php">All Phones</a></li>
    ';
}
else{
    echo '<li class="li-bar"><a href="index.php">Home</a></li>
    <li class="li-bar"><a href="contact.php">Contact</a></li>
    <li class="li-bar"><a href="about.php">About</a></li>
    <li class="li-bar"><a href="login.html">Login</a></li>
    <li class="li-bar"><a href="signup.html">Sign Up</a></li>
    ';
}


?>
        
        <li class="li-bar"><a href="news.html">News</a></li>
    
        <li class="lisrch">
            <div class="searchi"><input type="text" id="fname" name="firstname" placeholder="Search"></div>
        </li>


        <li class="lisrch">

         <div class="navbar">
        
             <div class="dropdown">
                 <?php

                    include('session.php');
                    if(isset($_SESSION['Logged'])){
                        
                        echo '<button class="dropbtn">
                        <i> '.$login_session.' </i>
                           <i class="fa fa-caret-down"></i>
                         </button>
                         <div class="dropdown-content">
                            <a href="logout.php">Logout</a>
                                    <!-- <a href="#">Link 2</a>
                                    <a href="#">Link 3</a> -->
                         </div>';
                    
                    }


                 ?>
            
             </div>
             </div>
        
        </li>

    </ul>

    <div class="p10">
        <h1 class="Desc">Enjoy online shopping.</h1>
        <p class="Desc2">Welcome to the Phone Shop.</p>
    </div>

    
    <div class="containerr">

        <div class="about">
            <div class="left">
                <h1>About Us</h1>
                <hr>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                    Why do we use it?
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look like
                    readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                    default model text, and a search for 'lorem ipsum' will uncover many web sites still in their
                    infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                    (injected humour and the like).

                </p>
            </div>
            <div class="right">
                <img src="img/onesave-day-tWHuM6qqkgE-unsplash.jpg">
            </div>
            <div class="clear"></div>
        </div>



        <div class="mission">

            <div class="left">
                <img src="img/rupixen-com-Q59HmzK38eQ-unsplash.jpg">
            </div>
            <div class="right">
                <h1>Why Flip Store </h1>
                <hr>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical Latin literature
                    from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney
                    College in Virginia,
                    looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going
                    through the cites of
                    the word in classical literature, discovered the undoubtable source. </p>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form,
                    by injected humour, or randomised words which don't look even slightly believable. If you are going
                    to use a passage of
                    Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                    making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words,
                    combined with a handful of model sentence structures, to generate Lorem Ipsum which looks
                    reasonable.
                    The generated Lorem Ipsum is therefore always free from repetition, injected humour, or
                    non-characteristic words etc.</p>

            </div>
            <div class="clear"></div>

        </div>



        <div class="team">
            <h1> Our Team
                <hr>
            </h1>



            <div class="card">
                <div class="circle-containerr">
                    <h1 style="color:#fff;"><img class="photo" src="img/dioni1.jpg"></h1>
                </div>
                <h2>Dion Krasniqi</h2>
                <h4>Chief Executive Officer (CEO) </h4>
                <p>Knowledge is power.</p>
            </div>

            <div class="card">
                <div class="circle-containerr">
                    <h1 style="color:#fff;"><img class="photo" src="img/.png"></h1>
                </div>
                <h2>Ardian Halilaj</h2>
                <h4>Full-Stack Developer</h4>
                <p>The Punisher. </p>
            </div>
        </div>
    </div>


    <footer>
        <div class="footer-container">
            <div class="left-col">
                <img src="FLIPSTORE.png" alt="" class="logo">
                <div class="social-media">
                    <a href="#"><i class="fa fa-facebook-official"></i></a>
                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square"></i></a>
                </div>
                <p class="rights-text">?? 2020 Created By FlipStore All Rights Reserved.</p>
            </div>

            <div class="right-col">
                <h1>Our Newsletter</h1>
                <div class="border"></div>
                <p>Enter Your Email to get our news and updates.</p>
                <div class="border"></div>
                <form action="" class="newsletter-form">
                    <input type="text" class="txtb" placeholder="Enter Your Email">
                    <input type="submit" class="btn" value="submit">
                </form>
            </div>
        </div>
    </footer>




</body>

</html>