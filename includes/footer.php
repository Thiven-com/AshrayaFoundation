

</main>

<style>
  
/* =========================================
   ASHRAYA FOUNDATION
   FOOTER - CHILDREN'S HOME THEME
   TWO-SHADE BLUE DESIGN
========================================= */


/* =========================================
   MAIN FOOTER
========================================= */

.footer {
    position: relative;
    background: #102B46;
    color: #EAF3FF;
    padding: 75px 0 0;
    overflow: hidden;
}


/* Top Blue Gradient Border */

.footer:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;

    background: linear-gradient(
        90deg,
        #0B4EA2 0%,
        #1677E8 100%
    );
}


/* =========================================
   FOOTER GRID LAYOUT
========================================= */

.footer-grid {
    display: grid;

    grid-template-columns:
        1.5fr
        1fr
        1.2fr
        1.2fr;

    gap: 45px;
    padding-bottom: 55px;
}


/* =========================================
   FOUNDATION LOGO
========================================= */

.footer-brand {
    display: inline-block;
    margin-bottom: 22px;
}

.footer-brand img {
    width: 230px;
    height: auto;
    max-height: 110px;
    object-fit: contain;

    background: #FFFFFF;
    padding: 9px;
    border-radius: 12px;
}


/* =========================================
   ABOUT FOUNDATION
========================================= */

.footer-about p {
    color: #C2D2E2;
    font-size: 13px;
    line-height: 1.9;
    max-width: 340px;
}


/* =========================================
   FOOTER HEADINGS
========================================= */

.footer h4 {
    color: #FFFFFF;

    font-family: "Playfair Display", serif;
    font-size: 19px;
    font-weight: 700;

    margin-bottom: 25px;
    position: relative;
    padding-bottom: 12px;
}

/* Heading Underline */

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
        #0B4EA2,
        #1677E8
    );
}


/* =========================================
   QUICK LINKS & OUR WORK
========================================= */

.footer-links {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.footer-links a {
    color: #C2D2E2;
    font-size: 13px;

    margin-bottom: 12px;

    transition: all .3s ease;
}

.footer-links a:hover {
    color: #1677E8;
    padding-left: 5px;
}


/* =========================================
   CONTACT DETAILS
========================================= */

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
    transition: color .3s ease;
}

/* Contact Icons */

.footer-contact p span,
.footer-contact > a span {
    color: #60A5FA;
    margin-right: 8px;
}

/* Contact Hover */

.footer-contact > a:not(.footer-support):hover {
    color: #60A5FA;
}


/* =========================================
   SUPPORT BUTTON
========================================= */

.footer-support {
    display: inline-block;

    margin-top: 10px;

    background: linear-gradient(
        120deg,
        #0B4EA2,
        #1677E8
    );

    color: #FFFFFF;

    padding: 12px 20px;
    border-radius: 30px;

    font-size: 12px;
    font-weight: 700;

    box-shadow: 0 8px 22px rgba(22,119,232,.20);

    transition: all .3s ease;
}

.footer-support:hover {
    background: #0B4EA2;
    color: #FFFFFF;

    transform: translateY(-3px);

    box-shadow: 0 12px 25px rgba(22,119,232,.30);
}


/* =========================================
   SOCIAL MEDIA
========================================= */

.socials {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-top: 25px;
}

.socials a {
    width: 38px;
    height: 38px;

    display: flex;
    justify-content: center;
    align-items: center;

    border: 1px solid rgba(255,255,255,.20);
    border-radius: 50%;

    color: #FFFFFF;
    font-size: 13px;
    font-weight: 700;

    transition: all .3s ease;
}

.socials a:hover {
    background: #1677E8;
    border-color: #1677E8;

    color: #FFFFFF;

    transform: translateY(-4px);
}


/* =========================================
   FOOTER BOTTOM
========================================= */

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

.footer-bottom span {
    line-height: 1.8;
}


/* =========================================
   FLOATING WHATSAPP
========================================= */

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

    box-shadow: 0 8px 25px rgba(0,0,0,.20);

    transition: all .3s ease;
}

.floating-whatsapp:hover {
    background: #1DA851;
    color: #FFFFFF;
    transform: scale(1.1);
}


/* =========================================
   TABLET RESPONSIVE
========================================= */

@media (max-width: 1000px) {

    .footer-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 40px;
    }

}


/* =========================================
   MOBILE RESPONSIVE
========================================= */

@media (max-width: 600px) {

    .footer {
        padding-top: 50px;
    }

    .footer-grid {
        grid-template-columns: 1fr;
        gap: 35px;

        padding-bottom: 35px;
    }

    /* Logo */

    .footer-brand img {
        width: 210px;
        max-height: 95px;
    }

    /* Headings */

    .footer h4 {
        font-size: 18px;
        margin-bottom: 20px;
    }

    /* Paragraphs */

    .footer-about p {
        font-size: 13px;
        max-width: 100%;
    }

    /* Links */

    .footer-links a,
    .footer-contact p,
    .footer-contact > a:not(.footer-support) {
        font-size: 13px;
    }

    /* Footer Bottom */

    .footer-bottom {
        flex-direction: column;
        justify-content: center;

        text-align: center;

        padding: 20px 0;
        line-height: 1.8;
    }

    /* Social Icons */

    .socials {
        margin-top: 20px;
    }

    /* WhatsApp */

    .floating-whatsapp {
        width: 48px;
        height: 48px;

        bottom: 18px;
        right: 18px;

        font-size: 24px;
    }

}


.floating-whatsapp {
    background: #25D366;
    color: #fff;
    width: 58px;
    height: 58px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    right: 22px;
    bottom: 22px;
    z-index: 9999;
    text-decoration: none;
}

.floating-whatsapp svg {
    display: block;
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
                Ashraya Foundation is dedicated to bringing care,
                compassion and hope to people of all ages.
                We believe every individual deserves dignity,
                respect, support and an opportunity for a better life.
                Together, we strive to build a caring community
                where everyone feels valued and supported.
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
            <a href="care.php">Our Care & Services</a>
            <a href="gallery.php">Our Activities</a>
            <a href="donation.php">Support Our Mission</a>
            <a href="contact.php">Contact Us</a>

        </div>


        <!-- OUR WORK -->
        <div class="footer-links">

            <h4>What We Provide</h4>

            <a href="care.php#shelter">Shelter & Care</a>
            <a href="care.php#education">Education & Learning</a>
            <a href="care.php#food">Food & Nutrition</a>
            <a href="care.php#health">Health & Well-being</a>
            <a href="care.php#activities">Community Activities</a>
            <a href="care.php#development">Personal Development</a>

        </div>


        <!-- CONTACT DETAILS -->
        <div class="footer-contact">

            <h4>Get in Touch</h4>

            <p>
                <span>📍</span>
                <?= e($site['address']) ?>
            </p>

            <a href="tel:<?= e(preg_replace('/[^0-9+]/', '', $site['phone'])) ?>">
                <span>☎</span>
                <?= e($site['phone']) ?>
            </a>

            <a href="mailto:<?= e($site['email']) ?>">
                <span>✉</span>
                <?= e($site['email']) ?>
            </a>

            <a href="https://wa.me/<?= e(preg_replace('/\D/', '', $site['whatsapp'])) ?>"
               target="_blank"
               rel="noopener noreferrer">
                <span>💬</span>
                WhatsApp Us
            </a>

            <a class="footer-support" href="donation.php">
                Make a Difference →
            </a>

        </div>

    </div>


    <!-- FOOTER BOTTOM -->
    <div class="container footer-bottom">

      
    <span>
        © <?= date('Y') ?> Ashraya Foundation. All rights reserved. Developed by
        <a href="https://www.thiven.com/"
           target="_blank"
           rel="noopener noreferrer">
            Thiven
        </a>
    </span>

   


        <span>
            Care for Every Life. Hope for Every Generation.
        </span>

    </div>

</footer>



<!-- FLOATING WHATSAPP -->
<!-- <a class="floating-whatsapp"
   href="https://wa.me/<?= e($site['whatsapp']) ?>"
   target="_blank"
   rel="noopener"
   aria-label="WhatsApp">

    ✆

</a> -->

<a class="floating-whatsapp"
   href="https://wa.me/<?= e($site['whatsapp']) ?>"
   target="_blank"
   rel="noopener noreferrer"
   aria-label="WhatsApp">

    <svg xmlns="http://www.w3.org/2000/svg"
         width="32"
         height="32"
         viewBox="0 0 32 32"
         fill="currentColor">
        <path d="M16 .5A15.5 15.5 0 0 0 2.6 23.8L.5 31.5l7.9-2.1A15.5 15.5 0 1 0 16 .5zm0 28.2a12.7 12.7 0 0 1-6.5-1.8l-.5-.3-4.7 1.2 1.3-4.6-.3-.5A12.7 12.7 0 1 1 16 28.7zm7-9.5c-.4-.2-2.2-1.1-2.6-1.2-.4-.1-.6-.2-.9.2-.3.4-1 1.2-1.2 1.4-.2.2-.4.3-.8.1-.4-.2-1.6-.6-3-1.9-1.1-1-1.9-2.2-2.1-2.6-.2-.4 0-.6.2-.8l.6-.7c.2-.2.2-.4.4-.6.1-.2 0-.4 0-.6s-.9-2.1-1.3-2.8c-.3-.7-.7-.6-.9-.6h-.8c-.3 0-.7.1-1.1.5-.4.4-1.4 1.3-1.4 3.2s1.4 3.7 1.6 3.9c.2.3 2.7 4.1 6.5 5.7.9.4 1.6.6 2.2.8.9.3 1.7.3 2.3.2.7-.1 2.2-.9 2.5-1.8.3-.9.3-1.7.2-1.8-.1-.2-.3-.3-.7-.5z"/>
    </svg>

</a>


<script src="assets/js/main.js"></script>

</body>
</html>
