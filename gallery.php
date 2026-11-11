
<?php
$pageTitle = 'Our Gallery';
$activePage = 'gallery';
require 'includes/header.php';
?>


<style>


/* =========================================
   GALLERY PAGE - ASHRAYA FOUNDATION
========================================= */

.gallery-hero {
    position: relative;
    overflow: hidden;
    padding: 100px 0;
    background: linear-gradient(
        120deg,
        #0B4EA2,
        #1677E8
    );
}

.gallery-hero .container {
    position: relative;
    z-index: 1;
}

.gallery-hero .eyebrow {
    color: #DCEBFF;
}

.gallery-hero h1 {
    max-width: 850px;
    margin: 18px 0;
    color: #FFFFFF;
    font-size: clamp(38px, 5vw, 62px);
    line-height: 1.15;
}

.gallery-hero h1 em {
    color: #DCEBFF;
    font-style: normal;
}

.gallery-hero p {
    max-width: 720px;
    color: rgba(255,255,255,.88);
    font-size: 17px;
    line-height: 1.85;
}


/* GALLERY SECTION */

.gallery-section {
    background: #F0F7FF;
}

.gallery-section .heading h2 {
    color: #182B40;
}

.gallery-section .heading h2 em {
    color: #1677E8;
    font-style: normal;
}

.gallery-section .heading p {
    max-width: 680px;
    margin-left: auto;
    margin-right: auto;
    color: #66788A;
    line-height: 1.8;
}

.gallery-section .gallery-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 24px;
    margin-top: 45px;
}

.gallery-section .gallery-item {
    position: relative;
    overflow: hidden;
    margin: 0;
    background: #FFFFFF;
    border: 1px solid #DFEBF9;
    border-radius: 18px;
    box-shadow: 0 12px 35px rgba(11,78,162,.07);
    transition: transform .3s ease, box-shadow .3s ease;
}

.gallery-section .gallery-item:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 40px rgba(11,78,162,.14);
}

.gallery-section .gallery-item img {
    display: block;
    width: 100%;
    height: 260px;
    object-fit: cover;
    transition: transform .45s ease;
}

.gallery-section .gallery-item:hover img {
    transform: scale(1.06);
}

.gallery-section .gallery-item figcaption {
    padding: 17px 20px;
    color: #0B4EA2;
    font-size: 15px;
    font-weight: 600;
    background: #FFFFFF;
}


/* GALLERY CTA */

.gallery-cta {
    padding: 65px 0;
    background: linear-gradient(
        120deg,
        #0B4EA2,
        #1677E8
    );
}

.gallery-cta-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 35px;
}

.gallery-cta .eyebrow {
    color: #DCEBFF;
}

.gallery-cta h2 {
    max-width: 620px;
    margin: 12px 0;
    color: #FFFFFF;
    font-size: clamp(30px, 4vw, 42px);
    line-height: 1.25;
}

.gallery-cta p {
    max-width: 580px;
    margin: 0;
    color: rgba(255,255,255,.88);
    line-height: 1.8;
}

.gallery-cta .btn.white {
    flex-shrink: 0;
    color: #0B4EA2;
    background: #FFFFFF;
    border: 1px solid #FFFFFF;
}

.gallery-cta .btn.white:hover {
    background: #EAF3FF;
}


/* RESPONSIVE */

@media (max-width: 900px) {
    .gallery-section .gallery-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .gallery-hero {
        padding: 75px 0;
    }

    .gallery-section .gallery-item img {
        height: 240px;
    }
}

@media (max-width: 600px) {
    .gallery-hero {
        padding: 60px 0;
    }

    .gallery-hero h1 {
        font-size: 37px;
    }

    .gallery-section .gallery-grid {
        grid-template-columns: 1fr;
        gap: 18px;
    }

    .gallery-section .gallery-item img {
        height: 250px;
    }

    .gallery-cta-inner {
        align-items: flex-start;
        flex-direction: column;
    }

    .gallery-cta {
        padding: 48px 0;
    }
}

</style>
<!-- GALLERY HERO -->
<section class="page-hero gallery-hero">
    <div class="container reveal">

        <span class="eyebrow light">LIFE AT ASHRAYA</span>

        <h1>
            Different lives,
            <em>one caring community.</em>
        </h1>

        <p>
            Explore moments of togetherness, kindness and care
            at Ashraya Foundation. Every photograph reflects
            our commitment to bringing people together and
            creating a positive difference across generations.
        </p>

    </div>
</section>


<!-- GALLERY SECTION -->
<section class="section gallery-section">
    <div class="container">

        <div class="heading centered reveal">

            <span class="eyebrow">OUR MEMORIES</span>

            <h2>
                Moments that inspire,
                <em>memories that connect.</em>
            </h2>

            <p>
                From everyday activities to special occasions,
                discover the moments that bring our community
                together with happiness, compassion and hope.
            </p>

        </div>


        <div class="gallery-grid">

            <figure class="gallery-item reveal">
                <img src="assets/images/gallery/gallery-02.jpg"
                     alt="Community moments at Ashraya Foundation">
                <figcaption>Life at Ashraya</figcaption>
            </figure>

            <figure class="gallery-item reveal">
                <img src="assets/images/gallery/gallery-03.jpg"
                     alt="Learning and personal development">
                <figcaption>Learning & Growth</figcaption>
            </figure>

            <figure class="gallery-item reveal">
                <img src="assets/images/gallery/gallery-04.jpg"
                     alt="People enjoying community activities">
                <figcaption>Togetherness & Joy</figcaption>
            </figure>

            <figure class="gallery-item reveal">
                <img src="assets/images/gallery/gallery-05.jpg"
                     alt="Care and support at Ashraya">
                <figcaption>Care & Compassion</figcaption>
            </figure>

            <figure class="gallery-item reveal">
                <img src="assets/images/gallery/gallery-06.jpg"
                     alt="Special moments and celebrations">
                <figcaption>Special Celebrations</figcaption>
            </figure>

            <figure class="gallery-item reveal">
                <img src="assets/images/gallery/gallery-07.jpg"
                     alt="Community participation and activities">
                <figcaption>Community Activities</figcaption>
            </figure>

            <!-- <figure class="gallery-item reveal">
                <img src="assets/images/gallery/gallery-10.jpg"
                     alt="Happy moments shared together">
                <figcaption>Moments of Happiness</figcaption>
            </figure>

            <figure class="gallery-item reveal">
                <img src="assets/images/gallery/gallery-11.jpg"
                     alt="People sharing meaningful experiences">
                <figcaption>Shared Experiences</figcaption>
            </figure>

            <figure class="gallery-item reveal">
                <img src="assets/images/gallery/gallery-12.jpg"
                     alt="Hope and togetherness at Ashraya Foundation">
                <figcaption>Hope & Belonging</figcaption>
            </figure> -->

        </div>

    </div>
</section>


<!-- GALLERY CTA -->
<section class="gallery-cta">
    <div class="container gallery-cta-inner reveal">

        <div>
            <span class="eyebrow light">BE PART OF OUR STORY</span>

            <h2>
                Together, let's create
                more meaningful moments.
            </h2>

            <p>
                Your support, kindness and involvement can
                help make a difference in the lives of people
                across every generation.
            </p>
        </div>

        <a href="donation.php" class="btn white">
            Support Ashraya <span>↗</span>
        </a>

    </div>
</section>

<?php require 'includes/footer.php'; ?>
