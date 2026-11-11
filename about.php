
<?php
$pageTitle = 'About Us';
$activePage = 'about';
require 'includes/header.php';
?>


<style>


/* =========================================
   ABOUT PAGE - ASHRAYA FOUNDATION
   BLUE THEME
========================================= */

:root {
    --about-blue-dark: #0B4EA2;
    --about-blue: #1677E8;
    --about-light: #F0F7FF;
    --about-white: #FFFFFF;
    --about-text: #182B40;
    --about-muted: #66788A;
}

/* ABOUT HERO */

.about-hero {
    position: relative;
    overflow: hidden;
    padding: 105px 0;
    background: linear-gradient(
        120deg,
        #0B4EA2 0%,
        #1677E8 100%
    );
}

.about-hero::before,
.about-hero::after {
    content: "";
    position: absolute;
    border: 1px solid rgba(255,255,255,.13);
    border-radius: 50%;
    pointer-events: none;
}

.about-hero::before {
    width: 420px;
    height: 420px;
    right: -100px;
    top: -180px;
}

.about-hero::after {
    width: 300px;
    height: 300px;
    right: 120px;
    bottom: -210px;
}

.about-hero .container {
    position: relative;
    z-index: 1;
}

.about-hero .eyebrow {
    color: #DCEBFF;
}

.about-hero h1 {
    max-width: 850px;
    margin: 18px 0;
    color: #FFFFFF;
    font-size: clamp(38px, 5.5vw, 64px);
    line-height: 1.13;
    font-weight: 700;
}

.about-hero h1 em {
    color: #DCEBFF;
    font-style: normal;
}

.about-hero p {
    max-width: 720px;
    margin: 0;
    color: rgba(255,255,255,.88);
    font-size: 17px;
    line-height: 1.85;
}


/* OUR STORY */

.about-story {
    background: #FFFFFF;
}

.about-story .copy h2 {
    color: var(--about-text);
}

.about-story .copy h2 em {
    color: var(--about-blue);
    font-style: normal;
}

.about-story .copy p {
    color: var(--about-muted);
    line-height: 1.85;
}

.about-story .visual {
    overflow: hidden;
    border-radius: 22px;
}

.about-story .visual img {
    display: block;
    width: 100%;
    height: 450px;
    object-fit: cover;
}

.about-story .quote {
    margin-top: 25px;
    padding: 20px 24px;
    background: var(--about-light);
    border-left: 4px solid var(--about-blue);
    border-radius: 0 12px 12px 0;
    color: var(--about-blue-dark);
    font-size: 16px;
    font-weight: 600;
    line-height: 1.7;
}


/* VALUES SECTION */

.about-values {
    background: #F0F7FF;
}

.about-values .heading h2 {
    color: var(--about-text);
}

.about-values .heading h2 em {
    color: var(--about-blue);
    font-style: normal;
}

.about-values .heading p {
    max-width: 680px;
    margin-left: auto;
    margin-right: auto;
    color: var(--about-muted);
    line-height: 1.8;
}

.about-values .values {
    margin-top: 45px;
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 22px;
}

.about-values .value {
    padding: 30px 24px;
    background: #FFFFFF;
    border: 1px solid #E0EDFC;
    border-radius: 18px;
    box-shadow: 0 12px 35px rgba(11,78,162,.06);
    transition: transform .3s ease, box-shadow .3s ease;
}

.about-values .value:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 40px rgba(11,78,162,.12);
}

.about-values .value b {
    display: inline-flex;
    width: 43px;
    height: 43px;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    background: linear-gradient(
        135deg,
        #0B4EA2,
        #1677E8
    );
    color: #FFFFFF;
    font-size: 14px;
}

.about-values .value h3 {
    margin: 20px 0 10px;
    color: var(--about-blue-dark);
    font-size: 20px;
}

.about-values .value p {
    margin: 0;
    color: var(--about-muted);
    font-size: 14px;
    line-height: 1.8;
}


/* MISSION & VISION */

.about-mission {
    background: #FFFFFF;
}

.about-mission .mission-card {
    overflow: hidden;
    background: #FFFFFF;
    border: 1px solid #E0EDFC;
    border-radius: 20px;
    box-shadow: 0 12px 35px rgba(11,78,162,.08);
}

.about-mission .mission-card img {
    display: block;
    width: 100%;
    height: 300px;
    object-fit: cover;
}

.about-mission .mission-card > div {
    padding: 28px;
}

.about-mission .mission-card .eyebrow {
    color: var(--about-blue);
}

.about-mission .mission-card h3 {
    margin: 12px 0 0;
    color: var(--about-text);
    font-size: 22px;
    line-height: 1.5;
}


/* ABOUT CTA */

.about-cta {
    padding: 65px 0;
    background: linear-gradient(
        120deg,
        #0B4EA2,
        #1677E8
    );
}

.about-cta-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 35px;
}

.about-cta .eyebrow {
    color: #DCEBFF;
}

.about-cta h2 {
    max-width: 600px;
    margin: 12px 0;
    color: #FFFFFF;
    font-size: clamp(30px, 4vw, 42px);
    line-height: 1.2;
}

.about-cta p {
    max-width: 580px;
    margin: 0;
    color: rgba(255,255,255,.85);
    line-height: 1.8;
}

.about-cta .btn.white {
    flex-shrink: 0;
    background: #FFFFFF;
    color: var(--about-blue-dark);
    border: 1px solid #FFFFFF;
}

.about-cta .btn.white:hover {
    background: #EAF3FF;
}


/* RESPONSIVE */

@media (max-width: 1000px) {
    .about-values .values {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media (max-width: 700px) {
    .about-hero {
        padding: 75px 0;
    }

    .about-story .visual img {
        height: 320px;
    }

    .about-mission .mission-card img {
        height: 220px;
    }

    .about-cta-inner {
        align-items: flex-start;
        flex-direction: column;
    }
}

@media (max-width: 560px) {
    .about-values .values {
        grid-template-columns: 1fr;
        gap: 16px;
    }

    .about-values .value {
        padding: 25px 22px;
    }

    .about-hero h1 {
        font-size: 38px;
    }

    .about-story .visual img {
        height: 270px;
    }

    .about-mission .mission-card h3 {
        font-size: 19px;
    }

    .about-cta {
        padding: 48px 0;
    }
}

</style>
<!-- ABOUT HERO -->

<!-- =====================================
     ABOUT HERO
===================================== -->

<section class="page-hero about-hero">

    <div class="container reveal">

        <span class="eyebrow light">
            ABOUT ASHRAYA FOUNDATION
        </span>

        <h1>
            A home filled with love,
            <em>care and belonging.</em>
        </h1>

        <p>
            Ashraya Foundation is built on the belief that
            people of every age deserve a safe home, nutritious food,
            compassionate care and a life of dignity. Ashraya Foundation
            supports orphaned and vulnerable children, adults who need
            care and senior citizens by creating a welcoming environment
            where every resident can feel protected, respected and valued.
        </p>

    </div>

</section>


<!-- =====================================
     OUR STORY
===================================== -->

<section class="section about-story">

    <div class="container split">

        <div class="copy reveal">

            <span class="eyebrow">
                OUR STORY
            </span>

            <h2>
                A place where people of every age
                <em>can feel safe and valued.</em>
            </h2>

            <p>
                People can need care and support at different stages of life.
                Children may grow up without parental care, adults may
                face difficult circumstances, and senior citizens may
                experience loneliness or a lack of family support.
                Everyone deserves safety, companionship and respect.
            </p>

            <p>
                Ashraya Foundation stands for compassion, humanity and
                togetherness. Our purpose is to provide a caring home
                for orphaned and vulnerable children, adults in need
                and senior citizens. We aim to offer appropriate daily
                support, meaningful companionship and an environment
                where every resident experiences dignity and belonging.
            </p>

            <div class="quote">
                “A home is not just a place to live.
                It is where every person feels loved,
                protected and valued.”
            </div>

        </div>

        <div class="visual reveal delay-1">

            <img
                src="assets/images/gallery/gallery-02.jpg"
                alt="Ashraya Foundation providing a caring and supportive environment">

        </div>

    </div>

</section>


<!-- =====================================
     OUR VALUES
===================================== -->

<section class="soft-section about-values">

    <div class="container">

        <div class="heading centered reveal">

            <span class="eyebrow">
                OUR VALUES
            </span>

            <h2>
                More than care,
                <em>a commitment to humanity.</em>
            </h2>

            <p>
                Our values guide the way we care for children, adults and senior
                citizens. We are committed to treating every resident
                with kindness, fairness, dignity and respect.
            </p>

        </div>

        <div class="values">

            <div class="value reveal">

                <b>01</b>

                <h3>Love & Compassion</h3>

                <p>
                    Offering thoughtful care, patience and emotional support
                    to residents of every age and background.
                </p>

            </div>


            <div class="value reveal delay-1">

                <b>02</b>

                <h3>Safety & Protection</h3>

                <p>
                    Maintaining a welcoming and secure living environment
                    where residents can feel protected and at ease.
                </p>

            </div>


            <div class="value reveal delay-2">

                <b>03</b>

                <h3>Dignity & Respect</h3>

                <p>
                    Respecting the individual needs, choices and dignity
                    of every child, adult and senior resident.
                </p>

            </div>


            <div class="value reveal">

                <b>04</b>

                <h3>Family & Togetherness</h3>

                <p>
                    Building friendships, shared experiences and a sense
                    of community so residents feel included.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- =====================================
     MISSION & VISION
===================================== -->

<section class="section about-mission">

    <div class="container mission-grid">

        <div class="mission-card reveal">

            <img
                src="assets/images/gallery/gallery-06.jpg"
                alt="Ashraya Foundation mission to provide shelter, protection and compassionate care">

            <div>

                <span class="eyebrow">
                    OUR MISSION
                </span>

                <h3>
                    To provide a safe, caring and respectful home for
                    orphaned and vulnerable children, adults in need
                    and senior citizens, with essential daily support
                    and care suited to their needs.
                </h3>

            </div>

        </div>


        <div class="mission-card reveal delay-1">

            <img
                src="assets/images/gallery/gallery-07.jpg"
                alt="Ashraya Foundation vision of a loving and inclusive community">

            <div>

                <span class="eyebrow">
                    OUR VISION
                </span>

                <h3>
                    To build a compassionate home where people of all
                    ages can live with dignity, feel supported
                    and experience care, respect and belonging.
                </h3>

            </div>

        </div>

    </div>

</section>


<!-- =====================================
     SUPPORT CTA
===================================== -->

<section class="about-cta">

    <div class="container about-cta-inner reveal">

        <div>

            <span class="eyebrow light">
                CARE THAT REACHES EVERY GENERATION
            </span>

            <h2>
                Together, we can give
                everyone a place to belong.
            </h2>

            <p>
                Your kindness, donations, time and support can help
                provide shelter, daily essentials, care and companionship
                for children, adults and senior citizens who need it.
            </p>

        </div>

        <a class="btn white" href="donation.php">
            Support Ashraya <span>↗</span>
        </a>

    </div>

</section>


<?php require 'includes/footer.php'; ?>
