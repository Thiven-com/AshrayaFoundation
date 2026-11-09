</main>
<footer class="footer">
  <div class="container footer-grid">
    <div class="footer-about">
      <a class="footer-brand" href="index.php"><img src="assets/images/logo.png" alt="Ashraya Foundation"></a>
      <p>Ashraya is a caring home for senior citizens, built around dignity, compassion, healthcare and everyday support.</p>
      <div class="socials">
        <a href="#" aria-label="Facebook">f</a>
        <a href="#" aria-label="Instagram">ig</a>
        <a href="#" aria-label="YouTube">▶</a>
      </div>
    </div>
    <div>
      <h4>Quick Links</h4>
      <a href="index.php">Home</a><a href="about.php">About Us</a><a href="care.php">Our Care</a>
      <a href="gallery.php">Gallery</a><a href="donation.php">Donation</a><a href="contact.php">Contact</a>
    </div>
    <div>
      <h4>Our Work</h4>
      <a href="care.php#senior citizens">Senior Citizenren Care</a>
      <a href="care.php#elders">Elder Care</a>
      <a href="care.php#food">Food & Daily Needs</a>
      <a href="care.php#health">Health & Well-being</a>
      <a href="care.php#healthcare">Healthcare</a>
    </div>
    <div>
      <h4>Reach Us</h4>
      <p><?= e($site['address']) ?></p>
      <a href="tel:<?= e($site['phone']) ?>"><?= e($site['phone']) ?></a>
      <a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a>
      <a href="https://wa.me/<?= e($site['whatsapp']) ?>" target="_blank" rel="noopener">WhatsApp Us</a>
    </div>
  </div>
  <div class="container footer-bottom">
    <span>© <?= date('Y') ?> Ashraya Foundation. All rights reserved.</span>
    <span><?= e($site['tagline']) ?></span>
  </div>
</footer>
<a class="floating-whatsapp" href="https://wa.me/<?= e($site['whatsapp']) ?>" target="_blank" rel="noopener" aria-label="WhatsApp">✆</a>
<script src="assets/js/main.js"></script>
</body>
</html>