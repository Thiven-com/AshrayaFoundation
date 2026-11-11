
<?php
$pageTitle = 'Home';
$activePage = 'home';
require 'includes/header.php';
?>


<style>
  
/* =========================================
   ASHRAYA FOUNDATION
   HOMEPAGE - TWO SHADE BLUE THEME
========================================= */


/* =========================================
   HERO SECTION
========================================= */

/* .hero {
    position: relative;
    overflow: hidden;

    background:
        radial-gradient(
            circle at 5% 90%,
            rgba(22,119,232,.08),
            transparent 30%
        ),
        radial-gradient(
            circle at 95% 5%,
            rgba(11,78,162,.07),
            transparent 28%
        ),
        linear-gradient(
            120deg,
            #F0F7FF 0%,
            #FFFFFF 55%,
            #F5F9FF 100%
        );

    color: #252525;
} */



.hero {
    position: relative;
    overflow: hidden;

    background-image:
        linear-gradient(
            90deg,
            rgba(240, 248, 255, 0.12),
            rgba(255, 255, 255, 0.08)
        ),
        url("assets/images/home/bgban1.png");

    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;

    color: #182B40;
}

.hero .container {
    position: relative;
    z-index: 2;
}


/* Mobile background adjustment */
@media (max-width: 768px) {
    .hero {
        background-position: center;
        background-size: cover;
    }
}


/* Hero Heading */

.hero .hero-copy h1 {
    color: #0B4EA2 !important;
    font-family: "Playfair Display", serif;
    font-size: clamp(48px, 5.2vw, 76px);
    font-weight: 800;
    line-height: 1.12;
    text-shadow: none;
}

.hero .hero-copy h1 em {
    color: #1677E8 !important;
    background: none !important;
    -webkit-text-fill-color: #1677E8 !important;
    font-style: normal;
}

/* Eyebrow */

.hero .eyebrow {
    color: #1677E8;
    font-weight: 800;
    letter-spacing: 2px;
}

/* Paragraph */

.hero .hero-copy > p {
    color: #536474;
    font-size: 16px;
    line-height: 1.9;
    font-weight: 500;
    opacity: 1;
}

/* Trust Message */

.hero .hero-trust {
    color: #536474;
}

.hero .hero-trust i {
    background: #1677E8;
}


/* =========================================
   HERO IMAGE
========================================= */

.hero .photo-frame {
    background: #FFFFFF;
    border: 1px solid #E2E9EF;
    box-shadow: 0 22px 65px rgba(11,78,162,.14);
    border-radius: 35px;
    padding: 14px;
}

.hero .photo-frame img {
    width: 100%;
    height: 380px;
    object-fit: cover;
    border-radius: 25px;
}

.hero .mini-card {
    background: #FFFFFF;
    border: 1px solid #E2E9EF;
    box-shadow: 0 12px 35px rgba(11,78,162,.12);
    color: #252525;
}

.hero .mini-one b {
    color: #1677E8;
}

.hero .mini-two strong {
    color: #0B4EA2;
}


/* =========================================
   BUTTONS
========================================= */

.btn.primary {
    background: linear-gradient(
        120deg,
        #0B4EA2,
        #1677E8
    );

    color: #FFFFFF;
    border: none;

    box-shadow: 0 10px 25px rgba(22,119,232,.18);
}

.btn.primary:hover {
    background: #0B4EA2;
}

.btn.secondary {
    background: #FFFFFF;
    color: #0B4EA2;
    border: 1px solid #D7E5F5;
}

.btn.secondary:hover {
    background: #0B4EA2;
    color: #FFFFFF;
    border-color: #0B4EA2;
}

.btn.white {
    color: #0B4EA2;
    background: #FFFFFF;
}

.btn.white:hover {
    background: #EAF3FF;
    color: #0B4EA2;
    transform: translateY(-3px);
}


/* =========================================
   FOUNDATION HIGHLIGHTS
========================================= */

.stats-wrap {
    background: #FFFFFF;
}

.stats {
    border-bottom-color: #E2E9EF;
}

.stat b {
    font-family: "DM Sans", sans-serif;
    font-size: 25px;
    font-weight: 800;
    letter-spacing: 1px;

    background: linear-gradient(
        90deg,
        #0B4EA2,
        #1677E8
    );

    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

.stat span {
    color: #66757D;
}


/* =========================================
   SECTION HEADINGS
========================================= */

.heading h2 {
    color: #0B4EA2;
}

.heading h2 em {
    color: #1677E8;
    font-style: normal;
}

.heading p {
    color: #66757D;
}

.eyebrow {
    color: #1677E8;
}

.eyebrow:before {
    background: #0B4EA2;
}


/* =========================================
   CHILDREN'S CARE CARDS
========================================= */

.two-cards {
    gap: 28px;
}

.care-card {
    background: #FFFFFF;
    border: 1px solid #E2E9EF;
    box-shadow: 0 10px 35px rgba(11,78,162,.05);
}

.care-card:hover {
    border-color: rgba(22,119,232,.30);
    box-shadow: 0 22px 50px rgba(11,78,162,.12);
}

.care-card:before {
    background: linear-gradient(
        90deg,
        #0B4EA2,
        #1677E8
    );
}

.care-content .number {
    color: #1677E8;
    font-weight: 800;
}

.care-content h3 {
    color: #0B4EA2;
}

.care-content p {
    color: #66757D;
}

.care-content a {
    color: #0B4EA2;
}

.care-content a:hover {
    color: #1677E8;
}


/* =========================================
   IMPACT SECTION
========================================= */

.impact {
    background:
        radial-gradient(
            circle at 10% 15%,
            rgba(22,119,232,.07),
            transparent 25%
        ),
        linear-gradient(
            135deg,
            #EEF6FF,
            #FFFFFF
        );
}

.impact-copy h2 {
    color: #0B4EA2;
}

.impact-copy h2 em {
    color: #1677E8;
    font-style: normal;
}

.impact-copy > p {
    color: #596A78;
}

.impact-label {
    background: #FFFFFF;
    border-top: 3px solid #1677E8;
}

.impact-label strong {
    color: #0B4EA2;
}

.impact-label span {
    color: #66757D;
}

.gallery-small {
    border-color: #EAF3FF;
}

.checks i {
    background: #EAF3FF;
    color: #0B4EA2;
}

.checks span {
    color: #394B58;
}

.text-link {
    color: #0B4EA2;
}

.text-link:hover {
    color: #1677E8;
}


/* =========================================
   SUPPORT SECTION
========================================= */

.support-strip {
    background: linear-gradient(
        110deg,
        #0B4EA2 0%,
        #1677E8 100%
    );

    position: relative;
    overflow: hidden;
}

.support-strip:before,
.support-strip:after {
    content: "";
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
}

.support-strip:before {
    width: 300px;
    height: 300px;
    right: -100px;
    top: -180px;
    border: 50px solid rgba(255,255,255,.08);
}

.support-strip:after {
    width: 180px;
    height: 180px;
    left: -100px;
    bottom: -120px;
    border: 35px solid rgba(255,255,255,.07);
}

.support-grid {
    position: relative;
    z-index: 1;
}

.support-copy h2 {
    color: #FFFFFF;
}

.support-copy p {
    color: rgba(255,255,255,.85);
}

.support-copy .eyebrow.light {
    color: #FFFFFF;
}


/* =========================================
   GALLERY
========================================= */

.gallery-preview {
    background: #FFFFFF;
}

.gallery-preview .heading h2 {
    color: #0B4EA2;
}

.photo-grid img {
    border: 3px solid #FFFFFF;
    box-shadow: 0 8px 25px rgba(11,78,162,.08);
    transition: .35s ease;
}

.photo-grid img:hover {
    transform: translateY(-5px);
}


/* =========================================
   RESPONSIVE HOMEPAGE
========================================= */

@media(max-width: 900px) {

    .hero,
    .hero-grid {
        min-height: auto;
    }

    .hero-grid {
        grid-template-columns: 1fr;
        gap: 45px;
        padding-top: 75px;
        padding-bottom: 75px;
    }

    .hero-copy {
        max-width: 700px;
    }

    .hero-photo {
        width: 90%;
        margin: auto;
    }

    .photo-frame img {
        height: 400px;
    }

    .impact-grid {
        grid-template-columns: 1fr;
        gap: 65px;
    }

    .impact-gallery {
        max-width: 650px;
        width: 100%;
        margin: auto;
    }

    .support-grid {
        flex-direction: column;
        align-items: flex-start;
    }

    .photo-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .photo-grid img,
    .photo-grid img:nth-child(2),
    .photo-grid img:nth-child(3) {
        height: 230px;
        margin-top: 0;
    }

}


/* =========================================
   MOBILE HOMEPAGE
========================================= */

@media(max-width: 560px) {

    .hero-grid {
        padding-top: 55px;
        padding-bottom: 55px;
    }

    .hero h1 {
        font-size: 43px;
        letter-spacing: -1px;
    }

    .hero-copy > p {
        font-size: 14px;
    }

    .hero-photo {
        width: 86%;
    }

    .photo-frame img {
        height: 300px;
    }

    .mini-one {
        left: -22px;
    }

    .mini-two {
        right: -22px;
    }

    .mini-card {
        padding: 10px 12px;
    }

    .stats {
        grid-template-columns: repeat(2, 1fr);
        gap: 25px 0;
        padding: 30px 0;
    }

    .stat:nth-child(2) {
        border-right: 0;
    }

    .stat b {
        font-size: 21px;
    }

    .section,
    .impact {
        padding: 65px 0;
    }

    .heading h2,
    .impact-copy h2 {
        font-size: 36px;
    }

    .two-cards {
        grid-template-columns: 1fr;
    }

    .care-img img {
        height: 230px;
    }

    .impact-gallery {
        padding-right: 35px;
    }

    .gallery-main img {
        height: 320px;
    }

    .gallery-small img {
        height: 125px;
    }

    .impact-label {
        left: 10px;
        bottom: 10px;
        padding: 9px 12px;
    }

    .support-strip {
        padding: 50px 0;
    }

    .support-copy h2 {
        font-size: 34px;
    }

    .photo-grid {
        gap: 10px;
    }

    .photo-grid img,
    .photo-grid img:nth-child(2),
    .photo-grid img:nth-child(3) {
        height: 160px;
    }

}

</style>
<!-- =====================================
     HERO SECTION
===================================== -->



<!-- =====================================
     HERO SECTION
===================================== -->

<section class="hero">

    <div class="hero-pattern"></div>

    <div class="container hero-grid">

        <div class="hero-copy reveal">

            <span class="eyebrow">
                ASHRAYA FOUNDATION • A HOME FOR EVERY LIFE
            </span>

            <h1>
                A home filled with
                <em>love, care and hope.</em>
            </h1>

            <p>
                Everyone deserves a safe place to live,
                a caring hand to hold and a community
                where they feel valued.

                Ashraya Foundation is dedicated to bringing
                shelter, compassion, dignity and essential
                support to children, elderly people,
                vulnerable adults and individuals in need.
            </p>

            <div class="actions">

                <a class="btn primary" href="donation.php">
                    Make a Difference <span>↗</span>
                </a>

                <a class="btn secondary" href="about.php">
                    Discover Our Mission
                </a>

            </div>

            <div class="hero-trust">
                <i></i>
                Every life deserves a place to belong.
            </div>

        </div>

        <div class="hero-photo reveal delay-1">

            <div class="photo-frame">
                <img
                    src="assets/images/home/hero.jpg"
                    alt="Ashraya Foundation providing care and shelter">
            </div>

            <div class="mini-card mini-one">
                <b>♥</b>
                <span>
                    A caring home<br>
                    for every generation
                </span>
            </div>

            <div class="mini-card mini-two">
                <strong>Hope</strong>
                <span>
                    Love, dignity and<br>
                    a sense of belonging
                </span>
            </div>

        </div>

    </div>

</section>


<!-- =====================================
     FOUNDATION HIGHLIGHTS
===================================== -->

<section class="stats-wrap">

    <div class="container stats">

        <div class="stat reveal">
            <b>SHELTER</b>
            <span>A safe place to call home</span>
        </div>

        <div class="stat reveal">
            <b>CARE</b>
            <span>Love and everyday support</span>
        </div>

        <div class="stat reveal">
            <b>DIGNITY</b>
            <span>Respect for every life</span>
        </div>

        <div class="stat reveal">
            <b>HOPE</b>
            <span>Never facing life alone</span>
        </div>

    </div>

</section>


<!-- =====================================
     WHAT WE DO
===================================== -->

<section class="section">

    <div class="container">

        <div class="heading centered reveal">

            <span class="eyebrow">
                OUR CARE & SUPPORT
            </span>

            <h2>
                A caring home for everyone,
                <em>at every stage of life.</em>
            </h2>

            <p>
                Every person has a different story,
                but everyone deserves love, protection
                and belonging.

                Our mission is to provide a compassionate
                environment for orphaned and vulnerable
                children, senior citizens, adults without
                family support and individuals facing
                difficult life circumstances.
            </p>

        </div>

        <div class="two-cards">

            <!-- SHELTER & DAILY CARE -->

            <article class="care-card reveal" id="shelter">

                <div class="care-img">
                    <img
                        src="assets/images/home/activity.jpg"
                        alt="Safe shelter and compassionate daily care">
                </div>

                <div class="care-content">

                    <span class="number">
                        01 / SHELTER & PROTECTION
                    </span>

                    <h3>
                        A Safe Home & Daily Essentials
                    </h3>

                    <p>
                        A safe and welcoming home can
                        change someone's life.

                        Our care mission focuses on shelter,
                        nutritious meals, clothing, hygiene,
                        protection and the everyday essentials
                        that help people live with comfort,
                        security and dignity.
                    </p>

                    <a href="care.php#shelter">
                        Explore Our Care Services →
                    </a>

                </div>

            </article>


            <!-- COMPASSIONATE CARE -->

            <article class="care-card elder reveal delay-1"
                     id="education">

                <div class="care-img">
                    <img
                        src="assets/images/home/community.jpg"
                        alt="Companionship and emotional support">
                </div>

                <div class="care-content">

                    <span class="number">
                        02 / LOVE & COMPANIONSHIP
                    </span>

                    <h3>
                        Compassionate Care & Belonging
                    </h3>

                    <p>
                        A home is more than a roof
                        over someone's head.

                        We believe in kindness, emotional
                        support, companionship, personal
                        attention and creating meaningful
                        connections so that no one feels
                        forgotten, isolated or alone.
                    </p>

                    <a href="care.php#community">
                        Discover Our Support →
                    </a>

                </div>

            </article>

        </div>

    </div>

</section>


<!-- =====================================
     OUR PROMISE
===================================== -->

<section class="impact">

    <div class="container impact-grid">

        <div class="impact-gallery reveal">

            <div class="gallery-main">
                <img
                    src="assets/images/home/community.jpg"
                    alt="A compassionate and supportive care home">
            </div>

            <div class="gallery-small">
                <img
                    src="assets/images/home/activity.jpg"
                    alt="Daily care and companionship">
            </div>

            <div class="impact-label">

                <strong>One Family</strong>

                <span>
                    Every person deserves love and belonging
                </span>

            </div>

        </div>


        <div class="impact-copy reveal delay-1">

            <span class="eyebrow">
                OUR COMMITMENT
            </span>

            <h2>
                No one should feel
                <em>forgotten or alone.</em>
            </h2>

            <p>
                Some children grow up without parental
                care. Some elderly people face loneliness
                and abandonment. Others struggle with
                disability, poverty, homelessness or
                the absence of family support.

                We believe every individual deserves
                a caring environment where their
                basic needs are respected and their
                lives are valued.
            </p>

            <div class="checks">

                <div>
                    <i>✓</i>
                    <span>
                        Safe shelter and a secure living environment
                    </span>
                </div>

                <div>
                    <i>✓</i>
                    <span>
                        Nutritious food, clothing and daily necessities
                    </span>
                </div>

                <div>
                    <i>✓</i>
                    <span>
                        Health, hygiene and well-being support
                    </span>
                </div>

                <div>
                    <i>✓</i>
                    <span>
                        Emotional care, companionship and kindness
                    </span>
                </div>

                <div>
                    <i>✓</i>
                    <span>
                        Inclusive care for people with different needs
                    </span>
                </div>

                <div>
                    <i>✓</i>
                    <span>
                        Dignity, respect and a sense of family
                    </span>
                </div>

            </div>

            <a class="text-link" href="care.php">
                Discover Our Care Services →
            </a>

        </div>

    </div>

</section>


<!-- =====================================
     DONATION / SUPPORT SECTION
===================================== -->

<section class="support-strip">

    <div class="container support-grid">

        <div class="support-copy reveal">

            <span class="eyebrow light">
                BE SOMEONE'S REASON TO SMILE
            </span>

            <h2>
                Your kindness can turn
                a shelter into a loving home.
            </h2>

            <p>
                A meal for someone hungry.
                A safe bed for someone without a home.
                A helping hand for an elderly person.
                Care and protection for a vulnerable child.

                Your contribution can help bring comfort,
                safety and hope to people who need it most.
            </p>

        </div>

        <a class="btn white reveal delay-1"
           href="donation.php">

            Support Ashraya <span>↗</span>

        </a>

    </div>

</section>


<!-- =====================================
     GALLERY PREVIEW
===================================== -->

<section class="section gallery-preview">

    <div class="container">

        <div class="heading reveal">

            <span class="eyebrow">
                LIFE AT ASHRAYA
            </span>

            <h2>
                More than a shelter,
                <em>a place to belong.</em>
            </h2>

            <p>
                Every shared meal, caring gesture,
                celebration and moment of togetherness
                reflects the importance of human connection.

                Explore the moments that represent
                compassion, companionship and the
                spirit of a caring community.
            </p>

        </div>

        <div class="photo-grid">

            <img
                class="reveal"
                src="assets/images/gallery/gallery-05.jpg"
                alt="Care and compassion at Ashraya Foundation">

            <img
                class="reveal delay-1"
                src="assets/images/gallery/gallery-02.jpg"
                alt="Daily life and care activities">

            <img
                class="reveal delay-2"
                src="assets/images/gallery/gallery-03.jpg"
                alt="Companionship and community support">

            <img
                class="reveal"
                src="assets/images/gallery/gallery-04.jpg"
                alt="Togetherness and shared moments">

        </div>

        <div class="center">

            <a class="btn secondary" href="gallery.php">
                Explore Our Gallery →
            </a>

        </div>

    </div>

</section>




<?php require 'includes/footer.php'; ?>
