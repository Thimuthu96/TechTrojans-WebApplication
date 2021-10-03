<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "techtrojans";
$con = new mysqli($host, $user, $password, $dbname);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

if(!isset($_SESSION['userName'])){
    header('Location: indexmain.php');
}

if(isset($_POST['logout'])){
    session_destroy();
    header('Location: index.html');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <!-- AOS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
    />
    <!-- Glidejs -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css"
    />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="styles.css" />
    <title>TeamTrojans</title>
    <style>
      .logoimg img{
        position: relative;
        left: 5rem;
        width:20%;
        height: 10%;
        padding-top: 0%;
      }
      .logoimg{
        float: left;
        width: 60%;
      }
      @media only screen and (max-width: 768px){
        .logoimg{
        width: 80%;
      }
      }
      }
    </style>
    </head>
  <body>
    <!-- Header -->
    <header id="home" class="header">
      <!-- Navigation -->
      <div class="logoimg">
            <a href="#"><img src="./images/AmigaFiveQ-01.png" alt="logo" class="logoimg"></a>
          
          </div>
      <nav class="nav">
        <div class="navigation container">
          
            
          <div class="menu">
            <div class="top-nav">
              <div class="logo">
                <h1>Tech<span>Trojans</span></h1>
              </div>
              <div class="close">
                <i class="fas fa-times"></i>
              </div>
            </div>

            <ul class="nav-list">
              <li class="nav-item">
                <a href="#home" class="nav-link scroll-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="#about" class="nav-link scroll-link">About</a>
              </li>
              <li class="nav-item">
                <a href="#services" class="nav-link scroll-link">Services</a>
              </li>
              <li class="nav-item">
                <a href="#skills" class="nav-link scroll-link">Skills</a>
              </li>
              <li class="nav-item">
                <a href="#projects" class="nav-link scroll-link">Projects</a>
              </li>
              <li class="nav-item">
                <a href="#teams" class="nav-link scroll-link">Team</a>
              </li>
              <li class="nav-item">
                <a href="#contact" class="nav-link scroll-link">Contact</a>
              </li>
              
            </ul>
          </div>
          <div class="hamburger">
            <i class="fas fa-bars"></i>
          </div>
        </div>
      </nav>
      <!-- Hero -->
      <div class="hero">
        <h3>Hello, We are</h3>
        <h1>TechTrojons</h1><br><br>
        <h4>Do you need <span id="type1"></span></h4><br>
        <h4 style="text-decoration:underline">Here is the best place</h4>
        <a href="#contact" class="scroll-link">Hire us</a>
      </div>
      <img class="banner" src="./images/bg.svg" alt="" />
      <div class="icons">
        <span><i class="fab fa-facebook-f"></i></span>
        <span><i class="fab fa-instagram"></i></span>
        <span><i class="fab fa-twitter"></i></span>
      </div>
    </header>
    <!-- Main -->
    <section class="section about" id="about">
      <div class="title">
        <h1>About Us</h1>
      </div>
      <div class="about-center container">
        <div class="left" data-aos="fade-right" data-aos-duration="2000">
          <img src="./images/aboutprofile.svg" alt="" />
        </div>
        <div class="right" data-aos="fade-left" data-aos-duration="2000">
          <h1>We'er TechTrojans <span id="type2"></span></h1>
          <p>
          We are providing Web Development & E-Commerce Solutions, 
          Marketing Campaigns , SEO , Advertising Services. 
          Do you need unique , Decent , 
          High quality product? Here is the best place.
          </p>
        </div>
      </div>
    </section>
    <!-- Services -->
    <section class="section theme" id="services">
      <div class="title">
        <h1>Our Services</h1>
      </div>
      <div class="services-center container">
        <div class="service" data-aos="fade-down" data-aos-duration="2000">
          <span><i class="fab fa-accusoft"></i></span>
          <h2>Web Design</h2>
          <p>
          Awesome designs with unique and high quality. 
          Every time provide smart and perfect solutions for your requirements
          </p>
        </div>
        <div class="service" data-aos="fade-up" data-aos-duration="2000">
          <span><i class="fas fa-chart-line"></i></span>
          <h2>Advertising</h2>
          <p>
          We create content that converts. Every asset aligns with your commercial goals, 
          speaks to your audience and builds a conversation around your brand.
          </p>
        </div>
        <div class="service" data-aos="fade-down" data-aos-duration="2000">
          <span><i class="fas fa-blender-phone"></i></span>
          <h2>Mobile & Standalone</h2>
          <p>
          Awesome designs with unique and high quality Applications. 
          Every time provide smart and perfect solutions for your requirements.
          </p>
        </div>
      </div>
    </section>

    <!-- Skills -->
    <section class="section skills" id="skills">
      <div class="title">
        <h1>Our Skills</h1>
      </div>

      <div class="skills-center container">
        <div class="skills-left" data-aos="fade-right" data-aos-duration="2000">
          <div class="skills-box">
            <h4>HTML5</h4>
            <div class="skills-ilt">
              <div class="skills-bar html"></div>
              <span>95%</span>
            </div>
          </div>
          <div class="skills-box">
            <h4>CSS</h4>
            <div class="skills-ilt">
              <div class="skills-bar css"></div>
              <span>85%</span>
            </div>
          </div>
          <div class="skills-box">
            <h4>JavaScript</h4>
            <div class="skills-ilt">
              <div class="skills-bar javascript"></div>
              <span>90%</span>
            </div>
          </div>
          <div class="skills-box">
            <h4>Nodejs</h4>
            <div class="skills-ilt">
              <div class="skills-bar nodejs"></div>
              <span>80%</span>
            </div>
          </div>

          <div class="skills-box">
            <h4>Mongodb</h4>
            <div class="skills-ilt">
              <div class="skills-bar mongodb"></div>
              <span>95%</span>
            </div>
          </div>
        </div>

        <div class="right" data-aos="fade-left" data-aos-duration="2000">
          <h3>LIMITLESS POSSIBILITIES</h3>
          <h2>Website Development & Marketing Campaigns , SEO That Convert</h2>
          <p>
          We are providing Web Development & E-Commerce Solutions, 
          Marketing Campaigns , SEO , Advertising Services. Do you need unique , Decent , 
          High quality product? Here is the best place.
          </p>
        </div>
      </div>
    </section>

    <section class="section projects" id="projects">
      <div class="title">
        <h1>Projects Completed</h1>
      </div>
      
    </section>
    <!-- Teams -->
    <section class="section theme" id="teams">
      <div class="title">
        <h1>Our Team</h1>
      </div>

      <div class="teams-center container">
        <div class="glide">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <li class="glide__slide">
                <div class="team">
                  <div class="img-cover">
                    <img src="./images/profile1.jpg" alt="" />
                  </div>
                  <h3>P.P.T. Pamuditha</h3>
                  <p>
                  Developer
                  </p>
                </div>
              </li>
              <li class="glide__slide">
                <div class="team">
                  <div class="img-cover">
                    <img src="./images/profile2.jpg" alt="" />
                  </div>
                  <h3>S. Dilushika</h3>
                  <p>
                  Developer
                  </p>
                </div>
              </li>
              <li class="glide__slide">
                <div class="team">
                  <div class="img-cover">
                    <img src="./images/profile3.jpg" alt="" />
                  </div>
                  <h3>N.P. Manamperi</h3>
                  <p>
                  Developer
                  </p>
                </div>
              </li>
              <li class="glide__slide">
                <div class="team">
                  <div class="img-cover">
                    <img src="./images/profile4.jpg" alt="" />
                  </div>
                  <h3>Pamudi Vishmitha</h3>
                  <p>
                  Developer
                  </p>
                </div>
              </li>
              <li class="glide__slide">
                <div class="team">
                  <div class="img-cover">
                    <img src="./images/profile6.jpg" alt="" />
                  </div>
                  <h3>Someone name</h3>
                  <p>
                  Developer
                  </p>
                </div>
              </li>
              <li class="glide__slide">
                <div class="team">
                  <div class="img-cover">
                    <img src="./images/profile5.jpg" alt="" />
                  </div>
                  <h3>S.Jeewanthi</h3>
                  <p>
                    Developer
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section class="section contact" id="contact">
      <div class="title">
        <h1>Contact Us</h1>
      </div>

      <div class="contact-center container">
        <div class="left" data-aos="fade-down-right" data-aos-duration="2000">
          <h2>Get in Touch</h2>
          <p>
            Connect with us to awesome designs with unique and high quality. 
            Every time provide smart and perfect solutions for your requirements
          </p>
          <div>
            <span class="icon"><i class="fas fa-user"></i></span>
            <span class="content">
              <h3>Name</h3>
              <span>Tech Trojans</span>
            </span>
          </div>

          <div>
            <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
            <span class="content">
              <h3>Address</h3>
              <span>SriLanka</span>
            </span>
          </div>

          <div>
            <span class="icon"><i class="fas fa-envelope"></i></span>
            <span class="content">
              <h3>Email</h3>
              <span>team@techtrojans.com</span>
            </span>
          </div>
        </div>
        <div class="right" data-aos="fade-up-left" data-aos-duration="2000">
          <form class="form">
            <h2>Message us</h2>
            <div>
              <input type="text" placeholder="Name" />
              <input type="email" placeholder="Email" />
            </div>
            <input type="text" placeholder="Subject" />
            <textarea
              cols="10"
              rows="10"
              placeholder="Describe Project"
            ></textarea>

            <a href="mailto:thimuthp1996@gmail.com" class="btn">Send message</a>
          </form>
        </div>
      </div>
    </section>

    <footer>
      <p>Created By <span>techTrojans</span> | &copy; 2021 All rights reserved.</p>
    </footer>

    <!-- AOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- Typeit -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/7.0.4/typeit.min.js"></script>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <!-- Glidejs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
    <!-- Custom Script -->
    <script src="index.js"></script>
  </body>
</html>
