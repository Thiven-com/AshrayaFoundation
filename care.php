
<?php
$pageTitle = 'Our Services';
$activePage = 'care';
require 'includes/header.php';
?>



<style>


/* =========================================
   OUR SERVICES PAGE - ASHRAYA FOUNDATION
   BLUE THEME
========================================= */

:root {
    --care-dark: #0B4EA2;
    --care-blue: #1677E8;
    --care-light: #F0F7FF;
    --care-white: #FFFFFF;
    --care-text: #182B40;
    --care-muted: #66788A;
}

/* SERVICES HERO */

.care-hero {
    position: relative;
    overflow: hidden;
    padding: 100px 0;
    background: linear-gradient(
        120deg,
        #0B4EA2,
        #1677E8
    );
}

.care-hero .container {
    position: relative;
    z-index: 1;
}

.care-hero .eyebrow {
    color: #DCEBFF;
}

.care-hero h1 {
    max-width: 850px;
    margin: 18px 0;
    color: #FFFFFF;
    font-size: clamp(38px, 5vw, 62px);
    line-height: 1.15;
}

.care-hero h1 em {
    color: #DCEBFF;
    font-style: normal;
}

.care-hero p {
    max-width: 720px;
    color: rgba(255,255,255,.88);
    font-size: 17px;
    line-height: 1.85;
}


/* CARE PROGRAM SECTIONS */

.care-soft-section {
    background: #F0F7FF;
}

.program .program-img {
    overflow: hidden;
    border-radius: 22px;
}

.program .program-img img {
    display: block;
    width: 100%;
    height: 430px;
    object-fit: cover;
    transition: transform .4s ease;
}

.program .program-img:hover img {
    transform: scale(1.04);
}

.program-copy .eyebrow {
    color: #1677E8;
}

.program-copy h2 {
    color: #182B40;
    line-height: 1.3;
}

.program-copy h2 em {
    color: #1677E8;
    font-style: normal;
}

.program-copy p {
    color: #66788A;
    line-height: 1.85;
}

.program-copy .bullet-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 14px;
    margin-top: 25px;
}

.program-copy .bullet-grid span {
    color: #344B63;
    font-size: 14px;
    line-height: 1.6;
}

.program-copy .bullet-grid span::first-letter {
    color: #1677E8;
}


/* EVERYDAY SERVICES */

.care-services {
    background: #FFFFFF;
}

.care-services .heading h2 {
    color: #182B40;
}

.care-services .heading h2 em {
    color: #1677E8;
    font-style: normal;
}

.care-services .heading p {
    max-width: 680px;
    margin-left: auto;
    margin-right: auto;
    color: #66788A;
    line-height: 1.8;
}

.care-services .service-grid {
    margin-top: 42px;
}

.care-services .service {
    padding: 30px 25px;
    background: #FFFFFF;
    border: 1px solid #DFEBF9;
    border-radius: 18px;
    box-shadow: 0 12px 35px rgba(11,78,162,.06);
    transition: .3s ease;
}

.care-services .service:hover {
    transform: translateY(-6px);
    border-color: #1677E8;
    box-shadow: 0 18px 40px rgba(11,78,162,.12);
}

.care-services .service > span {
    display: inline-flex;
    width: 54px;
    height: 54px;
    align-items: center;
    justify-content: center;
    border-radius: 15px;
    background: #EAF3FF;
    color: #0B4EA2;
    font-size: 25px;
}

.care-services .service h3 {
    margin: 18px 0 10px;
    color: #0B4EA2;
    font-size: 19px;
}

.care-services .service p {
    margin: 0;
    color: #66788A;
    font-size: 14px;
    line-height: 1.8;
}


/* SUPPORT SECTION */

.care-support {
    background: linear-gradient(
        120deg,
        #0B4EA2,
        #1677E8
    );
}

.care-support .eyebrow {
    color: #DCEBFF;
}

.care-support .support-copy h2 {
    color: #FFFFFF;
}

.care-support .support-copy p {
    color: rgba(255,255,255,.88);
}

.care-support .btn.white {
    background: #FFFFFF;
    color: #0B4EA2;
    border: 1px solid #FFFFFF;
}

.care-support .btn.white:hover {
    background: #EAF3FF;
}


/* RESPONSIVE */

@media (max-width: 900px) {
    .care-hero {
        padding: 75px 0;
    }

    .program .program-img img {
        height: 350px;
    }
}

@media (max-width: 600px) {
    .care-hero {
        padding: 60px 0;
    }

    .care-hero h1 {
        font-size: 37px;
    }

    .program .program-img img {
        height: 270px;
    }

    .program-copy .bullet-grid {
        grid-template-columns: 1fr;
        gap: 11px;
    }

    .care-services .service {
        padding: 25px 20px;
    }
}

</style>

<!-- SERVICES HERO -->
<section class="page-hero care-hero">
    <div class="container reveal">

        <span class="eyebrow light">OUR SERVICES</span>

        <h1>
            Care for every generation,
            <em>support for every life.</em>
        </h1>

        <p>
            Ashraya Foundation believes everyone deserves
            love, care, protection and dignity. We are committed
            to supporting orphaned children, abandoned senior
            citizens, vulnerable adults and people in need
            through compassion and essential care.
        </p>

    </div>
</section>


<!-- CARE AND SHELTER -->
<section class="section" id="shelter">
    <div class="container program">

        <div class="program-img reveal">
            <img src="assets/images/home/activity.jpg"
                 alt="A welcoming and supportive care environment">
        </div>

        <div class="program-copy reveal delay-1">

            <span class="eyebrow">CARE FOR EVERYONE</span>

            <h2>
                A safe and welcoming place
                <em>to belong.</em>
            </h2>

            <p>
                Every individual deserves a secure and
                supportive environment. We aim to provide
                shelter, nutritious food, personal assistance
                and compassionate care to orphaned children,
                elderly people and individuals facing
                difficult circumstances.
            </p>

            <div class="bullet-grid">
                <span>✓ Safe and supportive environment</span>
                <span>✓ Daily care and assistance</span>
                <span>✓ Food and basic essentials</span>
                <span>✓ Personal hygiene support</span>
                <span>✓ Emotional care and companionship</span>
                <span>✓ Respect and dignity</span>
            </div>

        </div>

    </div>
</section>


<!-- CHILDREN AND PERSONAL DEVELOPMENT -->
<section class="section care-soft-section" id="education">
    <div class="container program reverse">

        <div class="program-img reveal">
            <img src="assets/images/care/elder-care.jpg"
                 alt="People receiving care and participating in activities">
        </div>

        <div class="program-copy reveal delay-1">

            <span class="eyebrow">CHILDREN'S CARE & DEVELOPMENT</span>

            <h2>
                Every child deserves
                <em>love, care and protection.</em>
            </h2>

            <p>
                Children without parental care deserve a safe,
                loving and supportive environment. We aim to
                encourage their overall well-being through
                proper care, education, guidance, recreation
                and opportunities to develop confidence
                and independence.
            </p>

            <div class="bullet-grid">
                <span>✓ Children's safety and protection</span>
                <span>✓ Education and guidance</span>
                <span>✓ Life skills development</span>
                <span>✓ Creative and recreational activities</span>
                <span>✓ Emotional support and affection</span>
                <span>✓ Confidence and independence</span>
            </div>

        </div>

    </div>
</section>


<!-- EVERYDAY SUPPORT -->
<section class="section care-services">
    <div class="container">

        <div class="heading centered reveal">

            <span class="eyebrow">EVERYDAY SUPPORT</span>

            <h2>
                Small acts of care,
                <em>meaningful differences.</em>
            </h2>

            <p>
                From nutritious meals and safe shelter to
                healthcare, companionship and emotional support,
                we believe every act of kindness can make
                a meaningful difference in someone's life.
            </p>

        </div>


        <div class="service-grid">

            <div class="service reveal" id="food">
                <span>🍲</span>

                <h3>Food & Nutrition</h3>

                <p>
                    Supporting access to nutritious food,
                    regular meals, clean drinking water
                    and essential daily needs.
                </p>
            </div>


            <div class="service reveal delay-1" id="health">
                <span>♥</span>

                <h3>Health & Well-being</h3>

                <p>
                    Encouraging health awareness, personal
                    hygiene, emotional well-being and
                    access to appropriate healthcare.
                </p>
            </div>


            <div class="service reveal delay-2" id="development">
                <span>📚</span>

                <h3>Education & Life Skills</h3>

                <p>
                    Supporting children's education,
                    practical knowledge, life skills
                    and opportunities for a better future.
                </p>
            </div>


            <div class="service reveal" id="activities">
                <span>☀</span>

                <h3>Activities & Companionship</h3>

                <p>
                    Promoting recreation, celebrations,
                    social interaction and meaningful
                    companionship for all generations.
                </p>
            </div>


            <div class="service reveal delay-1" id="essentials">
                <span>🏠</span>

                <h3>Shelter & Essentials</h3>

                <p>
                    Supporting access to safe living
                    environments, clothing, personal
                    hygiene products and basic necessities.
                </p>
            </div>


            <div class="service reveal delay-2" id="community">
                <span>🤝</span>

                <h3>Community Support</h3>

                <p>
                    Bringing volunteers, supporters and
                    communities together to help orphaned
                    children, elderly people and individuals
                    facing challenging circumstances.
                </p>
            </div>

        </div>

    </div>
</section>


<!-- SUPPORT CTA -->
<section class="support-strip care-support">
    <div class="container support-grid">

        <div class="support-copy">

            <span class="eyebrow light">
                BE A PART OF THE CHANGE
            </span>

            <h2>
                Your kindness can bring hope
                to every generation.
            </h2>

            <p>
                Your support can help provide food, shelter,
                healthcare, protection, education and
                compassionate care to orphaned children,
                senior citizens and people who need
                a helping hand.
            </p>

        </div>

        <a class="btn white" href="donation.php">
            Support Ashraya <span>↗</span>
        </a>

    </div>
</section>


<?php require 'includes/footer.php'; ?>
