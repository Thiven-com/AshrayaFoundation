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