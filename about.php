<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" type="text/css" href="fonts/css/all.css">
    <link rel="stylesheet" href="fontboot/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

    <link rel="icon" href="images/mo2.jpg" type="image/jpg" sizes="any">

    <title>About | Milton</title>
</head>
<body>
    <div class="btn">
        <i class="bi bi-list"></i>
        <i class="bi bi-x"></i>
    </div>
    <nav class="sidebar">
        <div class="text">
            <div class="image"><img src="images/mo.png"></div>
            <p>Omondi Milton</p>
        </div>
        <ul>
            <li><a href="/my-website"><i class="bi bi-house-fill"></i> Home</a></li>
            <li class="focus"><a href="#"><i class="bi bi-file-person"></i> About</a></li>
            <li><a href="projects"><i class="bi bi-stack"></i> Projects</a></li>
            <li><a href="contact"><i class="bi bi-envelope-check"></i> Contact</a></li>
            <li>
                <span class="social-icons">
                    <a href="https://github.com/omosh-notlim"><i class="bi bi-github"></i></a>
                    <a href="https://www.linkedin.com/in/milton-omondi-60425a265/"><i class="bi bi-linkedin"></i></a>
                </span>
            </li>
            
        </ul>
    </nav>

    <div class="content-area">
        <div class="wrapper">
            <p class="about-p">About</p>
            <div class="about">
                <div class="image" data-aos="fade-right">
                    <img src="images/milton2.jpg">
                </div>
                <div class="about-content" data-aos="fade-left">
                   <div class="buttons">
                       <button class="bt1" id="btn_diva" onclick="one()">About</button>
                       <button class="bt2" id="btn_divb" onclick="two()">Address</button>
                       <button class="bt3" id="btn_divc" onclick="three()">Skills</button>
                   </div>
                   <div class="blocks">
                       <div class="diva" id="diva" data-aos="fade-in">
                            <p class="about-p-2">
                                I am a software developer with hands-on experience in developing and maintaining web applications and RESTful APIs. My current focus is on systems development, 
                                debugging, and API integration. I am passionate about delivering efficient, reliable, and scalable solutions that automate business processes and support innovation. 
                                I look forward to collaborating on projects that drive real impact and boost operational efficiency.
                            </p>
                       </div>
                       <div class="diva" id="divb">
                           <div class="profile">
                               <p><span class="label">Name:</span> <span class="text">Omondi Milton</span></p>
                               <p><span class="label">Email:</span> <span class="text">omondimilton43@gmail.com</span></p>
                               <p><span class="label">Location:</span> <span class="text">Nyeri, Kenya</span></p>
                           </div>
                       </div>
                       <div class="diva" id="divc">
                           <div class="w3-container">
                                <div class="progress-div">
                                    <label for="file">PHP/Laravel <b>(85%)</b></label><br>
                                    <progress id="file" value="85" max="100"> 85% </progress>
                                </div>
                                <div class="progress-div">
                                   <label for="file">C#/.NET <b>(75%)</b></label><br>
                                    <progress id="file" value="75" max="100"> 75% </progress>
                                </div>
                                <div class="progress-div">
                                    <label for="file">Node.js/Express <b>(80%)</b></label><br>
                                    <progress id="file" value="80" max="100"> 80% </progress>
                                </div>
                                <div class="progress-div">
                                    <label for="file">Python, DRF <b>(60%)</b></label><br>
                                    <progress id="file" value="60" max="100"> 60% </progress>
                                </div>
                                <div class="progress-div">
                                    <label for="file">React.js <b>(80%)</b></label><br>
                                    <progress id="file" value="80" max="100"> 80% </progress>
                                </div>
                                <div class="progress-div">
                                    <label for="file">React native <b>(70%)</b></label><br>
                                    <progress id="file" value="70" max="100"> 70% </progress>
                                </div>
                                <div class="progress-div">
                                    <label for="file">Java/Spring boot <b>(55%)</b></label><br>
                                    <progress id="file" value="55" max="100"> 55% </progress>
                                </div>
                                <div class="progress-div">
                                    <label for="file">Databases (NoSQL, MySQL, Postgres, MongoDB) </label><br>
                                    <progress id="file" value="80" max="100"> 80% </progress>
                                </div>
                           </div>
                       </div>
                       
                   </div>
                   <button class="contact-redirect" onclick="window.location.href='contact';">
                       Contact me
                   </button>
                </div>
            </div>
            
        </div>
    </div>




    <script>
        $('.btn').click(function(){
            $(this).toggleClass("click");
            $('.sidebar').toggleClass("show");
        });

        $('nav ul li').click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        });
    </script>

    <script>
        var btn_diva = document.getElementById("btn_diva");
        var btn_divb = document.getElementById("btn_divb");
        var btn_divc = document.getElementById("btn_divc");

        var diva = document.getElementById('diva');
        var divb = document.getElementById('divb');
        var divc = document.getElementById('divc');

        function one(){
            diva.style.display="block";
            divb.style.display="none";
            divc.style.display="none";

            btn_diva.style.color="#00e6e6";
            btn_divb.style.color="#404040";
            btn_divc.style.color="#404040";
        }

        function two(){
            divb.style.display="block";
            diva.style.display="none";
            divc.style.display="none";

            btn_divb.style.color="#00e6e6";
            btn_diva.style.color="#404040";
            btn_divc.style.color="#404040";
        }

        function three(){
            divc.style.display="block";
            divb.style.display="none";
            diva.style.display="none";

            btn_divc.style.color="#00e6e6";
            btn_divb.style.color="#404040";
            btn_diva.style.color="#404040";
        }
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: false
        });
    </script>
</body>
</html>