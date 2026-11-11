
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
     ASHRAYA FOUNDATION - HOME FOR ALL AGE GROUPS
===================================== -->

<section class="hero">
    <div class="hero-pattern"></div>
    <div class="container hero-grid">
        <div class="hero-copy reveal">
            <span class="eyebrow">ASHRAYA FOUNDATION • A HOME FOR EVERY GENERATION</span>
            <h1>A home filled with <em>love, care and hope.</em></h1>
            <p>
                Everyone deserves a safe place to live, caring people to support them
                and the opportunity to live with dignity. Ashraya Foundation supports
                orphaned children, vulnerable adults and senior citizens by providing
                a caring environment, essential support and a sense of belonging
                throughout every stage of life.
            </p>
            <div class="actions">
                <a class="btn primary" href="donation.php">Support Our Foundation <span>↗</span></a>
                <a class="btn secondary" href="about.php">Discover Our Mission</a>
            </div>
            <div class="hero-trust">
                <i></i>
                Every life deserves to feel safe, valued and loved.
            </div>
        </div>

        <div class="hero-photo reveal delay-1">
            <div class="photo-frame">
                <img src="assets/images/home/hero.jpg" alt="Children at Ashraya Foundation" loading="eager">
            </div>
            <div class="mini-card mini-one">
                <b>♥</b>
                <span>A safe place<br>to live and belong</span>
            </div>
            <div class="mini-card mini-two">
                <strong>Hope & Dignity</strong>
                <span>Care, respect and<br>new opportunities</span>
            </div>
        </div>
    </div>
</section>

<!-- FOUNDATION HIGHLIGHTS -->
<section class="stats-wrap">
    <div class="container stats">
        <div class="stat reveal"><b>SAFE SHELTER</b><span>A secure place to call home</span></div>
        <div class="stat reveal"><b>EDUCATION</b><span>Learning at every stage of life</span></div>
        <div class="stat reveal"><b>NUTRITION</b><span>Healthy meals and daily essentials</span></div>
        <div class="stat reveal"><b>LOVE & CARE</b><span>Respect for every generation</span></div>
    </div>
</section>

<!-- WHAT WE DO -->
<section class="section">
    <div class="container">
        <div class="heading centered reveal">
            <span class="eyebrow">OUR CARE & SUPPORT</span>
            <h2>Care and support for people <em>at every stage of life.</em></h2>
            <p>
                People of every age deserve safety, companionship and the support they need.
                Our foundation welcomes orphaned and vulnerable children, adults who need
                care and senior citizens who may be without family support. We aim to
                create a respectful environment where everyone can feel valued and belong.
            </p>
        </div>

        <div class="two-cards">
            <article class="care-card reveal" id="shelter">
                <div class="care-img">
                    <img src="assets/images/home/activity.jpg" alt="A safe and welcoming home for children" loading="lazy">
                </div>
                <div class="care-content">
                    <span class="number">01 / SHELTER & DAILY CARE</span>
                    <h3>A Safe Home & Everyday Essentials</h3>
                    <p>
                        A safe and supportive home matters at every age. Our care focus includes
                        a secure living environment, nutritious meals, clothing, hygiene
                        and everyday essentials to help residents feel comfortable,
                        protected and cared for.
                    </p>
                    <a href="care.php#shelter">Explore Our Care Services →</a>
                </div>
            </article>

            <article class="care-card reveal delay-1" id="education">
                <div class="care-img">
                    <img src="assets/images/home/community.jpg" alt="Children learning and developing together" loading="lazy">
                </div>
                <div class="care-content">
                    <span class="number">02 / COMPANIONSHIP & PERSONAL DEVELOPMENT</span>
                    <h3>Companionship, Confidence & Growth</h3>
                    <p>
                        Every person deserves opportunities to learn, connect and develop.
                        We value education and guidance for children, meaningful activities
                        for adults, and companionship and attentive support for senior
                        residents, according to their individual needs.
                    </p>
                    <a href="care.php#education">Discover Our Support →</a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- OUR PROMISE -->
<section class="impact">
    <div class="container impact-grid">
        <div class="impact-gallery reveal">
            <div class="gallery-main">
                <img src="assets/images/home/community.jpg" alt="Children sharing moments and learning together" loading="lazy">
            </div>
            <div class="gallery-small">
                <img src="assets/images/home/activity.jpg" alt="Children taking part in daily activities" loading="lazy">
            </div>
            <div class="impact-label">
                <strong>Every Life Matters</strong>
                <span>A life with care, respect and belonging</span>
            </div>
        </div>

        <div class="impact-copy reveal delay-1">
            <span class="eyebrow">OUR COMMITMENT</span>
            <h2>Everyone deserves <em>a life of dignity and hope.</em></h2>
            <p>
                Children, adults and senior citizens all deserve to feel safe, respected
                and supported. We believe that compassionate care, practical assistance
                and meaningful human connection can make a positive difference
                throughout a person's life.
            </p>
            <div class="checks">
                <div><i>✓</i><span>A safe and supportive living environment for all ages</span></div>
                <div><i>✓</i><span>Nutritious meals, clothing and daily necessities</span></div>
                <div><i>✓</i><span>Education and learning opportunities for children</span></div>
                <div><i>✓</i><span>Healthcare, hygiene and well-being support</span></div>
                <div><i>✓</i><span>Emotional care, companionship and encouragement</span></div>
                <div><i>✓</i><span>Activities, recreation and personal development</span></div>
            </div>
            <a class="text-link" href="care.php">Discover How We Care →</a>
        </div>
    </div>
</section>

<!-- CARE FOR EVERY AGE GROUP -->
<section class="section">
    <div class="container">
        <div class="heading centered reveal">
            <span class="eyebrow">CARE THROUGH EVERY STAGE OF LIFE</span>
            <h2>A caring community, <em>at every stage of life.</em></h2>
            <p>
                The needs of a child, an adult and a senior citizen may be different.
                We believe everyone deserves appropriate care, healthy meals, meaningful
                activities and human connection to support their well-being.
            </p>
        </div>
        <div class="two-cards">
            <article class="care-card reveal">
                <div class="care-img">
                    <img src="assets/images/gallery/gallery-02.jpg" alt="Learning and educational activities" loading="lazy">
                </div>
                <div class="care-content">
                    <span class="number">03 / HEALTH & WELL-BEING</span>
                    <h3>Healthy Bodies & Happy Minds</h3>
                    <p>
                        Good health is important at every age. We recognise the value of nutritious
                        food, personal hygiene, access to healthcare support and an
                        environment that respects each resident's physical and emotional
                        well-being.
                    </p>
                </div>
            </article>
            <article class="care-card reveal delay-1">
                <div class="care-img">
                    <img src="assets/images/gallery/gallery-03.jpg" alt="Children enjoying activities and friendship" loading="lazy">
                </div>
                <div class="care-content">
                    <span class="number">04 / COMMUNITY & COMPANIONSHIP</span>
                    <h3>Friendship, Companionship & Belonging</h3>
                    <p>
                        Shared activities, conversation and companionship can help people feel
                        connected and valued. We encourage meaningful interaction,
                        recreation and opportunities for residents of different ages
                        to participate according to their interests and abilities.
                    </p>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- DONATION / SUPPORT SECTION -->
<section class="support-strip">
    <div class="container support-grid">
        <div class="support-copy reveal">
            <span class="eyebrow light">BE A PART OF SOMEONE'S JOURNEY</span>
            <h2>Your kindness can make life brighter for someone.</h2>
            <p>
                Your support can help provide shelter, food, clothing, education for children,
                healthcare assistance and companionship for people who need care.
                Together, we can create more moments of comfort, dignity and hope.
            </p>
        </div>
        <a class="btn white reveal delay-1" href="donation.php">Donate & Make a Difference <span>↗</span></a>
    </div>
</section>

<!-- GALLERY PREVIEW -->
<section class="section gallery-preview">
    <div class="container">
        <div class="heading reveal">
            <span class="eyebrow">LIFE AT ASHRAYA</span>
            <h2>Moments that make <em>life meaningful.</em></h2>
            <p>
                From learning and play to shared meals, celebrations and everyday moments,
                every experience reflects the spirit of community at Ashraya Foundation.
                Explore moments of care, friendship, respect and togetherness.
            </p>
        </div>

        <div class="photo-grid">
            <img class="reveal" src="assets/images/gallery/gallery-05.jpg" alt="Children at Ashraya Foundation" loading="lazy">
            <img class="reveal delay-1" src="assets/images/gallery/gallery-02.jpg" alt="Children learning and participating in activities" loading="lazy">
            <img class="reveal delay-2" src="assets/images/gallery/gallery-03.jpg" alt="Children enjoying time together" loading="lazy">
            <img class="reveal" src="assets/images/gallery/gallery-04.jpg" alt="Special moments and celebrations" loading="lazy">
        </div>

        <div class="center">
            <a class="btn secondary" href="gallery.php">Explore Our Gallery →</a>
        </div>
    </div>
</section>

<!-- FINAL CALL TO ACTION -->
<section class="section" style="padding-top: 0;">
    <div class="container">
        <div class="heading centered reveal">
            <span class="eyebrow">STAND WITH ASHRAYA</span>
            <h2>Be part of <em>a brighter tomorrow.</em></h2>
            <p>
                Every act of kindness matters. Learn more about our mission, share our work
                or support children, adults and senior citizens through a contribution.
            </p>
            <div class="actions" style="justify-content:center;">
                <a class="btn primary" href="donation.php">Support Ashraya <span>↗</span></a>
                <a class="btn secondary" href="about.php">Know More About Us</a>
            </div>
        </div>
    </div>
</section>

<?php require 'includes/footer.php'; ?>
