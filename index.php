<?php
include('config.php');
session_start();
error_reporting(0);

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Function to fetch data from the database and update HTML
            function fetchData() {
                $.ajax({
                    url: "config.php",
                    method: "GET",
                    success: function(response) {
                        setTimeout(function() {
                            $("#myname").text(response);
                        }, 100000000); // Delay the update by 100ms (adjust as needed)
                    },
                    error: function() {
                        console.log("Error occurred while fetching data from the server.");
                    }
                });
            }

            // Call fetchData function on page load
            fetchData();
        });
    </script>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Developer Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles/portfolio.css">
    <script src="https://kit.fontawesome.com/f056a62cc9.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header">
        <nav>
            <h3 class="nav-title">Sad<span class="text-primary">i</span>a</h3>
            <ul>
                <li><a href="">Portfolio</a></li>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Skills</a></li>
                <li><a href="">Services</a></li>
                <li><button class="btn-primary">Hire Me</button></li>
            </ul>
        </nav>
        <div class="banner">
            <div class="banner-content">
                <h3 class="banner-greeting">Hello, I am</h3>
                <h1 class="banner-title">Sadia Islam</h1>
                <p class="banner-description">Web developer and creative designer. This portfolio website shows all details and work experience in web development .</p>
                <button class="btn-primary"><i class="fa-solid fa-download"></i> Download CV</button>
                <button class="btn-primary"><i class="fa-solid fa-phone"></i> Contact</button>
            </div>

            <div class="right-image-flex">
                <img class="profile-pic" src="images/silvee.png" alt="">
                <div class="color-box"></div>
            </div>

        </div>
    </header>
    <main>
        <section class="about">
            <h3 class="section-title">About Me</h3>
            <p class="section-description">
                I am a front-end web developer. I can provide clean code
                and pixel perfect design. I also make the website more &
                more interactive with web animations.A responsive design
                makes your website accessible to all users, regardless of
                their device.
            </p>
            <div class="about-info-container">
                <!-- .about-info*4>h4.info-title+p.info-description -->
                <div class="about-info">
                    <h4 class="info-title">Name:</h4>
                    <p class="info-description" id="name"><?php echo $name; ?></p>
                </div>
                <div class="about-info">
                    <h4 class="info-title">Email:</h4>
                    <p class="info-description" id="email"><?php echo $email; ?></p>
                </div>
                <div class="about-info">
                    <h4 class="info-title">Date of birth:</h4>
                    <p class="info-description" id="dob"><?php echo $dob; ?></p>
                </div>
                <div class="about-info">
                    <h4 class="info-title">From:</h4>
                    <p class="info-description" id="birthOrigin"><?php echo $birthOrigin; ?></p>
                </div>
            </div>
        </section>

        <!-- what i do section start -->
        <section>
            <h3 class="section-title">What I do</h3>
            <p id="what-i-do-description" class="section-description">
                Here I showcase my skills in HTML5, CSS, Figma, and Flutter. I have been actively learning and gaining a strong understanding of these technologies over the past year."
            </p>
            <div class="skills-container">
                <!-- .skill*4>img+h3.skill-title+p.skill-description -->
                <div class="skill">
                    <img src="images/icons/flutter.svg" alt="">
                    <h3 class="skill-title">Flutter</h3>
                    <p class="skill-description">Knowledgeable in Flutter, a cross-platform framework for building mobile applications. Able to develop beautiful and functional apps with a single codebase, ensuring consistent user experiences on iOS and Android.</p>
                </div>
                <div class="skill">
                    <img src="images/icons/figma.svg" alt="">
                    <h3 class="skill-title">Figma</h3>
                    <p class="skill-description">Proficient in Figma, a powerful design tool for creating intuitive user interfaces and interactive prototypes. Skilled in translating design concepts into engaging visuals and collaborating seamlessly with teams.</p>
                </div>
                <div class="skill">
                    <img src="images/icons/html.svg" alt="">
                    <h3 class="skill-title">Html5</h3>
                    <p class="skill-description">Proficient in HTML5, the standard markup language for building web pages. Skilled in creating structured and semantic content to ensure accessible and well-organized websites.</p>
                </div>
                <div class="skill">
                    <img src="images/icons/css.svg" alt="">
                    <h3 class="skill-title">CSS</h3>
                    <p class="skill-description">Experienced in CSS, which is used for styling and enhancing the visual presentation of web pages. Capable of creating responsive and visually appealing designs to optimize user experience.</p>
                </div>
            </div>
        </section>
        <!-- Resume Section -->
        <section>
            <h3 class="section-title">A summary of My Resume</h3>

            <div class="resume-container">
                <!-- .resume-column*2>h3.resume-column-title -->
                <div class="resume-column">
                    <h3 class="resume-column-title">My Education</h3>

                    <div class="resume-item">
                        <h2 class="resume-item-title">JASHORE UNIVERSITY OF SCIENCE & TECHNOLOGY</h2>
                        <h3 class="resume-item-institute">BSc. in CSE,in progress. </h3>
                    </div>
                    <hr>

                    <div class="resume-item">
                        <h2 class="resume-item-title">CANTONMENT COLLEGE JASHORE </h2>
                        <h3 class="resume-item-institute">Science section,2016-2018 </h3>
                    </div>

                    <hr>
                    <div class="resume-item">
                        <h2 class="resume-item-title">BAF SHAHEEN COLLEGE,JASHORE </h2>
                        <h3 class="resume-item-institute">2007-2016 </h3>
                    </div>

                </div>



                <div class="resume-column">
                    <h3 class="resume-column-title">Working Projects</h3>
                    <div class="resume-item">
                        <h2 class="resume-item-title">Islamic GPS</h2>
                        <h3 class="resume-item-institute">Used Flutter framework along with some API.</h3>
                        <p class="resume-item-description">This android app will provide the users current location and show them the weather, sunrise, sunset time and prayer time for preferable location.
                        </p>
                    </div>
                    <hr>
                    <div class="resume-item">
                        <h2 class="resume-item-title">Department Expense Tracker</h2>
                        <h3 class="resume-item-institute">Flutter framework with dart language</h3>
                        <p class="resume-item-description"> This app is a digital tool designed to provide a centralized platform where teachers manage and monitor their departmental expenses, can make informed budgetary decisions.
                        </p>
                    </div>


                </div>
            </div>

        </section>
    </main>
    <footer>
        <div class="footer-column">
            <h3 class="section-title">Lets Connect</h3>
            <p class="section-description">
                Please fill out the form on this section to contact with me or call between 9:00 A.M and 8.00 P.M ET, Monday through Friday.
            </p>
            <div class="social-links">
                <a href=""><img src="images/icons/facebook.png" alt=""></a>
                <a href=""><img src="images/icons/twitter.png" alt=""></a>
                <a href=""><img src="images/icons/insta.png" alt=""></a>
            </div>
        </div>
        <div class="footer-column">
            <h3 class="section-title">Let’s Message me. Right Now.</h3>
            <form class="contact" action="">
                <input type="text" placeholder="Your Name">
                <input type="email" name="" placeholder="Your Email" id="">
                <textarea name="" placeholder="Message" id="" cols="30" rows="10"></textarea>
                <input class="btn-primary" type="submit" value="Submit">
            </form>
        </div>
    </footer>
</body>

</html>