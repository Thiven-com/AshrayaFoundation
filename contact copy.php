<?php
$pageTitle = 'Contact'; $activePage = 'contact';
$sent = $_SERVER['REQUEST_METHOD'] === 'POST';
require 'includes/header.php';
?>
<section class="page-hero"><div class="container reveal"><span class="eyebrow light">CONTACT US</span><h1>We are here to <em>listen.</em></h1><p>For visits, donations, volunteering or enquiries about our senior citizens and senior citizen care, please contact Ashraya.</p></div></section>
<section class="section"><div class="container contact-grid">
  <div class="contact-info reveal"><span class="eyebrow">GET IN TOUCH</span><h2>Connect with the Ashraya Home</h2>
    <div class="contact-row"><i>⌂</i><div><small>Address</small><strong><?= e($site['address']) ?></strong></div></div>
    <div class="contact-row"><i>☎</i><div><small>Phone</small><strong><a href="tel:<?= e($site['phone']) ?>"><?= e($site['phone']) ?></a></strong></div></div>
    <div class="contact-row"><i>✉</i><div><small>Email</small><strong><a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a></strong></div></div>
    <a class="map-card" target="_blank" rel="noopener" href="https://www.google.com/maps/search/?api=1&query=Ashraya+Oldage+Home+%26+Old Age Home+Home+Katiganikalva">Open Location in Google Maps ↗</a>
  </div>
  <div class="form-card reveal delay-1">
    <?php if($sent): ?><div class="success">✓ Thank you. Your message has been received.</div><?php endif; ?>
    <span class="eyebrow">SEND A MESSAGE</span><h2>How can we help our senior citizens?</h2>
    <form method="post" action="contact.php">
      <div class="form-row"><label>Name<input name="name" required placeholder="Your name"></label><label>Phone<input name="phone" placeholder="+91"></label></div>
      <label>Email<input type="email" name="email" required placeholder="you@example.com"></label>
      <label>Subject<select name="subject"><option>General Enquiry</option><option>Donation</option><option>Volunteer</option><option>Visit</option><option>Partnership</option></select></label>
      <label>Message<textarea name="message" required rows="5" placeholder="Write your message..."></textarea></label>
      <button class="btn primary full" type="submit">Send Message <span>↗</span></button>
    </form>
  </div>
</div></section>
<section class="map-section"><div class="container"><div class="map-placeholder"><div><span>📍</span><h3>Ashraya Oldage Home</h3><p>Katiganikalva, Andhra Pradesh 515722</p><a class="btn white" target="_blank" rel="noopener" href="https://www.google.com/maps/search/?api=1&query=Ashraya+Oldage+Home+%26+Old Age Home+Home+Katiganikalva">Get Directions ↗</a></div></div></div></section>
<?php require 'includes/footer.php'; ?>