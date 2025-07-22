<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="fixed-css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lexend+Deca:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <header>
        <nav class="navbar">
            <div class="judulnav">zydan<span>zain</span></div>
            <ul class="menu">
                <li><a href="#home">home</a></li>
                <li><a href="#skills">skills</a></li>
                <li><a href="#achievement">achievement</a></li>
                <li><a href="#project">project</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
            <div class="burger" onclick="toggleMenu()">☰</div>
        </nav>
    </header>

    <section id="home">
        <div class="kontainer-home">
            <div class="home-kiri" data-aos="fade-right" data-aos-delay="200">
                <h1> ZYDAN <span> ZAIN </span> </h1>
                <p>I'm a student at SMKN 1 Surabaya majoring in software engineering. As a student, I have a hobby in music as a guitarist and I am also a web designer and front-end developer.</p>
                <ul class="button-home">
                    <li><a href="">whatssapp</a></li>
                    <li><a href="">instagram</a></li>
                    <li><a href="">email</a></li>
                </ul>
            </div>
            <div class="home-kanan" data-aos="fade-left" data-aos-delay="200">
                <img src="fotoku.jpg" alt="" width="350px">
            </div>
        </div>
    </section>

    <section id="skills">
        <div class="judul-skills" data-aos="fade-down" data-aos-delay="200">my<span>skills</span></div>
        <div class="isi-skills">
            <div class="skills-kiri" data-aos="fade-right" data-aos-delay="200"><img src="Desain tanpa judul (9).png" alt="" width="370px"></div>
            <div class="skills-kanan" data-aos="fade-left" data-aos-delay="200">
                <div class="kontainer-skills">
                    <div class="element"><img src="Desain tanpa judul (7).png" alt="" width="40px"></div>
                    <div class="deskripsi">
                        <h3>front-end developer</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita error nulla sunt odit modi earum totam cumque maxime quod quo.</p>
                    </div>
                </div>
                <div class="kontainer-skills">
                    <div class="element"><img src="Desain tanpa judul (6).png" alt="" width="40px"></div>
                    <div class="deskripsi">
                        <h3>ui\ux designer</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita error nulla sunt odit modi earum totam cumque maxime quod quo.</p>
                    </div>
                </div>
                <div class="kontainer-skills">
                    <div class="element"><img src="Desain tanpa judul (8).png" alt="" width="40px"></div>
                    <div class="deskripsi">
                        <h3>session player</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita error nulla sunt odit modi earum totam cumque maxime quod quo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="achievement">
        <div class="judul-achievement" data-aos="fade-down" data-aos-delay="200">my <span>achievement</span></div>
        <div class="grid-achievement">
            <div class="achievement-item" data-aos="fade-up" data-aos-delay="200">
                <img src="ppppp.jpg" alt="" width="300px">
                <div class="achievement-overlay">
                    <h3>Achievement Title 1</h3>
                    <p>Description of your first achievement goes here.</p>
                </div>
            </div>

            <div class="achievement-item" data-aos="fade-up" data-aos-delay="200">
                <img src="ppppp.jpg" alt="" width="300px">
                <div class="achievement-overlay">
                    <h3>Achievement Title 2</h3>
                    <p>Description of your second achievement goes here.</p>
                </div>
            </div>

            <div class="achievement-item" data-aos="fade-up" data-aos-delay="200">
                <img src="ppppp.jpg" alt="" width="300px">
                <div class="achievement-overlay">
                    <h3>Achievement Title 3</h3>
                    <p>Description of your third achievement goes here.</p>
                </div>
            </div>

            <div class="achievement-item" data-aos="fade-up" data-aos-delay="200">
                <img src="ppppp.jpg" alt="" width="300px">
                <div class="achievement-overlay">
                    <h3>Achievement Title 4</h3>
                    <p>Description of your fourth achievement goes here.</p>
                </div>
            </div>

            <div class="achievement-item" data-aos="fade-up" data-aos-delay="200">
                <img src="ppppp.jpg" alt="" width="300px">
                <div class="achievement-overlay">
                    <h3>Achievement Title 5</h3>
                    <p>Description of your fifth achievement goes here.</p>
                </div>
            </div>

            <div class="achievement-item" data-aos="fade-up" data-aos-delay="200">
                <img src="ppppp.jpg" alt="" width="300px">
                <div class="achievement-overlay">
                    <h3>Achievement Title 6</h3>
                    <p>Description of your sixth achievement goes here.</p>
                </div>
            </div>
        </div>
    </section>


    <section id="project">
        <div class="judul-project" data-aos="fade-down" data-aos-delay="200">my<span>project</span></div>
        <div class="project-grid">
            <!-- Project 1 -->
            <div class="project-box" data-aos="fade-up" data-aos-delay="200">
                <img src="/api/placeholder/400/320" alt="Project 1">
                <div class="project-overlay">
                    <h3>Website Design</h3>
                    <p>A responsive website for a local business using HTML, CSS, and JavaScript.</p>
                    <a href="#" class="project-link">View Project</a>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-box" data-aos="fade-up" data-aos-delay="200">
                <img src="/api/placeholder/400/320" alt="Project 2">
                <div class="project-overlay">
                    <h3>Mobile App UI</h3>
                    <p>UI/UX design for a fitness tracking mobile application.</p>
                    <a href="#" class="project-link">View Project</a>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-box" data-aos="fade-up" data-aos-delay="200">
                <img src="/api/placeholder/400/320" alt="Project 3">
                <div class="project-overlay">
                    <h3>E-commerce Platform</h3>
                    <p>Front-end development for an online shopping website.</p>
                    <a href="#" class="project-link">View Project</a>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="project-box" data-aos="fade-up" data-aos-delay="200">
                <img src="/api/placeholder/400/320" alt="Project 4">
                <div class="project-overlay">
                    <h3>Portfolio Template</h3>
                    <p>Customizable portfolio template for creative professionals.</p>
                    <a href="#" class="project-link">View Project</a>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="project-box" data-aos="fade-up" data-aos-delay="200">
                <img src="/api/placeholder/400/320" alt="Project 5">
                <div class="project-overlay">
                    <h3>Music App Interface</h3>
                    <p>Interactive UI design for a music streaming application.</p>
                    <a href="#" class="project-link">View Project</a>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="project-box" data-aos="fade-up" data-aos-delay="200">
                <img src="/api/placeholder/400/320" alt="Project 6">
                <div class="project-overlay">
                    <h3>Blog Theme</h3>
                    <p>Clean and modern blog theme with dark mode support.</p>
                    <a href="#" class="project-link">View Project</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2 class="judul-contact" data-aos="fade-down" data-aos-delay="200">Contact <span>Me</span></h2>

        <div class="contact-container">
            <div class="contact-left" data-aos="fade-right" data-aos-delay="400">
                <h3 class="section-title">Let's <span>Connect</span></h3>

                <div class="contact-info">
                    <div class="contact-info-item">
                        <i class="fas fa-envelope"></i>
                        <span>renoalifrasetyо20@gmail.com</span>
                    </div>

                    <div class="contact-info-item">
                        <i class="fas fa-phone"></i>
                        <span>+62 881 0267 55050</span>
                    </div>

                    <div class="contact-info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Surabaya, Indonesia</span>
                    </div>
                </div>

                <h3 class="section-title">Follow <span>Me</span></h3>

                <div class="social-icons">
                    <a href="mailto:renoalifrasety020@gmail.com" class="social-icon">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <a href="https://wa.me/6288102675050" class="social-icon">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="https://www.instagram.com/" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <div class="contact-right" data-aos="fade-left" data-aos-delay="200">
                <form action="simpan.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nama" placeholder="Your Name" required>
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="subject" placeholder="Subject" required>
                    </div>

                    <div class="form-group">
                        <textarea name="pesan" placeholder="Your Message" required></textarea>
                    </div>

                    <button type="submit" class="send-btn">Send Message</button>
                </form>

            </div>
        </div>
    </section>



    <script>
        function toggleMenu() {
            const menu = document.querySelector('.menu');
            menu.classList.toggle('active');
        }
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>



</body>

</html>