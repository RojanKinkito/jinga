<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="portfolio.css">
    li
</head>
<body>
    <header class="header">
    <a href="#home" class="logo">COSC <span>70</span></a>

    <i class='bx bx-menu' id="menu-icon"></i>

    <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#contact">Contact</a>
    </nav>
    </header>

    <section class="home" id="home">
        <div class="home-content">
            <h1>Hi, it's <span>Rojan</span></h1>
            <h3 class="text-animation">I'm a <span>Computer Science Student</span></h3>
            <p>I am a third-year Computer Science student just starting my journey in the field. Although I’m still learning the basics, I'm genuinely excited by the possibilities of technology and eager to improve my coding skills.</p>

            <div class="social-icons">
                <a href="https://www.facebook.com/rojan.kinkito/" target="_blank"><i class='bx bxl-facebook-circle' ></i></a>
                <a href="https://www.tiktok.com/@kinkito_rojan" target="_blank"><i class='bx bxl-tiktok'></i></a>
                <a href="https://www.instagram.com/yorojanchill/" target="_blank"><i class='bx bxl-instagram-alt' ></i></a>
                
            </div>

            <div class="btn-group">
                <a href="#" class="btn">hire</a>
                <a href="#contact" class="btn">Contact</a>
            </div>

        </div>
            <div class="home-img">
                <img src="rojan.jpg.jpg" alt="">
            </div>
        

    </section>

    <section class="about" id="about">
        <div class="about-img">
            <img src="rojan.jpg.jpg" alt="">
        </div>

      

        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Computer Science Student</h3>

            <p>Hello! I am a passionate third-year Computer Science student with a deep interest in software development, web design, and data science. Over the past year, I’ve explored and studied several programming languages, including Java, Python, and C++. Through academic projects and various coding challenges, I’ve built skills in data structures, algorithms, and database management.</p>
            <p></p>
            <p>Currently, I'm working on this portfolio as my Midterm Project, and I’m excited to share it with you. This is my first website, and I’ve put in my best effort to showcase everything I've learned so far as a Computer Science student.</p>
            <p></p>
            <p>Beyond coding, I've discovered how challenging and rewarding this course can be. These challenges push me to keep learning and practicing so that I can improve my programming skills and eventually take on even more complex projects. I hope you enjoy exploring my portfolio and seeing what I’ve accomplished!</p>
            <a href="#skills" class="btn">Read More</a>
        </div>

    </section>

    <section class="skills" id="skills">
    <div class="heading">
        <h2 class="heading">My <span>Skills</span></h2>
        </div>
        <div class="container">
       
            <div class="skills">
                <div class="details">
                    <span>HTML</span>
                    <span>60%</span>
                </div>
                <div class="bar">
                    <div id="html-bar"></div>
                </div>
            </div>
            <div class="skills">
                <div class="details">
                    <span>CSS</span>
                    <span>75%</span>
                </div>
                <div class="bar">
                    <div id="css-bar"></div>
                </div>
            </div>
            <div class="skills">
                <div class="details">
                    <span>Python</span>
                    <span>65%</span>
                </div>
                <div class="bar">
                    <div id="js-bar"></div>
                </div>
            </div>
            <div class="skills">
                <div class="details">
                    <span>MySQL</span>
                    <span>50%</span>
                </div>
                <div class="bar">
                    <div id="jQuery-bar"></div>
                </div>
            </div>
            <div class="skills">
                <div class="details">
                    <span>Java</span>
                    <span>45%</span>
                </div>
                <div class="bar">
                    <div id="java-bar"></div>
                </div>
            </div>
        </div>

    </section>

    <section class="portfolio" id="portfolio">
    <div class="heading">
        <h2 class="heading">My <span>Project</span></h2>
        </div>
    <div class="project-grid">
            
            <div class="project-card">
                <div class="project-thumbnail">
                    <img src="toysInventory.jpeg" alt="Project 1 Screenshot">
                </div>
                <div class="project-content">
                    <h3>Project 1</h3>
                    <p>This is a Toys Inventory System, a project I developed in the previous year to manage and track toy inventory efficiently.</p>
                    <a href="ToysInventory.pdf" class="download-button" download>Download</a>
                </div>
            </div>

            
            <div class="project-card">
                <div class="project-thumbnail">
                    <img src="Colyne.jpg" alt="Project 2 Screenshot">
                </div>
                <div class="project-content">
                    <h3>Project 2</h3>
                    <p>This is a Point of Sale (POS) System, one of the projects I worked on during the previous year, designed to streamline sales transactions and inventory management.</p>
                    <a href="POS.pdf" class="download-button" download>Download</a>
                </div>
            </div>
        </div>

    
    </section>

        

    </section>

    <section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me</span></h2>

    <form action="send_email.php" method="POST">
        <div class="input-group">
            <div class="input-box">
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="number" name="phone" placeholder="Phone Number" required>
                <input type="text" name="subject" placeholder="Subject" required>
            </div>
        </div>

        <div class="input-group-2">
            <textarea name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
            <input type="submit" value="Send Message" class="btn">
        </div>
    </form>
</section>


    <footer class="footer">

        <div class="social">
        <a href="https://www.facebook.com/rojan.kinkito/" target="_blank"><i class='bx bxl-facebook-circle' ></i></a>
        <a href="https://www.tiktok.com/@kinkito_rojan" target="_blank"><i class='bx bxl-tiktok'></i></a>
        <a href="https://www.instagram.com/yorojanchill/" target="_blank"><i class='bx bxl-instagram-alt' ></i></a>
                
        </div>

        <ul class="list">

            <li>
                <a href="#home">FAQ

                </a>
            </li>

            <li>
                <a href="#about">About me
                    
                </a>
            </li>

            <li>
                <a href="#skills">Skills
                    
                </a>
            </li>

            <li>
                <a href="#portfolio">Portfolio
                    
                </a>
            </li>

            <li>
                <a href="#contact">Contact
                    
                </a>
            </li>

        </ul>
        <p class="copyright">
        © COSC 70
        </p>
    </footer>



    <script src="portfolio.js"></script>
</body>
</html>

