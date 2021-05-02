<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhruv Sutail - The Developer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Images/drs.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

   
<style media="screen">
        .loader {
            position: fixed;
            z-index: 99;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .loader > img {
            width: 100px;
        }

        .loader.hidden {
            animation: fadeOut 1s;
            animation-fill-mode: forwards;
        }

        @keyframes fadeOut {
            100% {
                opacity: 0;
                visibility: hidden;
            }
    }
</style>
    
</head>
<body>
    <div class="loader">
        <img src="Images/loading.gif" width="300px" height="300px" alt="Loading..." />
    </div>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">dhruv<span>.java</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#projects" class="menu-btn">Projects</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello , my name is </div>
                <div class="text-2">Dhruv Sutail</div>
                <div class="text-3">And I'm <span class="typing"></span></div>
                <a href="#">Hire me</a>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="Images/dhruv1.jpg" alt="" >
                </div>
                <div class="column right">
                    <div class="text">I'm Dhruv and I'm <span class="typing-2"></span></div>
                    <p>Hey! I am Dhruv Sutail , Pursuing Career as a Cloud Enginer and loves to Develop Web as well as Mobile Applications, and Also Good at UI/UX Designs for the Clients. Also has a keen interest in Various Cloud Services and also a "Future Devops" Engineer who loves to be an Anchor between the develpoment and deployment of the Applications. With Good support and Knowledge of kubernetes and Docker Tools!! </p>
                    <a class="resume" href="DhruvSutail_Resume.pdf">Resume</a><br><br>
                    <a href="https://www.linkedin.com/in/dhruv-sutail-7826b5181/" target="blank">
                        <button class="icon-btn linkedin"><i class="fab fa-linkedin"></i></button>
                    </a>
                    <a href="https://github.com/Dhruv-Sutail" target="blank">
                        <button class="icon-btn github"><i class="fab fa-github"></i></button>
                    </a>
                    <a href="https://twitter.com/SutailDhruv" target="blank">
                        <button class="icon-btn twitter"><i class="fab fa-twitter"></i></button>
                    </a>
                    <a href="mailto:dhruvsutail338@gmail.com" target="blank">
                        <button class="icon-btn google-plus"><i class="fab fa-google-plus"></i></button>
                    </a>
                    <a href="https://www.instagram.com/dhruv.sutail/" target="blank">
                        <button class="icon-btn instagram"><i class="fab fa-instagram"></i></button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My Services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-cloud"></i>
                        <div class="text">Cloud Support</div>
                        <p>Anchor between the develpoment and deployment of the Applications. And Strongly believes in DevOps Stratergy with the help of Cloud.</p>
                    </div>                
                </div>

                <div class="card">
                    <div class="box">
                        <i class="fab fa-dev"></i>
                        <div class="text">Developer</div>
                        <p>Developer with Optimized Logic and Code with Good Command over various Frameworks. And Compatible with both web and Mobile Apps.</p>
                    </div>                
                </div>

                <div class="card">
                    <div class="box">
                        <i class="fas fa-pencil-alt"></i>
                        <div class="text">UI/UX Designer</div>
                        <p>Designer who thinks and gives more preferences to his users and tries to make user experience more smooth and soothing.</p>
                    </div>                
                </div>
            </div>
        </div>
    </section>

    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My Skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My Creative skills and Experiences</div>
                    <p>Along with the Technical proficiency what I feel is the User Interface should be handled with same importance , as the Functionality of Product is top notch but if user is not comfortable using it then it becomes meaningless. So what I have learnt and experienced staying in the industry is that product should package of Good amount of Funtionality and Smooth and User friendly UI.</p>
                </div><br><br>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML, CSS, JS</span>
                            <span>85%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Php, Laravel</span>
                            <span>75%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Java, JSP, Hibernate</span>
                            <span>80%</span>
                        </div>
                        <div class="line java"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Python, Django</span>
                            <span>70%</span>
                        </div>
                        <div class="line python"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>DevOps Integrations</span>
                            <span>60%</span>
                        </div>
                        <div class="line devops"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="projects" id="projects">
        <div class="max-width">
            <h2 class="title">Portfolio</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="Images/appointment.jpg" alt="">
                        <div class="text">Appointment Booking</div>
                        <p>Full Fledged Appointment booking System with Email notifications and realtime Barcode Generation in mail with the help of Laravel Framework.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="Images/pharmacare.jpg" alt="">
                        <div class="text">Medicinal Inventory</div>
                        <p>Wholesome Medicinal Inventory System with Track Record of Manufactures, Wholesalers and Retailers with the help of Java and JSP and Smooth UI.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="Images/shiksha.jpg" alt="">
                        <div class="text">Shiksha Abhyan</div>
                        <p>Shiksha Abhyan Project is created as a part of Online Study Portal where Teachers and student can carry out Study during this Pandemic with help of php and mysql.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="Images/taskhandler.jpg" alt="">
                        <div class="text">Taskhandler</div>
                        <p>Simple and Useful Taskhandler for the People and Managing task according to their Priority with Satisfying UI in Django Framework.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="Images/chatapp.jpg" alt="">
                        <div class="text">ChatApp</div>
                        <p>ChatApp following all the security Measures and with proper Registration and Login System and Highly Responsive and Fast system made with php and Ajax.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="Images/translate.jpg" alt="">
                        <div class="text">Multilingual Translator</div>
                        <p>Translator in 3 Languages without using prebuilt libraries and making own using the Concept of Webscraping where finding the words through Scrapping Websites.</p>
                    </div>
                </div>
            </div>
        </div>        
    </section>

    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Native of Vadodara , Currently in Ahmedabad for Graduation!</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Dhruv Sutail</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Vadodara , Gujarat</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">dhruvsutail338@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Contact me</div>
                    <h4 class="sent-notification"></h4>
                    <form class="contact-form" action="#" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" id="name" class="fullname" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="text" id="email" class="email-input" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" id="subject" class="subject" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea class="message" id="body" cols="30" rows="10" placeholder="Service Required.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="button" class="send-msg" onclick="sendEmail()" name="send">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <span>Created By <a href="#">DhruvSutail</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="./script.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('.sent-notification').text("Please Check Your Email!");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }

        window.addEventListener("load", function () {
            const loader = document.querySelector(".loader");
            loader.className += " hidden";
        });
    </script>
</body>
</html>
