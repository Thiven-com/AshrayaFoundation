
<?php

$pageTitle = 'Contact Us';
$activePage = 'contact';

$sent = $_SERVER['REQUEST_METHOD'] === 'POST';

require 'includes/header.php';

// Google Maps address
$mapAddress = !empty($site['address'])
    ? $site['address']
    : 'Ashraya Foundation, Katiganikalva Village, Anantapur, Andhra Pradesh 515722';

$mapUrl = 'https://www.google.com/maps/search/?api=1&query='
    . urlencode($mapAddress);

$mapEmbedUrl = 'https://maps.google.com/maps?q='
    . urlencode($mapAddress)
    . '&t=&z=15&ie=UTF8&iwloc=&output=embed';

?>


<style>


/* =========================================
   CONTACT PAGE - ASHRAYA FOUNDATION
   BLUE AND WHITE THEME
========================================= */

/* CONTACT HERO */

.contact-hero {
    position: relative;
    overflow: hidden;
    padding: 100px 0;
    background: linear-gradient(120deg, #0B4EA2, #1677E8);
}

.contact-hero .container {
    position: relative;
    z-index: 1;
}

.contact-hero .eyebrow {
    color: #DCEBFF;
}

.contact-hero h1 {
    max-width: 850px;
    margin: 18px 0;
    color: #FFFFFF;
    font-size: clamp(38px, 5vw, 62px);
    line-height: 1.15;
}

.contact-hero h1 em {
    color: #DCEBFF;
    font-style: normal;
}

.contact-hero p {
    max-width: 720px;
    color: rgba(255,255,255,.88);
    font-size: 17px;
    line-height: 1.85;
}


/* CONTACT SECTION */

.contact-section {
    background: #F0F7FF;
}

.contact-grid {
    display: grid;
    grid-template-columns: .9fr 1.1fr;
    align-items: start;
    gap: 35px;
}


/* CONTACT INFORMATION */

.contact-info {
    padding: 30px 10px 20px 0;
}

.contact-info > .eyebrow {
    color: #1677E8;
}

.contact-info h2 {
    max-width: 430px;
    margin: 15px 0;
    color: #0B4EA2;
    font-size: 34px;
    line-height: 1.3;
}

.contact-info h2 em {
    color: #1677E8;
    font-style: normal;
}

.contact-description {
    margin-bottom: 30px;
    color: #66788A;
    line-height: 1.85;
}


/* CONTACT ROW */

.contact-row {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 19px 0;
    border-bottom: 1px solid #DCE8F5;
}

.contact-row > i {
    display: flex;
    flex-shrink: 0;
    width: 46px;
    height: 46px;
    align-items: center;
    justify-content: center;
    border-radius: 13px;
    background: #E1EFFF;
    color: #0B4EA2;
    font-size: 21px;
    font-style: normal;
}

.contact-row > div {
    display: flex;
    flex-direction: column;
    gap: 6px;
    min-width: 0;
}

.contact-row small {
    color: #1677E8;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1px;
}

.contact-row strong,
.contact-row strong a {
    color: #263D54;
    font-size: 15px;
    line-height: 1.7;
    overflow-wrap: anywhere;
    text-decoration: none;
}

.contact-row strong a:hover {
    color: #1677E8;
}


/* MAP LINK CARD */

.map-card {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 18px;
    margin-top: 25px;
    border: 1px solid #DCE8F5;
    border-radius: 14px;
    background: #FFFFFF;
    text-decoration: none;
    transition: .3s ease;
}

.map-card:hover {
    border-color: #1677E8;
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(11,78,162,.08);
}

.map-card > span {
    font-size: 25px;
}

.map-card > div {
    display: flex;
    flex: 1;
    flex-direction: column;
    gap: 5px;
}

.map-card strong {
    color: #0B4EA2;
    font-size: 15px;
}

.map-card small {
    color: #66788A;
    font-size: 12px;
}

.map-card > b {
    color: #1677E8;
}


/* CONTACT FORM */

.form-card {
    padding: 35px;
    background: #FFFFFF;
    border: 1px solid #DFEBF9;
    border-radius: 22px;
    box-shadow: 0 15px 45px rgba(11,78,162,.08);
}

.form-card > .eyebrow {
    color: #1677E8;
}

.form-card h2 {
    margin: 13px 0;
    color: #0B4EA2;
    font-size: 29px;
}

.form-description {
    margin-bottom: 25px;
    color: #66788A;
    font-size: 14px;
    line-height: 1.8;
}


/* FORM FIELDS */

.form-card form {
    display: flex;
    flex-direction: column;
    gap: 19px;
}

.form-card form label {
    display: flex;
    flex-direction: column;
    gap: 9px;
    color: #263D54;
    font-size: 13px;
    font-weight: 700;
}

.form-card input,
.form-card select,
.form-card textarea {
    width: 100%;
    padding: 14px 15px;
    border: 1px solid #DCE8F5;
    border-radius: 10px;
    outline: none;
    background: #F8FBFF;
    color: #182B40;
    font-family: inherit;
    font-size: 14px;
    transition: .25s ease;
}

.form-card input:focus,
.form-card select:focus,
.form-card textarea:focus {
    border-color: #1677E8;
    background: #FFFFFF;
    box-shadow: 0 0 0 3px rgba(22,119,232,.1);
}

.form-card textarea {
    resize: vertical;
    min-height: 130px;
}

.form-card input::placeholder,
.form-card textarea::placeholder {
    color: #98A8B9;
}


/* FORM BUTTON */

.form-card .btn.primary {
    width: 100%;
    justify-content: center;
    background: linear-gradient(120deg, #0B4EA2, #1677E8);
    color: #FFFFFF;
    border: 0;
    cursor: pointer;
}

.form-card .btn.primary:hover {
    box-shadow: 0 10px 25px rgba(11,78,162,.2);
    transform: translateY(-2px);
}


/* FORM SUCCESS MESSAGE */

.form-card .success {
    padding: 15px;
    margin-bottom: 22px;
    border: 1px solid #B8D8F8;
    border-radius: 10px;
    background: #F0F7FF;
    color: #0B4EA2;
    font-size: 14px;
    line-height: 1.6;
}


/* LOCATION SECTION */

.contact-location {
    padding: 80px 0;
    background: #FFFFFF;
}

.contact-location .heading h2 {
    color: #182B40;
}

.contact-location .heading h2 em {
    color: #1677E8;
    font-style: normal;
}

/* Override the old green/orange heading underline */
.contact-location .heading::after {
    background: linear-gradient(90deg, #0B4EA2, #1677E8) !important;
}

.contact-location .heading p {
    max-width: 680px;
    margin-left: auto;
    margin-right: auto;
    color: #66788A;
    line-height: 1.8;
}


/* FULL WIDTH GOOGLE MAP */

.contact-location .map-embed-full {
    display: block !important;
    width: 100% !important;
    max-width: 100% !important;
    height: 450px !important;
    min-height: 450px !important;
    padding: 8px !important;
    margin-top: 35px;
    overflow: hidden;
    border: 1px solid #DFEBF9;
    border-radius: 22px;
    background: #FFFFFF;
    box-shadow: 0 15px 40px rgba(11,78,162,.08);
}

.contact-location .map-embed-full iframe {
    display: block !important;
    width: 100% !important;
    max-width: 100% !important;
    height: 100% !important;
    min-height: 0 !important;
    border: 0;
    border-radius: 15px;
}


/* MAP DIRECTIONS BUTTON */

.map-directions {
    display: flex;
    justify-content: center;
    margin-top: 25px;
}

.map-directions .btn.primary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: linear-gradient(120deg, #0B4EA2, #1677E8);
    color: #FFFFFF;
    border: 0;
}


/* CONTACT CTA */

.contact-cta {
    padding: 65px 0;
    background: linear-gradient(120deg, #0B4EA2, #1677E8);
}

.contact-cta-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 35px;
}

.contact-cta .eyebrow {
    color: #DCEBFF;
}

.contact-cta h2 {
    max-width: 620px;
    margin: 12px 0;
    color: #FFFFFF;
    font-size: clamp(30px, 4vw, 42px);
    line-height: 1.25;
}

.contact-cta p {
    max-width: 580px;
    color: rgba(255,255,255,.88);
    line-height: 1.8;
}

.contact-cta .btn.white {
    flex-shrink: 0;
    background: #FFFFFF;
    color: #0B4EA2;
    border: 1px solid #FFFFFF;
}

.contact-cta .btn.white:hover {
    background: #EAF3FF;
}


/* RESPONSIVE */

@media (max-width: 950px) {
    .contact-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }

    .contact-info {
        padding-right: 0;
    }
}

@media (max-width: 650px) {
    .contact-hero {
        padding: 65px 0;
    }

    .contact-hero h1 {
        font-size: 37px;
    }

    .form-card {
        padding: 23px 18px;
    }

    .form-card h2 {
        font-size: 24px;
    }

    .contact-info h2 {
        font-size: 29px;
    }

    .contact-cta-inner {
        align-items: flex-start;
        flex-direction: column;
    }

    .contact-cta {
        padding: 48px 0;
    }

    .contact-location {
        padding: 55px 0;
    }

    .contact-location .map-embed-full {
        height: 320px !important;
        min-height: 320px !important;
        margin-top: 25px;
    }
}

</style>

<!-- CONTACT HERO -->
<section class="page-hero contact-hero">
    <div class="container reveal">

        <span class="eyebrow light">
            CONNECT WITH ASHRAYA
        </span>

        <h1>
            Every connection begins
            <em>with a conversation.</em>
        </h1>

        <p>
            Have a question, want to support our mission,
            volunteer or learn more about Ashraya Foundation?
            We are here to listen and connect with you.
            Reach out to us anytime.
        </p>

    </div>
</section>


<!-- CONTACT INFORMATION & FORM -->
<section class="section contact-section">
    <div class="container contact-grid">

        <!-- CONTACT INFORMATION -->
        <div class="contact-info reveal">

            <span class="eyebrow">
                GET IN TOUCH
            </span>

            <h2>
                We would love to
                <em>hear from you.</em>
            </h2>

            <p class="contact-description">
                Whether you are looking for information,
                interested in contributing, volunteering
                or building a partnership, our team
                welcomes your enquiry.
            </p>


            <!-- ADDRESS -->
            <div class="contact-row">
                <i>⌂</i>

                <div>
                    <small>OUR LOCATION</small>

                    <strong>
                        <?= e($site['address'] ?? '') ?>
                    </strong>
                </div>
            </div>


            <!-- PHONE -->
            <?php if (!empty($site['phone'])): ?>
                <div class="contact-row">
                    <i>☎</i>

                    <div>
                        <small>CALL US</small>

                        <strong>
                            <a href="tel:<?= e(preg_replace('/[^0-9+]/', '', $site['phone'])) ?>">
                                <?= e($site['phone']) ?>
                            </a>
                        </strong>
                    </div>
                </div>
            <?php endif; ?>


            <!-- EMAIL -->
            <?php if (!empty($site['email'])): ?>
                <div class="contact-row">
                    <i>✉</i>

                    <div>
                        <small>EMAIL US</small>

                        <strong>
                            <a href="mailto:<?= e($site['email']) ?>">
                                <?= e($site['email']) ?>
                            </a>
                        </strong>
                    </div>
                </div>
            <?php endif; ?>


            <!-- WHATSAPP -->
            <?php if (!empty($site['whatsapp'])): ?>
                <div class="contact-row">
                    <i>◉</i>

                    <div>
                        <small>WHATSAPP</small>

                        <strong>
                            <a
                                href="https://wa.me/<?= e(preg_replace('/\D/', '', $site['whatsapp'])) ?>"
                                target="_blank"
                                rel="noopener noreferrer">
                                Chat with Ashraya
                            </a>
                        </strong>
                    </div>
                </div>
            <?php endif; ?>


            <!-- GOOGLE MAPS LINK -->
            <a
                class="map-card"
                href="<?= e($mapUrl) ?>"
                target="_blank"
                rel="noopener noreferrer">

                <span>📍</span>

                <div>
                    <strong>Find Ashraya Foundation</strong>
                    <small>View our location on Google Maps</small>
                </div>

                <b>↗</b>
            </a>

        </div>


        <!-- CONTACT FORM -->
        <div class="form-card reveal delay-1">

            <?php if ($sent): ?>
                <div class="success">
                    ✓ Thank you. Your message has been received.
                </div>
            <?php endif; ?>

            <span class="eyebrow">
                SEND US A MESSAGE
            </span>

            <h2>
                How can we help you?
            </h2>

            <p class="form-description">
                Share your enquiry with us. We welcome
                messages from individuals, families,
                donors, volunteers and organizations.
            </p>


            <form method="post" action="contact.php">

                <div class="form-row">

                    <label>
                        Your Name

                        <input
                            type="text"
                            name="name"
                            required
                            placeholder="Enter your name">
                    </label>

                    <label>
                        Phone Number

                        <input
                            type="tel"
                            name="phone"
                            placeholder="+91">
                    </label>

                </div>


                <label>
                    Email Address

                    <input
                        type="email"
                        name="email"
                        required
                        placeholder="you@example.com">
                </label>


                <label>
                    Enquiry Type

                    <select name="subject">
                        <option value="General Enquiry">
                            General Enquiry
                        </option>

                        <option value="Donation">
                            Donation & Support
                        </option>

                        <option value="Volunteering">
                            Volunteering
                        </option>

                        <option value="Visit">
                            Visit & Interaction
                        </option>

                        <option value="Community Support">
                            Community Support
                        </option>

                        <option value="Partnership">
                            Partnership & Collaboration
                        </option>

                        <option value="Other">
                            Other Enquiry
                        </option>
                    </select>
                </label>


                <label>
                    Your Message

                    <textarea
                        name="message"
                        required
                        rows="5"
                        placeholder="Tell us how we can help you..."></textarea>
                </label>


                <button class="btn primary full" type="submit">
                    Send Your Message
                    <span>↗</span>
                </button>

            </form>

        </div>

    </div>
</section>


<!-- LOCATION SECTION -->
<section class="map-section contact-location">
    <div class="container">

        <div class="heading centered reveal">

            <span class="eyebrow">
                VISIT ASHRAYA
            </span>

            <h2>
                We are always happy
                <em>to connect with you.</em>
            </h2>

            <p>
                Find our location and connect with Ashraya
                Foundation. We welcome your enquiries,
                visits and support.
            </p>

        </div>


        <!-- FULL WIDTH GOOGLE MAP -->
        <div class="map-embed-full reveal">

            <iframe
                src="<?= e($mapEmbedUrl) ?>"
                title="Ashraya Foundation Location"
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>

        <div class="map-directions">
            <a
                href="<?= e($mapUrl) ?>"
                target="_blank"
                rel="noopener noreferrer"
                class="btn primary">

                Get Directions
                <span>↗</span>

            </a>
        </div>

    </div>
</section>


<!-- CONTACT CTA -->
<section class="contact-cta">
    <div class="container contact-cta-inner reveal">

        <div>
            <span class="eyebrow light">
                TOGETHER WE CAN MAKE A DIFFERENCE
            </span>

            <h2>
                Your support can bring
                hope to every generation.
            </h2>

            <p>
                Be part of our journey through your kindness,
                time, contributions and community support.
            </p>
        </div>

        <a href="donation.php" class="btn white">
            Support Ashraya
            <span>↗</span>
        </a>

    </div>
</section>


<?php require 'includes/footer.php'; ?>
