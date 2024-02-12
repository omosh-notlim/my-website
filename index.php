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

    <link rel="icon" href="images/mo.jpeg" type="image/jpeg" sizes="any">

    <title>Home</title>
</head>
<body>
    <div class="btn">
        <i class="bi bi-list"></i>
        <i class="bi bi-x"></i>
    </div>
    <nav class="sidebar">
        <div class="text">
            <div class="image"><img src="images/mo.jpeg"></div>
            <p>Omondi Milton</p>
        </div>
        <ul>
            <li class="focus"><a href="#"><i class="bi bi-house-fill"></i> Home</a></li>
            <li><a href="about"><i class="bi bi-file-person"></i> About</a></li>
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

    <div class="home-pg">
        <div class="wrapper home-pg2">
            <div class="home-center" data-aos="fade-down">
                <div class="static-text">OMONDI MILTON</div>
                <ul class="dynamic-text">
                    <li><span>IT Consultant</span></li>
                    <li><span>Software Developer</span></li>
                    <li><span>Machine Learning Engineer</span></li>
                </ul>
                <button class="contact-redirect" onclick="window.location.href='contact';">
                   Contact me
               </button>
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

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 2500,
            once: false
        });
    </script>
</body>
</html>