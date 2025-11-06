<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MKNR Corporation — IT Consultancy</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <!-- <body onload="welcomeMessage()"> -->
    <body>
        <?php include('../partials/header.php') ?>

        <main>
            <section class="hero">
                <div class="container hero-inner">
                    <div class="hero-copy">
                        <h1>Strategy. Design. Online Growth.</h1>
                        <p>We help businesses transform digitally through strategy, creative design, and online marketing.</p>
                        <a href="contact.php" class="btn">Get in touch</a>
                    </div>
                    <div class="slideshow">
                        <img src="../assets/hero.jpg" alt="IT consultancy illustration"class="slide active">
                        <img src="../assets/service1.jpg" class="slide">
                        <img src="../assets/service2.jpg" class="slide">
                        <img src="../assets/service3.jpg" class="slide">
                    </div>
                </div>
            </section>


            <section class="intro container">
                <h2>Welcome to MKNR Corporation</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
            </section>


            <section class="services container">
                <h3>Our Services</h3>
                <div class="service-grid">
                    <article class="service">
                        <img src="../assets/service1.jpg" alt="Strategy and Consulting"class="product-img" data-hover="assets/red1.png">
                        <h4>Strategy &amp; Consulting</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Short description of the service.</p>
                        <button class="buy-btn">BUY</button>
                    </article>
                    <article class="service">
                        <img src="../assets/service2.jpg" alt="Creative Design"class="product-img" data-hover="assets/red2.png">
                        <h4>Creative Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Short description of the service.</p>
                        <button class="buy-btn">BUY</button>
                    </article>
                        <article class="service">
                        <img src="../assets/service3.jpg" alt="Online Marketing"class="product-img" data-hover="assets/red3.png">
                        <h4>Online Marketing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Short description of the service.</p>
                        <button class="buy-btn">BUY</button>
                    </article>
                    </article>
                        <article class="service">
                        <img src="../assets/service4.jpg" alt="Web Development"class="product-img" data-hover="assets/red4.png">
                        <h4>Web Development</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Short description of the service.</p>
                        <button class="buy-btn">BUY</button>
                    </article>
                    </article>
                        <article class="service">
                        <img src="../assets/service5.jpg" alt="Web Design"class="product-img" data-hover="assets/red5.png">
                        <h4>Web Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Short description of the service.</p>
                        <button class="buy-btn">BUY</button>
                    </article>
                    </article>
                        <article class="service">
                        <img src="../assets/service6.jpg" alt="Graphics Design"class="product-img" data-hover="assets/red6.png">
                        <h4>Graphics Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Short description of the service.</p>
                        <button class="buy-btn">BUY</button>
                    </article>
                </div>
            </section>


            <section class="contact-cta">
                <div class="container">
                    <p>Ready to start your project? <a href="contact.php">Contact us</a> or fill up the <a href="plan_form.php">Design Plan Form</a>.</p>
                </div>
            </section>
        </main>
        <footer class="site-footer">
            <div class="container footer-inner">
                <div class="footer-left">
                    <p>&copy; <span id="year"></span> MKNR Corporation. All rights reserved.</p>
                    <p>1234 Ayala Avenue, Makati City, Philippines | Tel: (632) 876-54321 | info@mknr-website.com</p>
                </div>
                <div class="footer-right">
                    <p>Disclaimer: This website is a project sample using dummy content.</p>
                </div>
            </div>
        </footer>

        <script>
            document.getElementById('year').textContent = new Date().getFullYear();
            const toggle = document.querySelector('.nav-toggle');
            const nav = document.querySelector('.site-nav');
            toggle.addEventListener('click', ()=> nav.classList.toggle('active'));
        </script>
        <script src="../js/scripts.js"></script>
    </body>
</html>