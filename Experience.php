<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Experience</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Reset styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        /* Main container */
        .container {
            padding: 20px;
            min-height: 100vh;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        
        /* Background decorations */
        .bg-decoration {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }
        
        .bg-decoration::before,
        .bg-decoration::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            opacity: 0.05;
        }
        
        .bg-decoration::before {
            top: -150px;
            right: -150px;
            width: 600px;
            height: 600px;
            background: linear-gradient(135deg, #3498db, #9b59b6);
        }
        
        .bg-decoration::after {
            bottom: -150px;
            left: -150px;
            width: 500px;
            height: 500px;
            background: linear-gradient(135deg, #2ecc71, #3498db);
        }
        
        /* Animated geometric decorations */
        .geometric {
            position: absolute;
            opacity: 0.1;
            border: 1px solid #3498db;
            animation: rotate 30s linear infinite;
        }
        
        .geometric.square {
            width: 100px;
            height: 100px;
            top: 10%;
            left: 15%;
        }
        
        .geometric.rectangle {
            width: 150px;
            height: 80px;
            bottom: 20%;
            right: 10%;
        }
        
        .geometric.triangle {
            width: 0;
            height: 0;
            border-left: 50px solid transparent;
            border-right: 50px solid transparent;
            border-bottom: 86px solid #3498db;
            background: transparent;
            top: 25%;
            right: 20%;
            opacity: 0.05;
        }
        
        .geometric.circle {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            bottom: 25%;
            left: 20%;
        }
        
        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
        
        /* Form container */
        .login-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 700px;
            z-index: 2;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            position: relative;
            overflow: hidden;
        }
        
        .login-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, #9b59b6, #3498db);
        }
        
        /* Form header */
        .login-header {
            margin-bottom: 30px;
            text-align: center;
        }
        
        .login-header h1 {
            font-size: 28px;
            color: #2ecc71;
            margin-bottom: 5px;
            font-weight: 600;
        }
        
        .login-header p {
            color: #666;
            font-size: 14px;
        }
        
        /* Form styles */
        .form-group {
            margin-bottom: 25px;
            position: relative;
        }
        
        .form-control {
            width: 100%;
            padding: 15px 15px;
            font-size: 15px;
            border: none;
            border-radius: 8px;
            background-color: #f5f7fa;
            transition: all 0.3s ease;
            color: #333;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .form-control.content {
            min-height: 150px;
            padding-top: 15px;
            resize: vertical;
        }
        
        .form-control:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.3);
            border-color: rgba(52, 152, 219, 0.5);
            background-color: #fff;
        }
        
        .form-label {
            position: absolute;
            top: 15px;
            left: 15px;
            color: #999;
            font-size: 15px;
            pointer-events: none;
            transition: all 0.3s ease;
        }
        
        .form-control:focus ~ .form-label,
        .form-control:not(:placeholder-shown) ~ .form-label {
            top: -10px;
            left: 10px;
            font-size: 12px;
            background-color: #fff;
            padding: 0 5px;
            color: #3498db;
        }
        
        /* Form row styling */
        .form-row {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .form-row .form-group {
            flex: 1;
        }
        
        /* Button styles */
        .login-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #3498db, #9b59b6);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .login-btn::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: -100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.6s ease;
        }
        
        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 14px rgba(52, 152, 219, 0.3);
        }
        
        .login-btn:hover::after {
            left: 100%;
        }
        
        /* Responsive design */
        @media screen and (max-width: 480px) {
            .login-container {
                padding: 30px 20px;
            }
            
            .login-header h1 {
                font-size: 24px;
            }
            
            .bg-decoration::before {
                width: 300px;
                height: 300px;
            }
            
            .bg-decoration::after {
                width: 250px;
                height: 250px;
            }

            .form-row {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>
<body>
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
    <div class="container">
        <div class="bg-decoration"></div>
        
        <!-- Geometric shapes for decoration -->
        <div class="geometric square"></div>
        <div class="geometric rectangle"></div>
        <div class="geometric triangle"></div>
        <div class="geometric circle"></div>
        
        <div class="login-container">
    <div class="login-header">
        <h1>Add Experience</h1>
        <p>Share your professional experience and achievements.</p>
    </div>
    
    <!-- In the form section -->
<form id="experienceForm">
    <!-- Title Field -->
    <div class="form-group">
        <input type="text" class="form-control" id="experienceName" name="experience_name" placeholder=" " required>
        <label class="form-label" for="experienceName">Experience Title</label>
    </div>

    <!-- Company Name -->
    <div class="form-group">
        <input type="text" class="form-control" id="companyName" name="company_name" placeholder=" " required>
        <label class="form-label" for="companyName">Company Name</label>
    </div>

    <!-- Date Range -->
    <div class="form-row">
        <div class="form-group">
            <input type="month" class="form-control" id="startDate" name="start_date" placeholder=" " required>
            <label class="form-label" for="startDate">From</label>
        </div>
        <div class="form-group">
            <input type="month" class="form-control" id="endDate" name="end_date" placeholder=" " required>
            <label class="form-label" for="endDate">To</label>
        </div>
    </div>

    <!-- Content Field -->
    <div class="form-group">
        <textarea class="form-control content" id="experienceContent" name="experience_content" placeholder=" " required></textarea>
        <label class="form-label" for="experienceContent">Experience Details</label>
    </div>

    <button type="submit" class="login-btn">Add Experience</button>
</form>
</div>

    </div>

    <script>
        let experienceForm = document.getElementById('experienceForm');
        experienceForm.onsubmit = (e) => {
            e.preventDefault();
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "php/experience.php", true);
            xhr.onload = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        try {
                            let res = JSON.parse(xhr.responseText);
                            if (res.success) {
                                window.location.href = 'admin.php';
                            } else {
                                alert(res.message || 'Submission failed');
                            }
                        } catch (e) {
                            alert('Invalid server response');
                        }
                    } else {
                        alert('Request failed with status: ' + xhr.status);
                    }
                }
            };
            xhr.onerror = function() {
                alert('Request failed');
            };
            let formData = new FormData(experienceForm);
            xhr.send(formData);
        };
    </script>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>
</body>
</html>