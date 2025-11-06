<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Us — MKNR Corporation</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <?php include('../partials/header.php') ?>
        
        <main class="container contact-page">
            <h1>Contact Us</h1>
            <p>Reach out to us using any of the contacts below or send a message using the form.</p>


            <div class="contact-grid">
                <div class="contact-details">
                    <h3>MKNR Corporation</h3>
                    <p>1234 Ayala Avenue, Makati City, Philippines</p>
                    <p>Phone: (632) 876-54321</p>
                    <p>Email: info@mknr-website.com</p>
                </div>
                <div class="contact-form">
                    <form action="#" method="post" onsubmit="alert('This is a demo contact form. Replace action with server endpoint.'); return false;">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>


                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>


                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="6" required></textarea>


                        <button class="btn" type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </main>


        <footer class="site-footer">
            <div class="container footer-inner">
                <div class="footer-left">
                    <p>&copy; <span id="year3"></span> MKNR Corporation. All rights reserved.</p>
                </div>
            </div>
        </footer>


        <script>
            document.getElementById('year3').textContent = new Date().getFullYear();
            const toggle = document.querySelector('.nav-toggle');
            const nav = document.querySelector('.site-nav');
            toggle.addEventListener('click', ()=> nav.classList.toggle('open'));
        </script>
    </body>
</html>