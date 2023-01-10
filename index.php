
<?php
  
include("assets/db/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Kaustubh | Web developer</title>

        <!-- External CSS  -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Online CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        
        <!-- Online JavaScipt -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <!-- loading stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <!-- loading js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

        
        <!-- Title Icon -->
        <link rel="icon" href="assets/images/titleiconnew.png" type="image/x-icon"/>

        <!-- box icon link -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- CSS Loading -->
        <style>
            
            div#loader_container {
                width: 90%;
                margin: 5% 1% 0px 5%;
                padding-top: 30%;
                position: fixed;
                text-align: center;
                align-self:center;
            }
            div#bar_container {
                height:24px;
                background:#dcdbd7;
                border-radius:20px;
                border-top:1px solid #cfcec9;
                border-bottom:1px solid #f7f6f4;
                box-shadow:0 -1px 0 #bab9b4;
                margin-bottom:24px;
                position:relative;
            }
            div#progress_bar {
                background-color:#dcf1c6;
                background-image: -webkit-gradient(linear, center top, center bottom, color-stop(0%, #9fbff4), color-stop(100%, #555bb4));
                background-image: -webkit-linear-gradient(top, #9fbff4 0%, #555bb4 100%);
                background-image: -moz-linear-gradient(top, #9fbff4 0%, #555bb4 100%);
                background-image: -ms-linear-gradient(top, #9fbff4 0%, #555bb4 100%);
                background-image: -o-linear-gradient(top, #9fbff4 0%, #555bb4 100%);
                background-image: linear-gradient(to bottom, #9fbff4 0%, #555bb4 100%);
                height:110%;
                position:absolute;
                top:-3px;
                left:0px;
                border-top:1px solid #e5ebf4;
                border-radius:20px;
                box-shadow:0 3px 10px #717171;
                width:10%;
                transition:width 0.1s ease-in-out;
            }
            div#progress_percentage {
                position:absolute;
                top:-40px;
                right:-10px;
                width:40px;
                height:24px;
                padding-top:6px;
                background:#edeef2;
                background-image: -webkit-gradient(linear, center top, center bottom, color-stop(0%, #edeef2), color-stop(100%, #c9c9d3));
                background-image: -webkit-linear-gradient(top, #edeef2 0%, #c9c9d3 100%);
                background-image: -moz-linear-gradient(top, #edeef2 0%, #c9c9d3 100%);
                background-image: -ms-linear-gradient(top, #edeef2 0%, #c9c9d3 100%);
                background-image: -o-linear-gradient(top, #edeef2 0%, #c9c9d3 100%);
                background-image: linear-gradient(to bottom, #edeef2 0%, #c9c9d3 100%);
                border-top:1px solid white;
                border-right:1px solid #d2d2d0;  
                border-bottom:1px solid #999999;
                border-left:1px solid #d2d2d0;
                border-radius:7px;
                font-size:10px;
                color:#737371;
                text-shadow:0 0 2px #bebfc3;
                box-shadow:0 2px 5px #c1c1bf;
            }
            div#progress_percentage::before { /* used for the border of the arrow */
                content:"";
                position:absolute;
                left:14px;
                bottom:-11px;
                border-top:5px solid #999;
                border-right:5px solid transparent;
                border-bottom:5px solid transparent;
                border-left:5px solid transparent;
            }
            div#progress_percentage::after { /* the actual little arrow in the baloon */
                content:"";
                position:absolute;
                left:14px;
                bottom:-10px;
                border-top:5px solid #c9c9d3;
                border-right:5px solid transparent;
                border-bottom:5px solid transparent;
                border-left:5px solid transparent;
            }
            div#text_container {
                color:#757575;
                font-weight:bold; 
                font-size:22px;
                text-shadow:-1px 1px 1px #d1d0cc;
                text-align: center;
            }
            div#text_container span {
                display:block;
                font-weight:normal;
                font-size:11px;
                margin-top:6px;
            }
        </style>

    </head>
    <body id="body_1">
        <div id="loader_container">
  
            <div id="bar_container">
                <div id="progress_bar">
                <div id="progress_percentage">
                    10%
                </div><!--of #progress_percentage-->
                </div><!--of #progress_bar-->
            </div><!--of #bar_container-->
  
            <div id="text_container">
                Loading
                <span>Please Wait...</span>
            </div><!--of #text_container-->
  
        </div><!--of #loader_container-->

        
        <!--<div id="load"></div>-->
        
        <div id="contents" style="visibility:hidden;">

            <!-- Scroll Up Button -->
            <div class="scroll-up-btn">
                <i class="fas fa-angle-up"></i>
            </div>

            <!-- Navigation Bar -->
            <nav class="navbar">
                <div class="max-width">
                    <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
                    <ul class="menu">
                        <li><a href="#home" class="menu-btn">Home</a></li>
                        <li><a href="#about" class="menu-btn">About</a></li>
                        <li><a href="#services" class="menu-btn">Services</a></li>
                        <li><a href="#skills" class="menu-btn">Skills</a></li>
                        <li><a href="#teams" class="menu-btn">Projects</a></li>
                        <li><a href="#contact" class="menu-btn">Contact</a></li>
                        <li><a href="assets/admin/login.html" class="menu-btn">Log In</a></li>
                    </ul>

                    <div class="menu-btn">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </nav>

            <!-- home section start -->
            <section class="home" id="home">
                <div class="max-width">
                    <div class="home-content">
                        <div class="text-1">Hello, my name is</div>
                        <div class="text-2">Kaustubh Khandare</div>
                        <div class="text-3">And I'm a <span class="typing"></span></div>
                        <a href="mailto:work.kaustubhkhandare@gmail.com&subject=Want To hire You" class="home__a">Hire me</a>

                        <br />

                        <!-- Home Socials icons -->
                        <div class="home__social">
                            <a href="https://www.linkedin.com/in/kaustubh-khandare-80a873137/" class="home__social-icon" target="_blank"><i class='bx bxl-linkedin' ></i></a>
                            <a href="https://www.facebook.com/kaustubh.khandare.7/" class="home__social-icon" target="_blank"><i class='bx bxl-facebook-circle' ></i></a>
                            <a href="https://www.instagram.com/kaustubh.s.k/" class="home__social-icon" target="_blank"><i class='bx bxl-instagram' ></i></a>
                            <a href="https://twitter.com/Addictive_101" class="home__social-icon" target="_blank"><i class='bx bxl-twitter' ></i></a>
<!--                            <a href="https://www.youtube.com/@addictivegamerftw2529" class="home__social-icon" target="_blank"><i class='bx bxl-youtube'></i></a>-->
                        </div>
                    </div>           
                </div>
            </section>

            <!-- about section start -->
            <section class="about" id="about">
                <div class="max-width">
                    <h2 class="title">About me</h2>
                    <div class="about-content">
                    
                        <div class="column left">
                            <img src="assets/images/profile-1.jpg" alt="">
                        </div>
                    
                        <div class="column right">
                            <div class="text">My name is Kaustubh and I'm a <span class="typing-2"></span></div>
                            <p>It is my pleasure to introduce myself as Kaustubh Satish Khandare, a diploma holder in the field of computer engineering. I am knowledgeable of different languages such as Java, Advance Java, HTML, CSS, Javascript, C, C++, Data Structure, and I have the ability to learn more.</p>
                            <a href="assets/resume/Resume.pdf" target="_blank" >Download CV</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- services section start -->
            <section class="services" id="services">
                <div class="max-width">
                    <h2 class="title">My services</h2>

                    <div class="serv-content">
                        <div class="card">
                            <div class="box">
                                <i class="fas fa-paint-brush"></i>
                                <div class="text">Web Devlopment</div>
                                <p>I am a web developer who develops and designs websites Using HTML, CSS, JavaScript, And PHP.</p>
                            </div>
                        </div>
                        <div class="card">      
                            <div class="box">
                                <i class="fas fa-chart-line"></i>
                                <div class="text">Advertising</div>
                                <p>Using YouTube and other social media platforms, I can promote your website.</p>
                            </div>
                        </div>
                        <!--<div class="card">
                            <div class="box">
                                <i class="fas fa-code"></i>
                                <div class="text">Apps Design</div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                            </div>
                        </div>-->
                    </div>
                </div>
            </section>

            <!-- skills section start -->
            <section class="skills" id="skills">
                <div class="max-width">
                    <h2 class="title">My skills</h2>

                    <div class="skills-content">
                        <div class="column left">
                            <div class="text">My creative skills & experiences.</div>
                            <p>In the past, I have acquired knowledge in a wide variety of languages, including Java, advance Java, HTML, CSS, Java script, C, C++, Data Structures and I have the potential to learn more.</p>
                            <a href="assets/pages/about.html#skills" onclick="blurFunction(); window.location=assets/pages/about.html#skills; return false;" id="blur">Click Here to Read more</a>
                        </div>
                        <!--assets/pages/about.html-->
                        <div class="column right">
                            <div class="bars">
                                <div class="info">
                                    <span>HTML</span>
                                    <span>70%</span>
                                </div>
                                <div class="line html"></div>
                            </div>
                            <div class="bars">
                                <div class="info">
                                    <span>CSS</span>
                                    <span>70%</span>
                                </div>
                                <div class="line css"></div>
                            </div>
                            <div class="bars">
                                <div class="info">
                                    <span>JavaScript</span>
                                    <span>60%</span>
                                </div>
                                <div class="line js"></div>
                            </div>
                            <div class="bars">
                                <div class="info">
                                    <span>PHP</span>
                                    <span>40%</span>
                                </div>
                                <div class="line php"></div>
                            </div>
                            <div class="bars">
                                <div class="info">
                                    <span>MySQL</span>
                                    <span>70%</span>
                                </div>
                                <div class="line mysql"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- teams section start -->
            <section class="teams" id="teams">
                <div class="max-width">
                    <h2 class="title">My Projects</h2>
                    <div class="carousel owl-carousel">
                        <div class="card">
                            <div class="box">
                                <a href="assets/app/greenline.apk" target="_blank">
                                    <img src="assets/images/project1.jpg" alt="">
                                </a>
                                <div class="text">GreenLine Android Application</div>
                                <p>In This Project We Created a Android Application Using Android, Android Framework, SQLite, C# And.Net. "Green Line" Is a Native Android Application.</p>
                        
                            </div>
                        </div>
                        <div class="card">
                            <div class="box">
                                <a href="http://kaustubhkhandare.rf.gd" target="_blank" >
                                    <img src="assets/images/project2.png" alt="">
                                </a>
                                <div class="text">portfolio Website</div>
                                <p>In this project I Created a Website of My personal portfolio Using HTML, CSS, JavaScript.</p>                       
                            </div>
                        </div>
                        <div class="card">
                            <div class="box">
                                <a href="http://work-kaustubh.rf.gd/#home">
                                    <img src="assets/images/project3.png" alt="">
                                </a>                        
                                <div class="text">Portfolio Website</div>
                                <p>In this project I Created a Website of My personal portfolio Using HTML, CSS, JavaScript.</p>
                            </div>
                        </div>
                        <!--<div class="card">
                        <div class="box">
                        <img src="images/profile-4.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        </div>
                        <div class="card">
                        <div class="box">
                        <img src="images/profile-5.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        </div>-->
                    </div>
                </div>
            </section>

            <!-- contact section start -->
            <section class="contact" id="contact">
                <div class="max-width">
                    <h2 class="title">Contact me</h2>
                    <div class="contact-content">
                        <div class="column left">
                            <div class="text">Get in Touch</div>
                            <p>You Can Contact Me By Multiple ways Below</p>
                            <div class="icons">
                                <div class="row">
                                    <i class="fas fa-user"></i>
                                    <div class="info">
                                        <div class="head">Name</div>
                                        <div class="sub-title">Kaustubh Satish Khandare</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div class="info">
                                        <div class="head">Address</div>
                                        <div class="sub-title">Jail Road, Nashik Road, Nashik 422101</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <i class="fas fa-envelope"></i>
                                    <div class="info">
                                        <div class="head">Email</div>
                                        <div class="sub-title">work.kaustubhkhandare@gmail.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column right">
                            <div class="text">Message me</div>
                            <form action="assets/php/form.php" method="POST">
                                <div class="fields">
                                    <div class="field name">
                                        <input type="text" placeholder="Name" id="name" name="user_name" required>
                                    </div>
                                    <div class="field email">
                                        <input type="email" placeholder="Email" id="email" name="user_email" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <input type="text" placeholder="Subject" id="subject" name="user_subject" required>
                                </div>
                                <div class="field textarea">
                                    <textarea cols="30" rows="10" placeholder="Message.." id="message" name="user_message" required></textarea>
                                </div>
                                <div class="button-area">
                                    <button type="submit" name="submit" value="submit">Send message</button>
                                </div>
                                <br />
                                <div class="button-area">
                                    <button type="button"><a href="mailto:work.kaustubhkhandare@gmail.com" >Mail Me</a></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <!-- footer section start -->

            <footer class="footer">
                <p class="footer__title">Kaustubh Khandare</p>
                <div class="footer__social">
                    <a href="https://www.youtube.com/@addictivegamerftw2529" class="footer__icon" target="_blank"><i class='bx bxl-youtube'></i></a>
                    <a href="https://www.facebook.com/kaustubh.khandare.7/" class="footer__icon" target="_blank"><i class='bx bxl-facebook' ></i></a>
                    <a href="https://www.instagram.com/kaustubh.s.k/" class="footer__icon" target="_blank"><i class='bx bxl-instagram' ></i></a>
                    <a href="https://twitter.com/Addictive_101" class="footer__icon" target="_blank"><i class='bx bxl-twitter' ></i></a>
                </div>
                <p>&#169; 2020 copyright all right reserved</p>
            </footer>
        </div>
        <!-- Loading Scipt -->
        <script>

            function stopProgress() {
                clearInterval(progress);
            }

            document.onreadystatechange = function () {
                var state = document.readyState
                if (state == 'interactive') {
                    document.getElementById('contents').style.visibility = "hidden";
                    document.getElementById('contents').style.filter = "blur(5px)";

                    var bar = $('#progress_bar');
                    var percentage = parseInt($('#progress_percentage').html());

                    var progress = setInterval(function () {
                        if (percentage < 100) {
                            percentage++;
                            $('#progress_percentage').html(percentage + '%');
                            if (percentage >= 10) {
                                bar.css('width', percentage + '%');
                                console.log(percentage);
                            }
                        }
                        else {
                            document.getElementById('loader_container').style.visibility = "hidden";
                            document.getElementById('contents').style.visibility = "visible";
                        }
                    }, 30);

                }
                else if (state == 'complete') {
                    setTimeout(function () {
                        document.getElementById('interactive');
                        document.getElementById('contents').style.filter = "none";
                    }, 1000);
                }
            }



            //document.onreadystatechange = function () {
            //    var state = document.readyState
            //    if (state == 'interactive') {
            //        document.getElementById('contents').style.visibility = "hidden";

            //        var bar = $('#progress_bar');
            //        var percentage = parseInt($('#progress_percentage').html());

            //        function stopProgress() {
            //            clearInterval(progress);
            //        }

            //        var progress = setInterval(function () {
            //            if (percentage < 100) {
            //                percentage++;
            //                $('#progress_percentage').html(percentage + '%');
            //                if (percentage >= 10) {
            //                    bar.css('width', percentage + '%');
            //                    console.log(percentage);
            //                }
            //            }
            //            else {
            //                    setTimeout(function () {
            //                        document.getElementById('interactive');
            //                        document.getElementById('loader_container').style.visibility = " hidden";
            //                        document.getElementById('contents').style.visibility = "visible";
            //                    }, 1000);                           
            //            }
            //        }, 20);

            //    }
            //    else
            //    {
            //        stopProgress();
            //    }
            //}
        </script>

        <!-- Main javascript -->        
        <script src="assets/javascript/script.js"></script>

    </body>
</html>
