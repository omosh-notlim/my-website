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

    <title>Projects | Milton</title>
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
            <li><a href=""><i class="bi bi-house-fill"></i> Home</a></li>
            <li><a href="about"><i class="bi bi-file-person"></i> About</a></li>
            <li class="focus"><a href="#"><i class="bi bi-stack"></i> Projects</a></li>
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
            <p class="about-p">Projects</p>
            <div class="projects">
                <div id="project-item-4" class="project-item">
                    <div class="project-item-content">
                        <div>
                            <h5>DeKUTES Website</h5><hr>
                            <p>
                                <span>A simple website to assist the DeKUTES at Kimathi University Market their products.</span><br>
                                React.js
                            </p>
                        </div>
                        <a href="https://dekutes.dkut.ac.ke" target="_blank" rel="noopener noreferrer">
                            <button class="view-btn">
                                View
                            </button>
                        </a>
                    </div>
                </div>
                <div id="project-item-1" class="project-item">
                    <div class="project-item-content">
                        <div>
                            <h5>Gogo Logistics Website</h5><hr>
                            <p>
                                <span>Gogo logistics landing page</span><br>
                                HTML, CSS, Javascript
                            </p>
                        </div>
                        <a href="https://gogologistics.co.ke" target="_blank" rel="noopener noreferrer">
                            <button class="view-btn">
                                View
                            </button>
                        </a>
                    </div>
                </div>
                <div id="project-item-2" class="project-item">
                    <div class="project-item-content">
                        <div>
                            <h5>P.O.C.A Website</h5><hr>
                            <p>
                                <span>P.O.C.A landing page</span><br>
                                HTML, CSS, Javascript
                            </p>
                        </div>
                        <a href="https://gogologistics.co.ke/peresodo" target="_blank" rel="noopener noreferrer">
                            <button class="view-btn">
                                View
                            </button>
                        </a>
                    </div>
                </div>
                <div id="project-item-3" class="project-item">
                    <div class="project-item-content">
                       <div>
                            <h5>File Management System</h5><hr>
                            <p>
                                <span>A website to assist in managing of files</span><br>
                                PHP(Vanilla)
                            </p>
                        </div> 
                        <a href="https://notlims-app.x10.mx/profile/file_system/login" target="_blank" rel="noopener noreferrer">
                            <button class="view-btn">
                                View
                            </button>
                        </a>
                    </div>
                </div>
                <div id="project-item-6" class="project-item">
                    <div class="project-item-content">
                        <div>
                            <h5>Hospital Management System, DeKUT</h5><hr>
                            <p>
                                <span>A Hospital Management System for the DeKUT medical center to assist them in managing their 
                                respective activities.</span><br>
                                ASP.net Core
                            </p>
                        </div>
                        <a href="https://hospital.dkut.ac.ke/" target="_blank" rel="noopener noreferrer">
                            <button class="view-btn">
                                View
                            </button>
                        </a>
                    </div>
                </div>
                
                <div id="project-item-5" class="project-item">
                    <div class="project-item-content">
                        <div>
                            <h5>Global</h5><hr>
                            <p>
                                <span>Appointment booking and site visit registry system<b> (In progress...)</b></span><br>
                                React.js, APIs, CMS
                            </p>
                        </div>
                        <!-- <a href="https://dekutes.dkut.ac.ke" target="_blank" rel="noopener noreferrer">
                            <button class="view-btn">
                                View
                            </button> -->
                        </a>
                    </div>
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

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: false
        });
    </script>
</body>
</html>