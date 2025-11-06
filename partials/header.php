<?php $currentPage = basename($_SERVER['PHP_SELF']);?>
<header class="site-header">
    <div class="container header-inner">
        <a href="home.php" class="brand">
            <img src="../assets/logo.jpg" alt="MKNR Corporation Logo" class="logo">
            <span class="brand-name">MKNR Corporation</span>
        </a>
        <button class="nav-toggle" aria-label="toggle navigation">☰</button>
        <nav class="site-nav">
            <ul>
                <li><a href="home.php" class="<?= ($currentPage == 'home.php') ? 'active' : '' ?>">Home</a></li>
                <li><a href="about.php" class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>">About Us</a></li>
                <li><a href="contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>">Contact Us</a></li>
                <li><a href="plan_form.php" class="<?= ($currentPage == 'plan_form.php') ? 'active' : '' ?>">Plan Form</a></li>
            </ul>
        </nav>

    </div>
</header>
