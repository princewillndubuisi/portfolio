<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/particle.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div id="particles-js"></div> <!-- stats - count particles -->
    {{-- Header --}}
    <nav class="navbar active">
        <a href="#" class="logo">Princewill.</a>

        <i class='bx bx-menu' id="menu-icon"></i>
        <ul>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Resume</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <div class="bars-animation active">
        <div class="bar" style="--i:6;"></div>
        <div class="bar" style="--i:5;"></div>
        <div class="bar" style="--i:4;"></div>
        <div class="bar" style="--i:3;"></div>
        <div class="bar" style="--i:2;"></div>
        <div class="bar" style="--i:1;"></div>
    </div>


    {{-- Home section --}}
    <section class="home active">
        <div class="home-info">
            <h1>Princewill Chidi</h1>
            <h2>I'm a
                <span style="--i:4;" data-text="FullStack Developer">FullStack Developer</span>
                <span style="--i:3;" data-text="WordPress Coder">WordPress Coder</span>
                <span style="--i:2;" data-text="Designer">Designer</span>
                <span style="--i:1;" data-text="GOD Lover">GOD Lover</span>
            </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni perspiciatis accusamus asperiores corporis
                amet dicta, cupiditate consequatur molestias libero quidem odit quaerat aspernatur, facilis repudiandae
                hic officia quasi earum atque!
            </p>
            <div class="btn-ci">
                <a href="" class="btn">Download CV</a>
                <div class="sci">
                    <a href=""><i class='bx bxl-github'></i></a>
                    <a href=""><i class='bx bxl-linkedin' ></i></a>
                    <a href=""><i class='bx bxl-twitter' ></i></a>
                    <a href=""><i class='bx bxl-youtube' ></i></a>
                </div>
            </div>
        </div>

        <div class="home-img">
            <div class="img-box">
                <div class="img-item">
                    <img src="{{asset('images/home.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- Service section --}}
    <section class="service">
        <h2 class="heading">My <span>Services</span></h2>

        <div class="services-container">
            <div class="services-box">
                <div class="icon">
                    <i class='bx bx-code-alt' ></i>
                    <a href="#"><i class='bx bx-arrow-back' ></i></a>
                </div>
                <h3>Web Development</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium quos consectetur aspernatur odio </p>
            </div>

            <div class="services-box">
                <div class="icon">
                    <i class='bx bxs-paint'></i>
                    <a href="#"><i class='bx bx-arrow-back' ></i></a>
                </div>
                <h3>Designer</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium quos consectetur aspernatur odio </p>
            </div>

            <div class="services-box">
                <div class="icon">
                    <i class='bx bx-football' ></i>
                    <a href="#"><i class='bx bx-arrow-back' ></i></i></a>
                </div>
                <h3>GOD Lover</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium quos consectetur aspernatur odio </p>
            </div>
        </div>
    </section>

    {{-- Resume section --}}
    <section class="resume">
        <div class="resume-container">
            <div class="resume-box">
                <h2>Why Hire Me?</h2>
                <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolores sit dolor</p>
                <button class="resume-btn active">Experience</button>
                <button class="resume-btn">Education</button>
                <button class="resume-btn">Skills</button>
                <button class="resume-btn">About Me</button>
            </div>

            {{-- Experience --}}
            <div class="resume-box">
                <div class="resume-detail experience active">
                    <h2 class="heading">My <span>Experience</span></h2>
                    <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolores sit dolor</p>
                    <div class="resume-list">
                        <div class="resume-item">
                            <p class="year">2024 - Present</p>
                            <h3>Frontend Developer</h3>
                            <p class="company">Abc Corp.</p>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolores sit dolor</p>
                        </div>
                        <div class="resume-item">
                            <p class="year">2023 - 2024</p>
                            <h3>Full Stack Software Developer</h3>
                            <p class="company">Goggle</p>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolores sit dolor</p>
                        </div>
                    </div>
                </div>

                {{-- Education --}}
                <div class="resume-detail education">
                    <h2 class="heading">My <span>Education</span></h2>
                    <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolores sit dolor</p>
                    <div class="resume-list">
                        <div class="resume-item">
                            <p class="year">2024</p>
                            <h3>Wordpress</h3>
                            <p class="company">Online Course</p>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolores sit dolor</p>
                        </div>
                        <div class="resume-item">
                            <p class="year">2023 - 2024</p>
                            <h3>Certified Web Development</h3>
                            <p class="company">Schoolville</p>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolores sit dolor</p>
                        </div>
                        <div class="resume-item">
                            <p class="year">2022</p>
                            <h3>Certified Safety Enginnering</h3>
                            <p class="company">Uyo</p>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolores sit dolor</p>
                        </div>
                        <div class="resume-item">
                            <p class="year">2017 - 2022</p>
                            <h3>Bachelor Of Enginnering</h3>
                            <p class="company">Uyo</p>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolores sit dolor</p>
                        </div>

                    </div>
                </div>

                {{-- Skills --}}
                <div class="resume-detail skills">
                    <h2 class="heading">My <span>Skills</span></h2>
                    <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolores sit dolor</p>
                    <div class="resume-list">
                        <div class="resume-item">
                            <i class='bx bxl-html5' ></i>
                            <span>HTML5</span>
                        </div>
                        <div class="resume-item">
                            <i class='bx bxl-css3' ></i>
                            <span>CSS</span>
                        </div>
                        <div class="resume-item">
                            <i class='bx bxl-javascript' ></i>
                            <span>JavaScript</span>
                        </div>
                        <div class="resume-item">
                            <i class='bx bxl-bootstrap' ></i>
                            <span>Bootstrap Css</span>
                        </div>
                        <div class="resume-item">
                            <i class='bx bxl-tailwind-css' ></i>
                            <span>Tailwind Css</span>
                        </div>
                        <div class="resume-item">
                            <i class='bx bxl-postgresql' ></i>
                            <span>phpMySql</span>
                        </div>
                        <div class="resume-item">
                            <i class='bx bxl-php' ></i>
                            <span>PHP Laravel</span>
                        </div>
                        <div class="resume-item">
                            <i class='bx bxl-wordpress' ></i>
                            <span>WordPress</span>
                        </div>
                    </div>
                </div>

                {{-- About --}}
                <div class="resume-detail about">
                    <h2 class="heading">About <span>Me</span></h2>
                    <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolores sit dolor</p>
                    <div class="resume-list">
                        <div class="resume-item">
                            <p>Name <span>Princewill Chidi</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Gender <span>Male</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Age <span>24 Years Old</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Status <span>Single</span></p>
                        </div>
                        <div class="resume-item">
                            <p>City <span>Manchester United</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Nationality <span>Nigeria</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Experience <span> 1+ Years</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Full Time <span>Available</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Freelance <span>Available</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Phone <span>(+444) 233 876 001</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Email <span>p99@gmail.com</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Languages <span>English, French</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Portfolio section --}}
    <section class="portfolio">
        <h2 class="heading">Latest <span>Project</span></h2>
        <div class="portfolio-container">
            <div class="portfolio-box">
                <div class="portfolio-detail active">
                    <p class="num">01</p>
                    <h3>Full Stack Project</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium quos consectetur aspernatur odio </p>
                    <div class="tech">
                        <p>HTML5, bootstrap, PHPLaravel</p>
                    </div>
                    <div class="live-github">
                        <a href="#"><i class='bx bx-arrow-back' ></i><span>Live Project</span></a>
                        <a href="#"><i class='bx bxl-github' ></i><span>Github Repository</span></a>
                    </div>
                </div>

                <div class="portfolio-detail">
                    <p class="num">02</p>
                    <h3>Full Stack Project</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium quos consectetur aspernatur odio </p>
                    <div class="tech">
                        <p>HTML5, bootstrap, PHPLaravel, PHPMySqql</p>
                    </div>
                    <div class="live-github">
                        <a href="#"><i class='bx bx-arrow-back' ></i><span>Live Project</span></a>
                        <a href="#"><i class='bx bxl-github' ></i><span>Github Repository</span></a>
                    </div>
                </div>

                <div class="portfolio-detail">
                    <p class="num">03</p>
                    <h3>Wordpress</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium quos consectetur aspernatur odio </p>
                    <div class="tech">
                        <p>HTML5, CSS, PHPLaravel</p>
                    </div>
                    <div class="live-github">
                        <a href="#"><i class='bx bx-arrow-back' ></i><span>Live Project</span></a>
                        <a href="#"><i class='bx bxl-github' ></i><span>Github Repository</span></a>
                    </div>
                </div>

                <div class="portfolio-detail">
                    <p class="num">04</p>
                    <h3>Full Stack Project</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium quos consectetur aspernatur odio </p>
                    <div class="tech">
                        <p>HTML5, bootstrap, PHPLaravel, PHPMySql</p>
                    </div>
                    <div class="live-github">
                        <a href="#"><i class='bx bx-arrow-back' ></i><span>Live Project</span></a>
                        <a href="#"><i class='bx bxl-github' ></i><span>Github Repository</span></a>
                    </div>
                </div>
            </div>

            <div class="portfolio-box">
                <div class="portfolio-carousel">
                    <div class="img-slide">
                        <div class="img-item">
                            <img src="{{asset('images/portfolio2.jpg')}}" alt="">
                        </div>
                        <div class="img-item">
                            <img src="{{asset('images/portfolio4.jpg')}}" alt="">
                        </div>
                        <div class="img-item">
                            <img src="{{asset('images/portfolio5.jpg')}}" alt="">
                        </div>
                        <div class="img-item">
                            <img src="{{asset('images/portfolio6.jpg')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="navigation">
                    <button class="arrow-left disabled"><i class='bx bx-chevron-left' ></i></button>
                    <button class="arrow-right"><i class='bx bx-chevron-right' ></i></button>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact sectiom --}}
    <section class="contact">
        <div class="contact-container">
            <div class="contact-box">
                <h2>Let's Work Together</h2>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium quos consectetur aspernatur odio </p>
                <div class="contact-details">
                    <i class='bx bxs-phone'></i>
                    <div class="detail">
                        <p>Phone</p>
                        <p>(+444) 234 123 021</p>
                    </div>
                </div>

                <div class="contact-details">
                    <i class='bx bxs-envelope' ></i>
                    <div class="detail">
                        <p>Email</p>
                        <p>princewillchidi99@gmail.com</p>
                    </div>
                </div>

                <div class="contact-details">
                    <i class='bx bx-map' ></i>
                    <div class="detail">
                        <p>Address</p>
                        <p>111 Anywhere Street, Any City</p>
                    </div>
                </div>
            </div>

            <div class="contact-box">
                <form action="">
                    <h2 class="heading">Contact <span>Me!</span></h2>
                    <div class="field-box">
                        <input type="text" placeholder="Full Name" id="" required>
                        <input type="email" placeholder="Email Address" id="" required>
                        <input type="text" placeholder="Phone Number" id="" required>
                        <input type="text" placeholder="Email Subject" id="" required>
                        <textarea name="" id=""  placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

<script src="{{ asset('js/particles.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
