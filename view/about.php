<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About Us — MKNR Corporation</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header class="site-header">
            <div class="container header-inner">
                <a href="index.html" class="brand">
                    <img src="assets/logo.jpg" alt="MKNR Corporation Logo" class="logo">
                    <span class="brand-name">MKNR Corporation</span>
                </a>
                <button class="nav-toggle" aria-label="toggle navigation">☰</button>
                <nav class="site-nav">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html" class="active">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="plan_form.html">Plan Form</a></li>
                    </ul>
                </nav>
            </div>
        </header>


        <main class="container">
            <section class="about-hero">
                <h1>About MKNR Corporation</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. We are an IT consultancy based in Makati City delivering strategy, design, and marketing solutions.</p>
            </section>

            <section class="team">
                <h2>Our Approach</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                <ul>
                <li>Client-focused engagement</li>
                <li>Data-driven strategy</li>
                <li>Creative and technical excellence</li>
                </ul>
            </section>
        </main>


        <footer class="site-footer">
            <div class="container footer-inner">
                <div class="footer-left">
                    <p>&copy; <span id="year2"></span> MKNR Corporation. All rights reserved.</p>
                </div>
                <div class="footer-right">
                    <p>1234 Ayala Avenue, Makati City</p>
                </div>
            </div>
        </footer>


        <script>
            document.getElementById('year2').textContent = new Date().getFullYear();
            const toggle = document.querySelector('.nav-toggle');
            const nav = document.querySelector('.site-nav');
            toggle.addEventListener('click', ()=> nav.classList.toggle('open'));
        </script>
    </body>
</html>