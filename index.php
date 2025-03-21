<?php

    session_start(); 

?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sibeko Siphiwe</title>    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body> 

    <div class="bg-container">
        <div class="gradient-bg"></div>
        <div class="diagonal-lines"></div>
        <div class="animated-shapes">
          <div class="shape"></div>
          <div class="shape"></div>
          <div class="shape"></div>
        </div>
        <div class="accent-corner"></div>
        <div class="bright-accent"></div>
      </div>

    <header>
        <a href="index.php" class="logo">
            <span class="gradient-text">Siphiwe.dev</span>
        </a>
        
        <nav class="desktop-nav">
            <a href="#Home"><span>Home</span></a>
            <a href="#About"><span>About</span></a>
            <a href="#Experience"><span>Experience</span></a>
            <a href="#Projects"><span>Projects</span></a>
            <a href="#Contact"><span>Contact</span></a>
        </nav>
    
        <div class="mobile-menu"> 
            <i id="menu" class="fa-solid fa-bars menu"></i>
            <nav class="mobile-nav">
                <a href="#Home">Home</a>
                <a href="#About">About</a>
                <a href="#Experience">Experience</a>
                <a href="#Projects">Projects</a>
                <a href="#Contact">Contact</a>
            </nav>
        </div>
    </header>
    
    <main>

        <div class="Welcome" id="Home">

            <div class="Welcome_header">

            </div>

            <div class="Welcome_main">

                <div class="about">

                    <h2>Hi there, I am a<br/>Fullstack Web & Android Developer</h2>

                    <p>Bringing ideas to life using lines of code, let me help you take over the digital world.</p>

                    <div class="wrapper">

                        <button><span><i class="fa-solid"></i></span>Get in touch</button>
                        <button>View Projects<span><i class="fa-solid"></i></span></button>

                    </div>
                    
                </div>

                <div class="image">

                    <img src="images/Avatar.png" alt="Avatar image">
                    
                </div>

            </div>

            <div class="Welcome_footer">

                <a href="">
                    <i class="fa-brands fa-square-github"></i>
                </a>
    
                <a href="">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
    
                <a href="">
                    <i class="fa-brands fa-square-instagram"></i>
                </a>
    
            </div>

        </div>

        <div class="About" id="About">

            <div class="About_header">
                
                <h2>Get to know me</h2>
                
                <p>Read this if you want to know more about me.</p>

            </div>

            <div class="About_main">

                <div class="About_content">

                    <h2>Who am I?</h2>
    
                    <p>My name is Sibeko Siphiwe and I am a Software Engineer with over 2 years of experience in building web and mobile applications. I have a passion for creating clean, responsive and user-friendly applications that solve real-world problems.</p>
    
                    <p>My journey started in 2023 when I learnt coding and went to the University of the Free State to study for a Bsc degree that majors in Computer Sciences and Business Management. Currently I am a final year student. I have worked with various clients and companies through internships to develop applications that have a positive impact on people's lives.</p>
    
                    <p>When I am not coding, you can find me exploring new technologies, creating designs from web design to artistic brand designs, drawing and making instrumentals. I am always looking for new challenges and opportunities to grow as a developer.</p>
    
                </div>
    
                <div class="About_offer">
    
                    <h2>What I offer</h2>
    
                    <div class="offers">
    
                        <div class="offer">
                            <i class="fa-solid fa-laptop-code"></i>
                            <div>
                                <h3>Web Development</h3>
                                <p>Creating responsive, modern websites and web applications using ASP.NET MVC, Angular, React, and other cutting-edge technologies.</p>
                            </div>
                        </div>
    
                        <div class="offer">
                            <i class="fa-brands fa-android"></i>
                            <div>
                                <h3>Android Development</h3>
                                <p>Developing native Android applications with Kotlin and Java, ensuring optimal performance and user experience.</p>
                            </div>
                        </div>
    
                        <div class="offer">
                            <i class="fa-solid fa-database"></i>
                            <div>
                                <h3>Backend Solutions</h3>
                                <p>Building robust, scalable backend systems with .NET Core, SQL Server, and cloud technologies.</p>
                            </div>
                        </div>
    
                        <div class="offer">
                            <i class="fas fa-chart-line"></i>
                            <div>
                                <h3>SEO Optimization</h3>
                                <p>Enhancing online visibility and driving organic traffic through effective keyword strategies, on-page optimization, and comprehensive analytics.</p>
                            </div>
                        </div>
    
                    </div>
    
                </div>

            </div>

            <div class="About_footer">

                <p>Every line of code paints tomorrow's internet</p>

            </div>

        </div>

        <div class="Experience" id="Experience">
            <div class="Experience_header">
                <h2>Professional Experience</h2>
                <p>Explore my web and android development journey.</p>
            </div>            
            
            <div class="Experience_main">
                <div class="timeline-line"></div>
                 
                <div id="Experience_Container">

                    <div class="timeline-item">
                        <div class="timeline-content">
                            <h3>Android Developer</h3>
                            <span class="date">2022 - Present</span>
                            <p>Developed and maintained multiple Android applications...</p>
                        </div>
                    </div>
        
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Web Developer</h3>
                        <span class="date">2020 - 2022</span>
                        <p>Created responsive websites using modern web technologies...</p>
                    </div>
                </div>
                </div>
                
            </div>
        </div>

        <div class="Projects" id="Projects">

            <div class="Project_header">

                <h2>Featured Projects</h2>

                <p>A Glimpse into My Development Expertise</p>

            </div>

            <div class="Project_main" id="Project_Container"> 
                
            </div>

            <div class="Project_footer">

                <p class="quote">"The best code is written with passion, not just proficiency."</p>

            </div>

        </div>

        <div class="Contact" id="Contact">

            <div class="Contact_header">
    
                <h2>Get in touch</h2>
    
                <p>Feel free to Reach Out and Let's Collaborate!</p>
    
            </div>
    
            <div class="Contact_main">
                
                <form action="#" method="post"> 
    
                    <h3 style="margin: 0 0 15px 0 ;">Send us a message.</h3>
    
                    <div class="wrapper">
    
                       <p>
                            <label for="fullname">
                                Full Name
                                <br />
                                <input type="text" name="fullname" id="fullname" placeholder='e.g Sibeko Siphiwe'/>
                            </label>
                        </p>
    
                        <p>
                            <label for="email">
                                Email Address
                                <br />
                                <input type="email" name="email" id="email" placeholder='Enter your email address'/>
                            </label>
                        </p>
    
                    </div>
    
                    <p>
                        <label htmlFor="message">
                            Message
                            <br />
                            <textarea name="message" id="message" placeholder='Enter your message...' rows=9></textarea>
                        </label>
                    </p>
    
                    <p>
                        <button type="submit">Send Message</button>
                    </p>
    
                </form>
    
                <div class="field">
    
                    <h3>Contact Information</h3>
    
                    <fieldset>
                        <legend>Physical Location</legend>
                        <div>
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Free state, South Africa</p>
                        </div>
                        <p></p>
                    </fieldset>
    
                    <fieldset>
                        <legend>Email Address</legend>
                        <div>
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:siphiwe.dev031@gmail.com">Siphiwe.dev031@gmail.com</a>
                        </div>
                        <p></p>
                    </fieldset>
    
                    <fieldset>
                        <legend>Phone Numbers</legend>
                        <div>
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:+27835527669">+27 83 552 7669</a>
                        </div>
                        <p></p>
                    </fieldset>                
    
                </div>
    
            </div> 

            <div class="Welcome_footer">

                <a href="">
                    <i class="fa-brands fa-square-github"></i>
                </a>
    
                <a href="">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
    
                <a href="">
                    <i class="fa-brands fa-square-instagram"></i>
                </a>
    
            </div>

        </div>

    </main>

    <script src="Script/Projects.js"></script>
    <script src="Script/Experience.js"></script>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>

</body>
</html> 