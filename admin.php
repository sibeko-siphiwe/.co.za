<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Sibeko Siphiwe</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <style>
        body{
            overflow-x: hidden;
        }
        .Admin{
            padding: 60px 60px 20px 60px;
            min-height: 100vh;
            transition: all .3s ease;

            .Admin_header{
                text-align: center;
                margin: 20px 0;
                padding: 20px;
                border-bottom: 2px solid #00000050;
                border-radius: 20px;
                div{
                    height: 300px;
                    width: 300px;
                    border-radius: 20%;
                    overflow: hidden;
                    margin: 0 auto;
                    
                    img{
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        object-position: center;
                    }

                }

                p{
                    margin: 10px 0;
                }

                .wrapper{
                    display: flex;
                    gap: 10px;
                    width: 100%;
                    max-width: 700px;
                    margin: 0 auto;

                    button{
                        padding: 10px;
                        border: none;
                        background-color: #212121;
                        color: white;
                        cursor: pointer;
                        border-radius: 15px;
                        width: 100%;
                        font-size: 17px;
                    }

                    button:hover{
                        color: red;
                    }

                }

                h2{
                    font-size: 35px;
                }

            }

        }

        .Projects{
            padding: 0;
        }
    
</style>

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
            <a href="index.php#Home"><span>Home</span></a>
            <a href="index.php#About"><span>About</span></a>
            <a href="index.php#Experience"><span>Experience</span></a>
            <a href="index.php#Projects"><span>Projects</span></a>
            <a href="index.php#Contact"><span>Contact</span></a>
        </nav>
    
        <div class="mobile-menu"> 
            <i id="menu" class="fa-solid fa-bars menu"></i>
            <nav class="mobile-nav">
                <a href="index.php#Home">Home</a>
                <a href="index.php#About">About</a>
                <a href="index.php#Experience">Experience</a>
                <a href="index.php#Projects">Projects</a>
                <a href="index.php#Contact">Contact</a>
            </nav>
        </div>
    </header>

    <div class="Admin">

        <div class="Admin_header">

            <div>
                <img src="images/Siphiwe.jpg" alt="Siphiwe Sibeko">
            </div>

            <h2>Admin Dashboard</h2>

            <p>Welcome Siphiwe</p>

            <section class="wrapper">

                <button onclick="location.href = 'Project.php'">Add Project</button>
                <button onclick="location.href = 'Experience.php'">Add Experience</button>

            </section>

        </div>

        <div class="Admin_main">

        <div class="Projects" id="Projects">

<div class="Project_header">

    <h2>Featured Projects</h2>

    <p>A Glimpse into My Development Expertise</p>

</div>

<div class="Project_main">

    <div class="Project">

        <div class="Project_image">

            <img src="images/LiveStream.png" alt="Project image">

        </div>

        <div class="Project_info">

            <h3>Online Kovsie Gear</h3>

            <div class="Techstack">

                <p>ASP.NET MVC</p>
                <p>SQL Server</p>
                <p>Bootstrap</p>

            </div> 

            <button>Live Preview</button>

        </div>

    </div>

    <div class="Project">

        <div class="Project_image">

            <img src="images/StudentAccommodation.png" alt="Project image">

        </div>

        <div class="Project_info">

            <h3>Online Kovsie Gear</h3>

            <div class="Techstack">

                <p>ASP.NET MVC</p>
                <p>SQL Server</p>
                <p>Bootstrap</p>

            </div>
                
            <button>Live Preview</button>

        </div>

    </div>

    <div class="Project">

        <div class="Project_image">

            <img src="images/KovsieGear.png" alt="Project image">

        </div>

        <div class="Project_info">

            <h3>Online Kovsie Gear</h3>

            <div class="Techstack">

                <p>ASP.NET MVC</p>
                <p>SQL Server</p>
                <p>Bootstrap</p>

            </div>
                
            <button>Live Preview</button>

        </div>

    </div>

    <div class="Project">

        <div class="Project_image">

            <img src="images/VarsityLove.png" alt="Project image">

        </div>

        <div class="Project_info">

            <h3>Online Kovsie Gear</h3>

            <div class="Techstack">

                <p>ASP.NET MVC</p>
                <p>SQL Server</p>
                <p>Bootstrap</p>

            </div>
                
            <button>Live Preview</button>

        </div>

    </div>

    <div class="Project">

        <div class="Project_image">

            <img src="images/StudentMarket.png" alt="Project image">

        </div>

        <div class="Project_info">

            <h3>Online Kovsie Gear</h3>

            <div class="Techstack">

                <p>ASP.NET MVC</p>
                <p>SQL Server</p>
                <p>Bootstrap</p>

            </div>
                
            <button>Live Preview</button>

        </div>

    </div>

    <div class="Project">

        <div class="Project_image">

            <img src="images/KovsieGear.png" alt="Project image">

        </div>

        <div class="Project_info">

            <h3>Online Kovsie Gear</h3>

            <div class="Techstack">

                <p>ASP.NET MVC</p>
                <p>SQL Server</p>
                <p>Bootstrap</p>

            </div>
                
            <button>Live Preview</button>

        </div>

    </div>

</div>

<div class="Project_footer">

    <p class="quote">"The best code is written with passion, not just proficiency."</p>

</div>

</div>

        </div>

    </div>

    <script src="script.js"></script>
</body>
</html>