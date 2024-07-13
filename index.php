<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Aman's Portfolio</title>
    <!-- title logo -->
     <link rel="icon" href="assets/images/title-logo-removebg-preview.png">

     <!-- ------------------------------- FONT AWESOME CDN -------------------------- -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ------------------------------- UNICONS -------------------------- -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- ------------------------------- BOXICONS -------------------------- -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- ------------------------------- SWIPER CSS -------------------------- -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    
    <!-- ------------------------------- JQUERY -------------------------- -->
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
				var progressPath = document.querySelector('.progress-wrap path');
				var pathLength = progressPath.getTotalLength();

				progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
				progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
				progressPath.style.strokeDashoffset = pathLength;
				progressPath.getBoundingClientRect();
				progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';

				var updateProgress = function() {
					var scroll = $(window).scrollTop();
					var height = $(document).height() - $(window).height();
					var progress = pathLength - (scroll * pathLength / height);
					progressPath.style.strokeDashoffset = progress;
				}

				updateProgress();
				$(window).scroll(updateProgress);

				var offset = 50;
				var duration = 550;

				jQuery(window).on('scroll', function() {
					if(jQuery(this).scrollTop() > offset) {
						jQuery('.progress-wrap').addClass('active-progress');
					} else {
						jQuery('.progress-wrap').removeClass('active-progress');
					}
				});

				jQuery('.progress-wrap').on('click', function(event) {
					event.preventDefault();
					jQuery('html, body').animate({scrollTop: 0}, duration);
					return false;
				})
			});
		</script>
    <!-- ------------------------------- MAIN CSS -------------------------- -->
    <style>
        <?php
            include "assets/css/style.css";
        ?>
    </style>
</head>
<body>

<!-- ---------------------------------- PRELOADER ---------------------------------- -->
<?php
    include "preloader.php";
?>


<!-- ---------------------------------- SIDEBAR ---------------------------------- -->
 <div class="nav_toggle" id="nav_toggle">
    <i class="uil uil-bars"></i>
 </div>

<aside class="sidebar main-content" id="sidebar">
    <nav class="nav">
        <div class="nav_logo" style="overflow: hidden;">
            <a href="index.php" class="nav_logo-text">
                <img src="assets/images/title-logo-removebg-preview.png" alt="Logo Text" class="black-logo">
                <!-- <img src="assets/images/output-onlinepngtools.png" alt="Logo Text" class="white-logo"> -->
                 <!-- A -->
            </a>
        </div>

        <div class="nav_menu">
            <div class="menu">
                <ul class="nav_list">
                    <li class="nav_item">
                        <a href="#home" class="nav_link active-link">Home</a>
                    </li>
                    <li class="nav_item">
                        <a href="#about" class="nav_link">About</a>
                    </li>
                    <li class="nav_item">
                        <a href="#skills" class="nav_link">Skills</a>
                    </li>
                    <li class="nav_item">
                        <a href="#portfolio" class="nav_link">Portfolio</a>
                    </li>
                    <li class="nav_item">
                        <a href="#services" class="nav_link">Services</a>
                    </li>
                    <li class="nav_item">
                        <a href="#contact" class="nav_link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="dark-light-toggle-btn">
            <label for="" class="dark-mode">
                <input type="checkbox" id="checkbox" class="check">
                <ion-icon name="sunny" class="sun"></ion-icon>
                <ion-icon name="moon" class="moon"></ion-icon>
                <span class="toggle"></span>
            </label>
        </div>

        <div class="nav_close" id="nav_close">
            <i class="uil uil-times"></i>
        </div>
    </nav>
</aside>

<!-- ---------------------------------- MAIN ---------------------------------- -->
<main class="main main-content">
    <!-- ---------------- Home ---------------- -->
    <section class="home" id="home">
        <div class="home_container container grid">

            <img src="assets/images/About_Img-removebg-preview.png" alt="" class="home_img">

            <div class="home_data">
                <h1 class="home_title">Hi, I'm Amansha</h1>
                <h3 class="home_subtitle">Frontend Developer</h3>
                <p class="home_description">I design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores.</p>
                <a href="#about" class="button"><i class="uil uil-user button_icon"></i>More About Me</a>
            </div>

            <div class="my_info">
                <div class="info_item">
                    <i class="uil uil-linkedin info_icon"></i>
                    <div>
                        <h3 class="info_title">LinkedIn</h3>
                        <span class="info_subtitle">Amansha Shaji</span>
                    </div>
                </div>

                <div class="info_item">
                    <i class="uil uil-whatsapp info_icon"></i>
                    <div>
                        <h3 class="info_title">WhatsApp</h3>
                        <span class="info_subtitle">+91 97443 34927</span>
                    </div>
                </div>

                <div class="info_item">
                    <i class="uil uil-envelope-edit info_icon"></i>
                    <div>
                        <h3 class="info_title">Email</h3>
                        <span class="info_subtitle">aman.shah.26266@gmail.com</span>
                    </div>
                </div>
            </div>

        </div>
    </section>
            
    <!-- ---------------- About ---------------- -->
     <section class="about section" id="about">
        <h2 data-heading="My Intro" class="section_title">About Me</h2>
        <div class="about_container container grid">
            <img src="assets/images/About_Img1.jpeg" alt="" class="about_img">

            <div class="about_data">
                <h3 class="about_heading">Hi, I'm Amansha Shaji</h3>
                <p class="about_description">
                    I am a Frontend Developer with 2 years of experience in designing and developing user interfaces, testing, debugging, and training staff within eCommerce technologies. Proven ability in optimizing web functionality that improves data retrieval and workflow efficiencies.
                </p>
                <div class="about_info grid">

                    <div class="about_box">
                        <i class="uil uil-award about_icon"></i>
                        <h3 class="about_title">Experience</h3>
                        <span class="about_subtitle">1 + Years</span>
                    </div>

                    <div class="about_box">
                        <i class="uil uil-suitcase-alt about_icon"></i>
                        <h3 class="about_title">Completed</h3>
                        <span class="about_subtitle">10 + Projects</span>
                    </div>

                    <div class="about_box">
                        <i class="fa-regular fa-id-badge about_icon"></i>
                        <h3 class="about_title">Internships</h3>
                        <span class="about_subtitle">8 + Virtual</span>
                    </div>

                    <div class="about_box">
                        <i class="fa-solid fa-stamp about_icon"></i>
                        <h3 class="about_title">Certificates</h3>
                        <span class="about_subtitle">8 + Earned</span>
                    </div>

                </div>
                <a href="#contact" class="button"><i class="uil uil-navigator button_icon"></i>Contact Me</a>
            </div>
            
        </div>
     </section>

    <!-- ---------------- Qualifications ---------------- -->
     <section class="qualification section">
        <h2 data-heading="My Journey" class="section_title">Qualifications</h2>

        <div class="qualification_container container grid">
            <div class="education">
                <h3 class="qualification_title"><i class="uil uil-graduation-cap"></i> Eductaion</h3>

                <div class="timeline">
                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                        <h3 class="timeline_title">Apna College (Online Course)</h3>
                        <p class="timeline_text">Full Stack Development</p>
                        <span class="timeline_date"><i class="uil uil-calendar-alt"></i> Nov 2023 - Apr 2024</span>
                    </div>

                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                        <h3 class="timeline_title">Ganpat University (Gujarat)</h3>
                        <p class="timeline_text">Bachelor Of Computer Application (BCA)</p>
                        <span class="timeline_date"><i class="uil uil-calendar-alt"></i> July 2022 - Present</span>
                    </div>

                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                        <h3 class="timeline_title">The Indian School Bahrain, Bahrain</h3>
                        <p class="timeline_text">Senior Secondary School (12 <sup>th</sup>)</p>
                        <span class="timeline_date"><i class="uil uil-calendar-alt"></i> May 2018 - Mar 2019</span>
                    </div>
                </div>

            </div>

            <div class="experience">
                <h3 class="qualification_title"><i class="uil uil-suitcase"></i> Experience</h3>

                <div class="timeline">
                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                        <h3 class="timeline_title">Notlob Food Delivery, Bahrain</h3>
                        <p class="timeline_text">Customer Service Agent</p>
                        <span class="timeline_date"><i class="uil uil-calendar-alt"></i> Nov 2021 - Jun 2022</span>
                    </div>

                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                        <h3 class="timeline_title">Al Gillidary Trading, Bahrain</h3>
                        <p class="timeline_text">Assistant Accountant</p>
                        <span class="timeline_date"><i class="uil uil-calendar-alt"></i> Jul 2021 - Aug 2021</span>
                    </div>

                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                        <h3 class="timeline_title">Asian Pearl Trading, Bahrain</h3>
                        <p class="timeline_text">Assistant Accountant</p>
                        <span class="timeline_date"><i class="uil uil-calendar-alt"></i> Jun 2019 - Apr 2021</span>
                    </div>
                </div>
                
            </div>
        </div>

     </section>

    <!-- ---------------- Skills ---------------- -->
     <section class="skills section" id="skills">
        <h2 data-heading="My Abilities" class="section_title">My Experience</h2>

        <div class="skills_container container grid">

            <div class="skills_tabs">

                <div class="skills_header skills_active" data-target="#frontend">
                    <i class="uil uil-swatchbook skills_icon"></i>
                    <div>
                        <h1 class="skills_title">Frontend Developer</h1>
                        <span class="skills_subtitle">More than 2 years</span>
                    </div>
                    <i class="uil uil-angle-down skills_arrow"></i>
                </div>

                <div class="skills_header" data-target="#backend">
                    <i class="uil uil-database skills_icon"></i>
                    <div>
                        <h1 class="skills_title">Backend Developer</h1>
                        <span class="skills_subtitle">More than 2 years</span>
                    </div>
                    <i class="uil uil-angle-down skills_arrow"></i>
                </div>

            </div>

            <div class="skills_content">

                <div class="skills_group skills_active" data-content id="frontend">
                    <div class="skills_list grid">

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">HTML</h3>
                                <span class="skills_number">90%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage" style="width:90%;"></span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">CSS</h3>
                                <span class="skills_number">80%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage" style="width:80%;"></span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">JavaScript</h3>
                                <span class="skills_number">60%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage" style="width:60%;"></span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="skills_group" data-content id="backend">
                    <div class="skills_list grid">

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">PHP</h3>
                                <span class="skills_number">90%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage" style="width:90%;"></span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Python</h3>
                                <span class="skills_number">40%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage" style="width:40%;"></span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">MySQL</h3>
                                <span class="skills_number">80%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage" style="width:80%;"></span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
     </section>

    <!-- ---------------- Work ---------------- -->
     <section class="work section" id="portfolio">
        <h2 data-heading="My Portfolio" class="section_title">Recent Work</h2>

        <div class="work_filters">
            <span class="work_item active-work" data-filter="all">All</span>
            <span class="work_item" data-filter=".web">Web</span>
            <span class="work_item" data-filter=".app">App</span>
            <span class="work_item" data-filter=".design">Design</span>
        </div>

        <div class="work_container container grid">

            <div class="work_card mix web">
                <img src="assets/images/work_imgs/p2.png" alt="" class="work_img">
                <h3 class="work_title">Web Design</h3>
                <span class="work_button">Demo <i class="uil uil-arrow-right work_button-icon"></i></span>
                <div class="portfolio_item-details">
                    <h3 class="details_title">Tour & Travel Website</h3>
                    <p class="details_description">A simple travel website design.</p>
                    <ul class="details_info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>Technologies - <span>html, css, javascript, jquery, bootstrap</span></li>
                        <li>Role - <span>Frontend</span></li>
                        <li>View - <span><a href="https://amanstravels.netlify.app/">amanstravels.netlify.app</a></span></li>
                    </ul>
                </div>
            </div>

            <div class="work_card mix web">
                <img src="assets/images/work_imgs/p1.png" alt="" class="work_img">
                <h3 class="work_title">Web Design</h3>
                <span class="work_button">Demo <i class="uil uil-arrow-right work_button-icon"></i></span>
                <div class="portfolio_item-details">
                    <h3 class="details_title">Login/Register Page.</h3>
                    <p class="details_description">Easy switchable login/register page.</p>
                    <ul class="details_info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>Technologies - <span>html, css, javascript</span></li>
                        <li>Role - <span>Frontend</span></li>
                        <li>View - <span><a href="https://amansregister.netlify.app/">amansregister.netlify.app</a></span></li>
                    </ul>
                </div>
            </div>

            <div class="work_card mix web">
                <img src="assets/images/work_imgs/p3.png" alt="" class="work_img">
                <h3 class="work_title">Web Design</h3>
                <span class="work_button">Demo <i class="uil uil-arrow-right work_button-icon"></i></span>
                <div class="portfolio_item-details">
                    <h3 class="details_title">University Website</h3>
                    <p class="details_description">Simple University website.</p>
                    <ul class="details_info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>Technologies - <span>html, css, jquery</span></li>
                        <li>Role - <span>Frontend</span></li>
                        <li>View - <span><a href="https://amansuniversity.netlify.app/">amansuniversity.netlify.app</a></span></li>
                    </ul>
                </div>
            </div>

            <div class="work_card mix app">
                <img src="assets/images/work_imgs/p4.png" alt="" class="work_img">
                <h3 class="work_title">App Design</h3>
                <span class="work_button">Demo <i class="uil uil-arrow-right work_button-icon"></i></span>
                <div class="portfolio_item-details">
                    <h3 class="details_title">Calculator app design.</h3>
                    <p class="details_description">Simple Calculator.</p>
                    <ul class="details_info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>Technologies - <span>html, css, javascript</span></li>
                        <li>Role - <span>Frontend</span></li>
                        <li>View - <span><a href="https://amanscalc.netlify.app/">amanscalc.netlify.app</a></span></li>
                    </ul>
                </div>
            </div>

            <div class="work_card mix design">
                <img src="assets/images/work_imgs/p5.png" alt="" class="work_img">
                <h3 class="work_title">Brand Design</h3>
                <span class="work_button">Demo <i class="uil uil-arrow-right work_button-icon"></i></span>
                <div class="portfolio_item-details">
                    <h3 class="details_title">Landing Page</h3>
                    <p class="details_description">A landing page.</p>
                    <ul class="details_info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>Technologies - <span>html, css</span></li>
                        <li>Role - <span>Frontend</span></li>
                        <li>View - <span><a href="https://amanslanding.netlify.app/">amanslanding.netlify.app</a></span></li>
                    </ul>
                </div>
            </div>

            <div class="work_card mix app">
                <img src="assets/images/work_imgs/p6.png" alt="" class="work_img">
                <h3 class="work_title">App Design</h3>
                <span class="work_button">Demo <i class="uil uil-arrow-right work_button-icon"></i></span>
                <div class="portfolio_item-details">
                    <h3 class="details_title">Age Calculator</h3>
                    <p class="details_description">An age calculator.</p>
                    <ul class="details_info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>Technologies - <span>html, css, javascript</span></li>
                        <li>Role - <span>Frontend</span></li>
                        <li>View - <span><a href="https://amansagecalc.netlify.app/">amansagecalc.netlify.app</a></span></li>
                    </ul>
                </div>
            </div>

            <div class="work_card mix app">
                <img src="assets/images/work_imgs/p7.png" alt="" class="work_img">
                <h3 class="work_title">App Design</h3>
                <span class="work_button">Demo <i class="uil uil-arrow-right work_button-icon"></i></span>
                <div class="portfolio_item-details">
                    <h3 class="details_title">Music Player</h3>
                    <p class="details_description">Music player design.</p>
                    <ul class="details_info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>Technologies - <span>html, css, javascript</span></li>
                        <li>Role - <span>Frontend</span></li>
                        <li>View - <span><a href="https://amansplayer.netlify.app/">amansplayer.netlify.app</a></span></li>
                    </ul>
                </div>
            </div>

            <div class="work_card mix app">
                <img src="assets/images/work_imgs/p8.png" alt="" class="work_img">
                <h3 class="work_title">App Design</h3>
                <span class="work_button">Demo <i class="uil uil-arrow-right work_button-icon"></i></span>
                <div class="portfolio_item-details">
                    <h3 class="details_title">Countdown Timer</h3>
                    <p class="details_description">Countdown timer website.</p>
                    <ul class="details_info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>Technologies - <span>html, css, javascript</span></li>
                        <li>Role - <span>Frontend</span></li>
                        <li>View - <span><a href="https://amansnewyeartimer.netlify.app/">amansnewyeartimer.netlify.app</a></span></li>
                    </ul>
                </div>
            </div>

            <div class="work_card mix web">
                <img src="assets/images/work_imgs/p9.png" alt="" class="work_img">
                <h3 class="work_title">Web Design</h3>
                <span class="work_button">Demo <i class="uil uil-arrow-right work_button-icon"></i></span>
                <div class="portfolio_item-details">
                    <h3 class="details_title">Amazon Clone</h3>
                    <p class="details_description">Single page amazon clone.</p>
                    <ul class="details_info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>Technologies - <span>html, css</span></li>
                        <li>Role - <span>Frontend</span></li>
                        <li>View - <span><a href="#">www.domain.com</a></span></li>
                    </ul>
                </div>
            </div>

            <div class="work_card mix web">
                <img src="assets/images/work_imgs/p10.png" alt="" class="work_img">
                <h3 class="work_title">Web Design</h3>
                <span class="work_button">Demo <i class="uil uil-arrow-right work_button-icon"></i></span>
                <div class="portfolio_item-details">
                    <h3 class="details_title">Portfolio Website</h3>
                    <p class="details_description">Responsive portfolio website.</p>
                    <ul class="details_info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>Technologies - <span>html, css, javascript</span></li>
                        <li>Role - <span>Frontend</span></li>
                        <li>View - <span><a href="https://amansportfolio2.netlify.app/">amansportfolio2.netlify.app</a></span></li>
                    </ul>
                </div>
            </div>

            <div class="work_card mix web">
                <img src="assets/images/work_imgs/p11.png" alt="" class="work_img">
                <h3 class="work_title">Web Design</h3>
                <span class="work_button">Demo <i class="uil uil-arrow-right work_button-icon"></i></span>
                <div class="portfolio_item-details">
                    <h3 class="details_title">Portfolio Design (Dark/Light Mode)</h3>
                    <p class="details_description">Responsive portfolio website with dark/light mode.</p>
                    <ul class="details_info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>Technologies - <span>html, css, javascript</span></li>
                        <li>Role - <span>Frontend</span></li>
                        <li>View - <span><a href="https://amanshasportfolio3.netlify.app/">amanshasportfolio3.netlify.app</a></span></li>
                    </ul>
                </div>
            </div>

            <div class="work_card mix design">
                <img src="assets/images/work_imgs/p12.png" alt="" class="work_img">
                <h3 class="work_title">Brand Design</h3>
                <span class="work_button">Demo <i class="uil uil-arrow-right work_button-icon"></i></span>
                <div class="portfolio_item-details">
                    <h3 class="details_title">Landing Page Design</h3>
                    <p class="details_description">Simple landing page.</p>
                    <ul class="details_info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>Technologies - <span>html, css</span></li>
                        <li>Role - <span>Frontend</span></li>
                        <li>View - <span><a href="https://amanslanding1.netlify.app/">amanslanding1.netlify.app</a></span></li>
                    </ul>
                </div>
            </div>

            <div class="work_card mix web">
                <img src="assets/images/work_imgs/p13.png" alt="" class="work_img">
                <h3 class="work_title">Web Design</h3>
                <span class="work_button">Demo <i class="uil uil-arrow-right work_button-icon"></i></span>
                <div class="portfolio_item-details">
                    <h3 class="details_title">Portfolio Design</h3>
                    <p class="details_description">Portfolio website.</p>
                    <ul class="details_info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>Technologies - <span>html, css</span></li>
                        <li>Role - <span>Frontend</span></li>
                        <li>View - <span><a href="https://amansportfolio1.netlify.app/">amansportfolio1.netlify.app</a></span></li>
                    </ul>
                </div>
            </div>

            <div class="work_card mix app">
                <img src="assets/images/work_imgs/p14.png" alt="" class="work_img">
                <h3 class="work_title">App Design</h3>
                <span class="work_button">Demo <i class="uil uil-arrow-right work_button-icon"></i></span>
                <div class="portfolio_item-details">
                    <h3 class="details_title">Temperature Converter</h3>
                    <p class="details_description">Temperature converter design.</p>
                    <ul class="details_info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>Technologies - <span>html, css, javascript</span></li>
                        <li>Role - <span>Frontend</span></li>
                        <li>View - <span><a href="https://amantempconverter.netlify.app/">amantempconverter.netlify.app</a></span></li>
                    </ul>
                </div>
            </div>

            <div class="work_card mix app">
                <img src="assets/images/work_imgs/p15.png" alt="" class="work_img">
                <h3 class="work_title">App Design</h3>
                <span class="work_button">Demo <i class="uil uil-arrow-right work_button-icon"></i></span>
                <div class="portfolio_item-details">
                    <h3 class="details_title">To-Do-List App</h3>
                    <p class="details_description">A simple to-do-list app.</p>
                    <ul class="details_info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>Technologies - <span>html, css, javascript</span></li>
                        <li>Role - <span>Frontend</span></li>
                        <li>View - <span><a href="https://amanstodolist.netlify.app/">amanstodolist.netlify.app</a></span></li>
                    </ul>
                </div>
            </div>

        </div>

     </section>

     <!-- Portfolio Popup -->
      <div class="portfolio_popup">
        <div class="portfolio_popup-inner">
            <div class="portfolio_popup-content grid">
                <span class="portfolio_popup-close"><i class="uil uil-times"></i></span>
                <div class="pp_thumbnail">
                    <img src="assets/images/work_imgs/p1.png" alt="" class="portfolio_popup-img">
                </div>
                <div class="portfolio_popup-info">
                    <div class="portfolio_popup-subtitle">Featured - <span>Design</span></div>
                    <div class="portfolio_popup-body">
                            <h3 class="details_title">The services provide for design.</h3>
                            <p class="details_description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum est dolorem harum?</p>
                            <ul class="details_info">
                                <li>Created - <span>4 dec 2020</span></li>
                                <li>Technologies - <span>html, css</span></li>
                                <li>Role - <span>Frontend</span></li>
                                <li>View - <span><a href="#">www.domain.com</a></span></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
      </div>

    <!-- ---------------- Services ---------------- -->
     <section class="services section" id="services">
        <h2 data-heading="Services" class="section_title">What I Offer</h2>

        <div class="services_container container grid">

            <div class="services_content">
                <div>
                    <i class="uil uil-web-grid services_icon"></i>
                    <h3 class="services_title">Web <br> Designer</h3>
                </div>

                <span class="services_button">
                    View More <i class="uil uil-arrow-right services_button-icon"></i>
                </span>

                <div class="services_modal">
                    <div class="services_modal-content">
                        <i class="uil uil-times services_modal-close"></i>
                        <h3 class="services_modal-title">Web Designer</h3>
                        <!-- <p class="services_modal-description">Services with more than 3 years.</p> -->

                        <ul class="services_modal-services grid">
                            <li class="services_modal-service">
                                <i class="uil uil-check-circle services_modal-icon"></i>
                                <p class="services_modal-info">Frontend</p>
                            </li>
                            <li class="services_modal-service">
                                <i class="uil uil-check-circle services_modal-icon"></i>
                                <p class="services_modal-info">Backend</p>
                            </li>
                            <li class="services_modal-service">
                                <i class="uil uil-check-circle services_modal-icon"></i>
                                <p class="services_modal-info">Database</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- <div class="services_content">
                <div>
                    <i class="uil uil-arrow services_icon"></i>
                    <h3 class="services_title">UI/UX <br> Designer</h3>
                </div>

                <span class="services_button">
                    View More <i class="uil uil-arrow-right services_button-icon"></i>
                </span>

                <div class="services_modal">
                    <div class="services_modal-content">
                        <i class="uil uil-times services_modal-close"></i>
                        <h3 class="services_modal-title">UI/UX Designer</h3>
                        <p class="services_modal-description">Services with more than 3 years.</p>

                        <ul class="services_modal-services grid">
                            <li class="services_modal-service">
                                <i class="uil uil-check-circle services_modal-icon"></i>
                                <p class="services_modal-info">UI/UX Design</p>
                            </li>
                            <li class="services_modal-service">
                                <i class="uil uil-check-circle services_modal-icon"></i>
                                <p class="services_modal-info">Web Development</p>
                            </li>
                            <li class="services_modal-service">
                                <i class="uil uil-check-circle services_modal-icon"></i>
                                <p class="services_modal-info">App Development</p>
                            </li>
                            <li class="services_modal-service">
                                <i class="uil uil-check-circle services_modal-icon"></i>
                                <p class="services_modal-info">SEO Optimization</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div> -->

            <!-- <div class="services_content">
                <div>
                    <i class="uil uil-edit services_icon"></i>
                    <h3 class="services_title">Branding <br> Designer</h3>
                </div>

                <span class="services_button">
                    View More <i class="uil uil-arrow-right services_button-icon"></i>
                </span>

                <div class="services_modal">
                    <div class="services_modal-content">
                        <i class="uil uil-times services_modal-close"></i>
                        <h3 class="services_modal-title">Branding Designer</h3>
                        <p class="services_modal-description">Services with more than 3 years.</p>

                        <ul class="services_modal-services grid">
                            <li class="services_modal-service">
                                <i class="uil uil-check-circle services_modal-icon"></i>
                                <p class="services_modal-info">UI/UX Design</p>
                            </li>
                            <li class="services_modal-service">
                                <i class="uil uil-check-circle services_modal-icon"></i>
                                <p class="services_modal-info">Web Development</p>
                            </li>
                            <li class="services_modal-service">
                                <i class="uil uil-check-circle services_modal-icon"></i>
                                <p class="services_modal-info">App Development</p>
                            </li>
                            <li class="services_modal-service">
                                <i class="uil uil-check-circle services_modal-icon"></i>
                                <p class="services_modal-info">SEO Optimization</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div> -->

        </div>
     </section>

  <!-- ---------------- Testimonials ---------------- -->
     <!-- <section class="testimonial section">
        <h2 data-heading="My Clients Say" class="section_title">Testimonials</h2>

        <div class="testimonial_container container swiper">
            <div class="swiper-wrapper">

                <div class="testimonial_card swiper-slide">
                    <div class="testimonial_quote">
                        <i class='bx bxs-quote-alt-left'></i>
                    </div>
                    <p class="testimonial_description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. Quisquam, voluptates.
                    </p>
                    <h3 class="testimonial_date">March 27, 2020</h3>
                    <div class="testimonial_profile">
                        <img src="assets/images/client-1.webp" alt="" class="testimonial_profile-img">

                        <div class="testimonial_profile-data">
                            <span class="testimonial_profile-name">Lee Doe</span>
                            <span class="testimonial_profile-detail">Director of a company</span>
                        </div>
                    </div>
                </div>

                <div class="testimonial_card swiper-slide">
                    <div class="testimonial_quote">
                        <i class='bx bxs-quote-alt-left'></i>
                    </div>
                    <p class="testimonial_description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. Quisquam, voluptates.
                    </p>
                    <h3 class="testimonial_date">March 27, 2020</h3>
                    <div class="testimonial_profile">
                        <img src="assets/images/client-1.webp" alt="" class="testimonial_profile-img">

                        <div class="testimonial_profile-data">
                            <span class="testimonial_profile-name">Lee Doe</span>
                            <span class="testimonial_profile-detail">Director of a company</span>
                        </div>
                    </div>
                </div>

                <div class="testimonial_card swiper-slide">
                    <div class="testimonial_quote">
                        <i class='bx bxs-quote-alt-left'></i>
                    </div>
                    <p class="testimonial_description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. Quisquam, voluptates.
                    </p>
                    <h3 class="testimonial_date">March 27, 2020</h3>
                    <div class="testimonial_profile">
                        <img src="assets/images/client-1.webp" alt="" class="testimonial_profile-img">

                        <div class="testimonial_profile-data">
                            <span class="testimonial_profile-name">Lee Doe</span>
                            <span class="testimonial_profile-detail">Director of a company</span>
                        </div>
                    </div>
                </div>

            </div>
                <div class="swiper-pagination"></div>
        </div>

     </section> -->

    <!-- ---------------- Contact ---------------- -->
     <section class="contact section" id="contact">
        <h2 data-heading="Get in touch" class="section_title">Contact Me</h2>

        <div class="contact_container container grid">

            <div class="contact_content">
                    <div class="dark-theme badge-base LI-profile-badge linkedIn" data-locale="en_US" data-size="medium" data-theme="dark" data-type="VERTICAL" data-vanity="amansha-shaji-60769a269" data-version="v1"><a class="badge-base__link LI-simple-link" href="https://in.linkedin.com/in/amansha-shaji-60769a269?trk=profile-badge"></a>
                    </div>
                    <div class="light-theme badge-base LI-profile-badge linkedIn" data-locale="en_US" data-size="medium" data-theme="light" data-type="VERTICAL" data-vanity="amansha-shaji-60769a269" data-version="v1"><a class="badge-base__link LI-simple-link" href="https://in.linkedin.com/in/amansha-shaji-60769a269?trk=profile-badge"></a>
                    </div>
            </div>

            <div class="contact_content">
                <div class="contact_info">

                    <div class="contact_card">
                        <i class="uil uil-whatsapp contact_card-icon"></i>
                        <h3 class="contact_card-title">WhatsApp</h3>
                        <span class="contact_card-data">+91 97443 34927</span>
                        <a href="https://wa.me/+919744334927" class="contact_button">
                            Call Now <i class="uil uil-arrow-right contact_button-icon"></i>
                        </a>
                    </div>

                    <div class="contact_card">
                        <i class="uil uil-envelope-edit contact_card-icon"></i>
                        <h3 class="contact_card-title">Email</h3>
                        <span class="contact_card-data">aman.shah.26266@gmail.com</span>
                        <a href="mailto:aman.shah.26266@gmail.com" class="contact_button">
                            Write Me <i class="uil uil-arrow-right contact_button-icon"></i>
                        </a>
                    </div>

                    <div class="contact_card">
                        <i class="uil uil-linkedin-alt contact_card-icon"></i>
                        <h3 class="contact_card-title">LinkedIn</h3>
                        <span class="contact_card-data">Amansha Shaji</span>
                        <a href="https://www.linkedin.com/in/amansha-shaji-60769a269/" class="contact_button">
                            Reach Out <i class="uil uil-arrow-right contact_button-icon"></i>
                        </a>
                    </div>

                </div>
            </div>

            <div class="contact_content">
                <form action="" method="post" class="contact_form">
                    <div class="input_container">
                        <input type="text" class="input" id="username">
                        <label for="">Username</label>
                        <span>Username</span>
                    </div>
                    <div class="input_container">
                        <input type="email" class="input" id="email">
                        <label for="">Email</label>
                        <span>Email</span>
                    </div>
                    <div class="input_container">
                        <input type="tel" class="input" id="phone">
                        <label for="">Phone</label>
                        <span>Phone</span>
                    </div>
                    <div class="input_container textarea">
                        <textarea class="input" id="message"></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                    </div>
                    <button type="submit" class="button"><i class="uil uil-navigator button_icon"></i>Send Message</buttonhref=>
                </form>
            </div>

        </div>
     </section>

     <!-- ---------------------------------- FOOTER ---------------------------------- -->
      <footer class="footer">
        <div class="footer_bg">
            <div class="footer_container container grid">
                <div>
                    <h1 class="footer_title">Amansha Shaji</h1>
                    <span class="footer_subtitle">Frontend Developer</span>
                </div>

                <ul class="footer_links">
                    <li>
                        <a href="#services" class="footer_link">Services</a>
                    </li>
                    <li>
                        <a href="#work" class="footer_link">Work</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer_link">Contact</a>
                    </li>
                </ul>

                <div class="footer_socials">
                    <a href="#" class="footer_social"><i class="uil uil-facebook-f"></i></a>
                    <a href="#" class="footer_social"><i class="uil uil-linkedin-alt"></i></a>
                    <a href="#" class="footer_social"><i class="uil uil-instagram"></i></a>
                </div>

            </div>

                <p class="footer_copy">&#169; Amansha Shaji. All rights reserved.</p>
        </div>
      </footer>

</main>

<!-- ---------------------------------- SCROLL UP ---------------------------------- -->
    <div class="progress-wrap main-content" style="overflow: hidden;">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" stroke="#000" stroke-width="2" fill="none" />
        </svg>
	</div>



<!-- ---------------------------------- IONICONS ---------------------------------- -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!-- ---------------------------------- LinkedIn Profile for Contact ---------------------------------- -->
<script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>

<!-- ---------------------------------- MIXITUP FILTER ---------------------------------- -->
    <script>
        <?php
            include "assets/js/mixitup.min.js";
        ?>
    </script>
<!-- ---------------------------------- SWIPER JS ---------------------------------- -->
    <script>
        <?php
            include "assets/js/swiper-bundle.min.js";
        ?>
    </script>
<!-- ---------------------------------- MAIN JS ---------------------------------- -->
    <script>
        <?php
            include "assets/js/main.js";
        ?>
    </script>
</body>
</html>