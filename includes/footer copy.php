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



</main>

<style>

  
/* =========================================
   ASHRAYA FOUNDATION - FOOTER
   CHILDREN'S HOME THEME
========================================= */

.footer {
    position: relative;
    background: #102B46;
    color: #EAF3FF;
    padding: 75px 0 0;
    overflow: hidden;
}

/* Top Gradient Border */

.footer:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(
        90deg,
        var(--blue),
        var(--orange),
        var(--green)
    );
}


/* Footer Layout */

.footer-grid {
    display: grid;
    grid-template-columns: 1.5fr 1fr 1.2fr 1.2fr;
    gap: 45px;
    padding-bottom: 55px;
}


/* Foundation Logo */

.footer-brand {
    display: inline-block;
    margin-bottom: 22px;
}

.footer-brand img {
    width: 230px;
    height: auto;
    object-fit: contain;
    background: #FFFFFF;
    padding: 9px;
    border-radius: 12px;
}


/* About Text */

.footer-about p {
    color: #C2D2E2;
    font-size: 13px;
    line-height: 1.9;
    max-width: 340px;
}


/* Footer Headings */

.footer h4 {
    color: #FFFFFF;
    font-family: "Playfair Display", serif;
    font-size: 19px;
    font-weight: 700;
    margin-bottom: 25px;
    position: relative;
    padding-bottom: 12px;
}

.footer h4:after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 42px;
    height: 3px;
    border-radius: 10px;
    background: linear-gradient(
        90deg,
        var(--blue),
        var(--orange)
    );
}


/* Footer Links */

.footer-links {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.footer-links a {
    color: #C2D2E2;
    font-size: 13px;
    margin-bottom: 12px;
    transition: .3s ease;
}

.footer-links a:hover {
    color: var(--orange);
    padding-left: 5px;
}


/* Contact Details */

.footer-contact {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.footer-contact p,
.footer-contact > a:not(.footer-support) {
    color: #C2D2E2;
    font-size: 13px;
    line-height: 1.8;
    margin-bottom: 13px;
    overflow-wrap: anywhere;
}

.footer-contact p span,
.footer-contact > a span {
    color: var(--orange);
    margin-right: 8px;
}

.footer-contact a:hover {
    color: var(--orange);
}


/* Footer Support Button */

.footer-support {
    display: inline-block;
    margin-top: 10px;
    background: linear-gradient(
        110deg,
        var(--blue),
        var(--orange)
    );
    color: #FFFFFF;
    padding: 12px 18px;
    border-radius: 30px;
    font-size: 12px;
    font-weight: 700;
    transition: .3s ease;
}

.footer-support:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(255,121,0,.2);
}


/* Social Media */

.socials {
    display: flex;
    gap: 12px;
    margin-top: 25px;
}

.socials a {
    width: 38px;
    height: 38px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px solid rgba(255,255,255,.2);
    border-radius: 50%;
    color: #FFFFFF;
    font-size: 13px;
    font-weight: 700;
    transition: .3s ease;
}

.socials a:hover {
    background: var(--orange);
    border-color: var(--orange);
    transform: translateY(-4px);
}


/* Footer Bottom */

.footer-bottom {
    min-height: 75px;
    border-top: 1px solid rgba(255,255,255,.14);
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    color: #B8CBE0;
    font-size: 12px;
}


/* Floating WhatsApp */

.floating-whatsapp {
    position: fixed;
    bottom: 25px;
    right: 25px;
    z-index: 999;
    width: 55px;
    height: 55px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #25D366;
    color: #FFFFFF;
    font-size: 27px;
    box-shadow: 0 8px 25px rgba(0,0,0,.2);
    transition: .3s ease;
}

.floating-whatsapp:hover {
    transform: scale(1.1);
}


/* TABLET */

@media(max-width: 1000px) {

    .footer-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 40px;
    }

}


/* MOBILE */

@media(max-width: 600px) {

    .footer {
        padding-top: 50px;
    }

    .footer-grid {
        grid-template-columns: 1fr;
        gap: 35px;
        padding-bottom: 35px;
    }

    .footer-brand img {
        width: 210px;
    }

    .footer h4 {
        font-size: 18px;
        margin-bottom: 20px;
    }

    .footer-bottom {
        flex-direction: column;
        justify-content: center;
        text-align: center;
        padding: 20px 0;
        line-height: 1.8;
    }

    .floating-whatsapp {
        width: 48px;
        height: 48px;
        bottom: 18px;
        right: 18px;
        font-size: 24px;
    }

}

</style>

<!-- FOOTER -->
<footer class="footer">

    <div class="container footer-grid">

        <!-- ABOUT FOUNDATION -->
        <div class="footer-about">

            <a class="footer-brand" href="index.php">
                <img src="assets/images/logo.png"
                     alt="Ashraya Foundation">
            </a>

            <p>
                Ashraya Foundation is a loving home for children,
                committed to providing shelter, education, nutrition,
                protection and a brighter future through care and compassion.
            </p>

            <div class="socials">
                <a href="#" aria-label="Facebook">f</a>
                <a href="#" aria-label="Instagram">ig</a>
                <a href="#" aria-label="YouTube">▶</a>
            </div>

        </div>


        <!-- QUICK LINKS -->
        <div class="footer-links">

            <h4>Quick Links</h4>

            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="care.php">Children's Care</a>
            <a href="gallery.php">Our Activities</a>
            <a href="donation.php">Support Us</a>
            <a href="contact.php">Contact Us</a>

        </div>


        <!-- OUR WORK -->
        <div class="footer-links">

            <h4>What We Provide</h4>

            <a href="care.php#shelter">Safe Shelter</a>
            <a href="care.php#education">Education & Learning</a>
            <a href="care.php#food">Food & Nutrition</a>
            <a href="care.php#health">Health & Well-being</a>
            <a href="care.php#activities">Sports & Activities</a>
            <a href="care.php#development">Child Development</a>

        </div>


        <!-- CONTACT DETAILS -->
        <div class="footer-contact">

            <h4>Reach Us</h4>

            <p>
                <span>📍</span>
                <?= e($site['address']) ?>
            </p>

            <a href="tel:<?= e($site['phone']) ?>">
                <span>☎</span>
                <?= e($site['phone']) ?>
            </a>

            <a href="mailto:<?= e($site['email']) ?>">
                <span>✉</span>
                <?= e($site['email']) ?>
            </a>

            <a href="https://wa.me/<?= e($site['whatsapp']) ?>"
               target="_blank"
               rel="noopener">
                <span>💬</span>
                WhatsApp Us
            </a>

            <a class="footer-support" href="donation.php">
                Support Our Children →
            </a>

        </div>

    </div>


    <!-- FOOTER BOTTOM -->
    <div class="container footer-bottom">

        <span>
            © <?= date('Y') ?> Ashraya Foundation.
            All rights reserved.
        </span>

        <span>
            <?= e($site['tagline']) ?>
        </span>

    </div>

</footer>


<!-- FLOATING WHATSAPP -->
<a class="floating-whatsapp"
   href="https://wa.me/<?= e($site['whatsapp']) ?>"
   target="_blank"
   rel="noopener"
   aria-label="WhatsApp">

    ✆

</a>


<script src="assets/js/main.js"></script>

</body>
</html>
