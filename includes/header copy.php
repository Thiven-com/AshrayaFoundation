<?php require_once __DIR__ . '/../config.php'; ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="<?= e($site['title']) ?> — a caring home for senior citizens.">
<title><?= e($pageTitle ?? $site['name']) ?> | <?= e($site['name']) ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="topbar">
  <div class="container topbar-inner">
    <span>❤️ Every life deserves care, dignity and a safe home.</span>
    <a href="donation.php">Support Ashraya <b>→</b></a>
  </div>
</div>

<header class="header" id="header">
  <div class="container nav">
    <a class="brand" href="index.php">
      <img src="assets/images/logo.png" alt="Ashraya Foundation">
    </a>
    <button class="menu-btn" type="button" aria-label="Open menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
    <nav class="menu">
      <a class="<?= ($activePage ?? '') === 'home' ? 'active' : '' ?>" href="index.php">Home</a>
      <a class="<?= ($activePage ?? '') === 'about' ? 'active' : '' ?>" href="about.php">About Us</a>
      <a class="<?= ($activePage ?? '') === 'care' ? 'active' : '' ?>" href="care.php">Our Care</a>
      <a class="<?= ($activePage ?? '') === 'gallery' ? 'active' : '' ?>" href="gallery.php">Gallery</a>
      <a class="<?= ($activePage ?? '') === 'donation' ? 'active' : '' ?>" href="donation.php">Donation</a>
      <a class="<?= ($activePage ?? '') === 'contact' ? 'active' : '' ?>" href="contact.php">Contact</a>
      <a class="nav-donate" href="donation.php">Donate Now <span>↗</span></a>
    </nav>
  </div>
</header>
<main>




<?php require_once __DIR__ . '/../config.php'; ?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

<meta name="description"
      content="Ashraya Foundation provides children with a safe, loving home, education, care and opportunities for a brighter future.">

<title>
    <?= e($pageTitle ?? $site['name']) ?> | <?= e($site['name']) ?>
</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>


<style>
  
/* =========================================
   ASHRAYA FOUNDATION
   CHILDREN'S HOME BRAND THEME
========================================= */

/* TOPBAR */

.topbar {
    background: linear-gradient(
        90deg,
        #0B4EA2 0%,
        #1677E8 60%,
        #FF7900 100%
    );
    color: #FFFFFF;
    font-size: 12px;
}

.topbar-inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    padding: 10px 0;
}

.topbar span {
    color: #FFFFFF;
    font-weight: 600;
}

.topbar a {
    color: #FFFFFF;
    font-weight: 700;
    white-space: nowrap;
    transition: .3s ease;
}

.topbar a:hover {
    color: #FFE0C2;
}

.topbar a b {
    margin-left: 5px;
}


/* MAIN HEADER */

.header {
    height: 100px;
    position: sticky;
    top: 0;
    background: rgba(255,255,255,.97);
    backdrop-filter: blur(15px);
    z-index: 100;
    border-bottom: 1px solid #E2E9EF;
    box-shadow: 0 5px 25px rgba(11,78,162,.07);
}

.header:after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(
        90deg,
        #1677E8,
        #FF7900,
        #39A935
    );
}


/* NAVIGATION CONTAINER */

.nav {
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 25px;
}


/* LOGO */

.brand {
    display: flex;
    align-items: center;
    flex-shrink: 0;
}

.brand img {
    width: 245px;
    height: 85px;
    object-fit: contain;
    transition: .3s ease;
}

.brand:hover img {
    transform: scale(1.025);
}


/* MENU */

.menu {
    display: flex;
    align-items: center;
    gap: 24px;
    font-size: 13px;
    font-weight: 700;
}

.menu > a:not(.nav-donate) {
    padding: 35px 0;
    position: relative;
    color: #252525;
    transition: .3s ease;
}

.menu > a:not(.nav-donate):after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 25px;
    width: 0;
    height: 3px;
    border-radius: 20px;
    background: linear-gradient(
        90deg,
        #1677E8,
        #FF7900
    );
    transition: .3s ease;
}

.menu > a.active,
.menu > a:not(.nav-donate):hover {
    color: #0B4EA2;
}

.menu > a.active:after,
.menu > a:not(.nav-donate):hover:after {
    width: 100%;
}


/* DONATE BUTTON */

.nav-donate {
    background: linear-gradient(
        120deg,
        #1677E8,
        #FF7900
    );
    color: #FFFFFF;
    padding: 13px 20px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 800;
    box-shadow: 0 8px 20px rgba(22,119,232,.20);
    transition: .3s ease;
    white-space: nowrap;
}

.nav-donate:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 25px rgba(255,121,0,.20);
}

.nav-donate span {
    margin-left: 5px;
}


/* MOBILE MENU BUTTON */

.menu-btn {
    display: none;
    background: #EAF3FF;
    border: none;
    width: 43px;
    height: 43px;
    border-radius: 12px;
    cursor: pointer;
}

.menu-btn span {
    display: block;
    height: 2px;
    width: 21px;
    background: #1677E8;
    margin: 5px auto;
    border-radius: 5px;
}


/* TABLET RESPONSIVE */

@media(max-width: 1050px) {

    .menu {
        gap: 15px;
        font-size: 12px;
    }

    .brand img {
        width: 205px;
    }

    .nav-donate {
        padding: 12px 14px;
    }
}


/* MOBILE RESPONSIVE */

@media(max-width: 900px) {

    .header {
        height: 85px;
    }

    .brand img {
        width: 205px;
        height: 72px;
    }

    .menu-btn {
        display: block;
    }

    .menu {
        position: absolute;
        top: 85px;
        left: 4%;
        right: 4%;
        background: #FFFFFF;
        padding: 18px;
        border-radius: 18px;
        box-shadow: 0 15px 45px rgba(11,78,162,.15);
        border: 1px solid #E2E9EF;
        display: none;
        flex-direction: column;
        align-items: stretch;
        gap: 5px;
    }

    .menu.open {
        display: flex;
    }

    .menu > a:not(.nav-donate) {
        padding: 12px;
    }

    .menu > a:not(.nav-donate):after {
        bottom: 4px;
        left: 12px;
    }

    .nav-donate {
        text-align: center;
        margin-top: 8px;
    }
}


/* SMALL MOBILE */

@media(max-width: 560px) {

    .topbar {
        font-size: 10px;
    }

    .topbar-inner {
        gap: 8px;
        padding: 8px 0;
    }

    .topbar-inner span {
        max-width: 68%;
        line-height: 1.4;
    }

    .topbar-inner a {
        white-space: nowrap;
        font-size: 10px;
    }

    .header {
        height: 78px;
    }

    .brand img {
        width: 180px;
        height: 65px;
    }

    .menu {
        top: 78px;
    }
}

</style>

<!-- TOPBAR -->
<div class="topbar">
    <div class="container topbar-inner">

        <span>
            ❤️ Every child deserves love, care and a brighter future.
        </span>

        <a href="donation.php">
            Support Our Children <b>→</b>
        </a>

    </div>
</div>


<!-- HEADER -->
<header class="header" id="header">

    <div class="container nav">

        <!-- LOGO -->
        <a class="brand" href="index.php">
            <img src="assets/images/logo.png"
                 alt="Ashraya Foundation - Children's Home">
        </a>


        <!-- MOBILE MENU -->
        <button class="menu-btn"
                type="button"
                aria-label="Open menu"
                aria-expanded="false">

            <span></span>
            <span></span>
            <span></span>

        </button>


        <!-- NAVIGATION -->
        <nav class="menu">

            <a class="<?= ($activePage ?? '') === 'home' ? 'active' : '' ?>"
               href="index.php">
                Home
            </a>

            <a class="<?= ($activePage ?? '') === 'about' ? 'active' : '' ?>"
               href="about.php">
                About Us
            </a>

            <a class="<?= ($activePage ?? '') === 'care' ? 'active' : '' ?>"
               href="care.php">
                Children's Care
            </a>

            <a class="<?= ($activePage ?? '') === 'gallery' ? 'active' : '' ?>"
               href="gallery.php">
                Our Activities
            </a>

            <a class="<?= ($activePage ?? '') === 'donation' ? 'active' : '' ?>"
               href="donation.php">
                Support Us
            </a>

            <a class="<?= ($activePage ?? '') === 'contact' ? 'active' : '' ?>"
               href="contact.php">
                Contact Us
            </a>

            <a class="nav-donate" href="donation.php">
                Donate to Children <span>↗</span>
            </a>

        </nav>

    </div>

</header>

<main>
