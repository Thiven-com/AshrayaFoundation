
<?php

$pageTitle = 'Support Ashraya';
$activePage = 'donation';
require 'includes/header.php';

$donationPhone = '9000092181';
$displayPhone = '+91 90000 92181';

?>



<style>


/* =========================================
   DONATION PAGE - ASHRAYA FOUNDATION
   BLUE AND WHITE THEME
========================================= */

:root {
    --donate-dark: #0B4EA2;
    --donate-blue: #1677E8;
    --donate-light: #F0F7FF;
    --donate-white: #FFFFFF;
    --donate-text: #182B40;
    --donate-muted: #66788A;
    --donate-border: #DFEBF9;
}


/* DONATION HERO */

.donation-hero {
    position: relative;
    overflow: hidden;
    padding: 100px 0;
    background: linear-gradient(
        120deg,
        #0B4EA2,
        #1677E8
    );
}

.donation-hero .container {
    position: relative;
    z-index: 1;
}

.donation-hero .eyebrow {
    color: #DCEBFF;
}

.donation-hero h1 {
    max-width: 850px;
    margin: 18px 0;
    color: #FFFFFF;
    font-size: clamp(38px, 5vw, 62px);
    line-height: 1.15;
}

.donation-hero h1 em {
    color: #DCEBFF;
    font-style: normal;
}

.donation-hero p {
    max-width: 720px;
    color: rgba(255,255,255,.88);
    font-size: 17px;
    line-height: 1.85;
}


/* DONATION SECTION */

.donation-section {
    background: #F0F7FF;
}

.donation-grid {
    display: grid;
    grid-template-columns: 1.15fr .85fr;
    gap: 30px;
    align-items: start;
}


/* DONATION FORM BOX */

.donate-box {
    padding: 35px;
    background: #FFFFFF;
    border: 1px solid #DFEBF9;
    border-radius: 22px;
    box-shadow: 0 15px 45px rgba(11,78,162,.08);
}

.donate-box .eyebrow {
    color: #1677E8;
}

.donate-box h2 {
    margin: 15px 0;
    color: #0B4EA2;
    font-size: 29px;
    line-height: 1.35;
}

.donation-intro {
    color: #66788A;
    line-height: 1.8;
}


/* AMOUNT BUTTONS */

.amounts {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 13px;
    margin: 25px 0;
}

.amounts button {
    min-height: 52px;
    border: 1px solid #D6E5F7;
    border-radius: 12px;
    background: #F7FAFF;
    color: #0B4EA2;
    font-size: 17px;
    font-weight: 700;
    cursor: pointer;
    transition: .25s ease;
}

.amounts button:hover,
.amounts button.selected {
    color: #FFFFFF;
    background: linear-gradient(
        120deg,
        #0B4EA2,
        #1677E8
    );
    border-color: #1677E8;
}


/* CUSTOM AMOUNT */

.custom {
    display: flex;
    align-items: center;
    gap: 10px;
    min-height: 55px;
    padding: 0 17px;
    margin-bottom: 24px;
    border: 1px solid #D6E5F7;
    border-radius: 12px;
    color: #0B4EA2;
    font-size: 19px;
    font-weight: 700;
}

.custom:focus-within {
    border-color: #1677E8;
    box-shadow: 0 0 0 3px rgba(22,119,232,.1);
}

.custom input {
    width: 100%;
    border: 0;
    outline: 0;
    background: transparent;
    color: #182B40;
    font-size: 16px;
}


/* DIGITAL PAYMENT BOX */

.digital-pay-box {
    display: flex;
    align-items: center;
    gap: 17px;
    padding: 20px;
    margin-bottom: 22px;
    background: #F0F7FF;
    border: 1px solid #DCEBFC;
    border-radius: 15px;
}

.digital-pay-icon {
    display: flex;
    flex-shrink: 0;
    width: 55px;
    height: 55px;
    align-items: center;
    justify-content: center;
    border-radius: 14px;
    background: linear-gradient(
        135deg,
        #0B4EA2,
        #1677E8
    );
    color: #FFFFFF;
    font-size: 16px;
    font-weight: 800;
}

.digital-pay-box > div:last-child {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.digital-pay-label {
    color: #1677E8;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1px;
}

.digital-pay-box strong {
    color: #0B4EA2;
    font-size: 19px;
}

.digital-pay-box small {
    color: #66788A;
    line-height: 1.6;
}


/* PRIMARY BUTTON */

.donate-box .btn.primary {
    background: linear-gradient(
        120deg,
        #0B4EA2,
        #1677E8
    );
    color: #FFFFFF;
    border: 0;
    cursor: pointer;
}

.donate-box .btn.primary:hover {
    box-shadow: 0 10px 25px rgba(11,78,162,.22);
    transform: translateY(-2px);
}

.donate-box .btn.full {
    width: 100%;
    justify-content: center;
}

.payment-note {
    display: block;
    margin-top: 17px;
    color: #718196;
    line-height: 1.7;
}


/* DIGITAL DONATION DETAILS */

.digital-donation-box {
    padding: 32px;
    background: #FFFFFF;
    border: 1px solid #DFEBF9;
    border-radius: 22px;
    box-shadow: 0 15px 45px rgba(11,78,162,.08);
}

.bank-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 25px;
}

.bank-head span {
    color: #1677E8;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 1px;
}

.bank-head b {
    display: flex;
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
    font-size: 23px;
}

.digital-donation-box h3 {
    margin-bottom: 12px;
    color: #0B4EA2;
    font-size: 23px;
    line-height: 1.4;
}

.digital-donation-box > p {
    color: #66788A;
    line-height: 1.8;
}


/* PHONE NUMBER */

.phone-payment {
    display: flex;
    flex-direction: column;
    gap: 9px;
    padding: 20px;
    margin: 22px 0;
    background: #F0F7FF;
    border: 1px solid #DCEBFC;
    border-radius: 14px;
}

.phone-payment small {
    color: #1677E8;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1px;
}

.phone-payment strong {
    color: #0B4EA2;
    font-size: 23px;
}


/* PAYMENT ACTIONS */

.payment-actions {
    display: grid;
    gap: 12px;
}

.payment-action {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px;
    background: #F7FAFF;
    border: 1px solid #DFEBF9;
    border-radius: 13px;
    text-decoration: none;
    transition: .25s ease;
}

.payment-action:hover {
    background: #EAF3FF;
    border-color: #1677E8;
}

.payment-action > span {
    display: flex;
    width: 43px;
    height: 43px;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    background: #EAF3FF;
    color: #0B4EA2;
    font-size: 21px;
}

.payment-action > div {
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.payment-action strong {
    color: #0B4EA2;
}

.payment-action small {
    color: #66788A;
}

.whatsapp-action > span {
    background: #EAF3FF;
    color: #1677E8;
}


/* PAYMENT TIP */

.payment-tip {
    padding: 20px;
    margin-top: 23px;
    background: #F0F7FF;
    border-left: 4px solid #1677E8;
    border-radius: 0 12px 12px 0;
}

.payment-tip strong {
    color: #0B4EA2;
}

.payment-tip p {
    margin: 8px 0 0;
    color: #66788A;
    font-size: 14px;
    line-height: 1.8;
}


/* DONATION PURPOSE CARDS */

.donation-cards {
    background: #FFFFFF;
}

.donation-cards .heading h2 {
    color: #182B40;
}

.donation-cards .heading h2 em {
    color: #1677E8;
    font-style: normal;
}

.donation-cards .heading p {
    max-width: 680px;
    margin-left: auto;
    margin-right: auto;
    color: #66788A;
    line-height: 1.8;
}

.donation-cards .three-grid {
    margin-top: 40px;
}

.donation-cards .support-card {
    overflow: hidden;
    background: #FFFFFF;
    border: 1px solid #DFEBF9;
    border-radius: 18px;
    box-shadow: 0 12px 35px rgba(11,78,162,.07);
    transition: .3s ease;
}

.donation-cards .support-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 40px rgba(11,78,162,.13);
}

.donation-cards .support-card img {
    display: block;
    width: 100%;
    height: 220px;
    object-fit: cover;
}

.donation-cards .support-card h3 {
    margin: 20px 20px 10px;
    color: #0B4EA2;
    font-size: 20px;
}

.donation-cards .support-card p {
    padding: 0 20px 22px;
    margin: 0;
    color: #66788A;
    font-size: 14px;
    line-height: 1.8;
}


/* DONATION MESSAGE */

.donation-message {
    padding: 70px 0;
    text-align: center;
    background: linear-gradient(
        120deg,
        #0B4EA2,
        #1677E8
    );
}

.donation-message .eyebrow {
    color: #DCEBFF;
}

.donation-message h2 {
    max-width: 760px;
    margin: 16px auto;
    color: #FFFFFF;
    font-size: clamp(30px, 4vw, 43px);
    line-height: 1.3;
}

.donation-message p {
    max-width: 650px;
    margin: 0 auto 25px;
    color: rgba(255,255,255,.88);
    line-height: 1.8;
}

.donation-message .btn.white {
    background: #FFFFFF;
    color: #0B4EA2;
    border: 1px solid #FFFFFF;
}

.donation-message .btn.white:hover {
    background: #EAF3FF;
}


/* TOAST */

.toast {
    position: fixed;
    bottom: 25px;
    left: 50%;
    z-index: 9999;
    padding: 14px 23px;
    border-radius: 10px;
    background: #0B4EA2;
    color: #FFFFFF;
    font-size: 14px;
    box-shadow: 0 8px 25px rgba(11,78,162,.2);
    opacity: 0;
    visibility: hidden;
    transform: translate(-50%, 20px);
    transition: .3s ease;
}

.toast.show {
    opacity: 1;
    visibility: visible;
    transform: translate(-50%, 0);
}


/* RESPONSIVE */

@media (max-width: 950px) {

    .donation-grid {
        grid-template-columns: 1fr;
    }

}

@media (max-width: 650px) {

    .donation-hero {
        padding: 65px 0;
    }

    .donation-hero h1 {
        font-size: 37px;
    }

    .donate-box,
    .digital-donation-box {
        padding: 23px 18px;
    }

    .donate-box h2 {
        font-size: 24px;
    }

    .digital-pay-box {
        align-items: flex-start;
        padding: 15px;
    }

    .digital-pay-box strong {
        font-size: 17px;
    }

    .phone-payment strong {
        font-size: 20px;
    }

    .donation-cards .support-card img {
        height: 200px;
    }

    .donation-message {
        padding: 50px 0;
    }

}

</style>
<!-- =====================================
     DONATION HERO
===================================== -->

<section class="donation-hero">

    <div class="container reveal">

        <span class="eyebrow light">
            SUPPORT ASHRAYA FOUNDATION
        </span>

        <h1>
            Give kindness today.
            <em>Create hope for tomorrow.</em>
        </h1>

        <p>
            Every individual deserves care, dignity and
            opportunities for a better life. Your contribution
            can support children, adults, senior citizens
            and people facing difficult circumstances.
            Together, we can make a meaningful difference.
        </p>

    </div>

</section>


<!-- =====================================
     DONATION SECTION
===================================== -->

<section class="section donation-section">

    <div class="container donation-grid">

        <!-- DONATION AMOUNT -->

        <div class="donate-box reveal">

            <span class="eyebrow">
                MAKE A CONTRIBUTION
            </span>

            <h2>
                Every contribution can make a difference.
            </h2>

            <p class="donation-intro">
                Choose an amount below and contribute
                directly through Google Pay or PhonePe.
                Every act of kindness matters.
            </p>


            <!-- AMOUNT BUTTONS -->

            <div class="amounts">

                <button type="button" data-amount="500">
                    ₹500
                </button>

                <button
                    type="button"
                    class="selected"
                    data-amount="1000"
                >
                    ₹1,000
                </button>

                <button type="button" data-amount="2500">
                    ₹2,500
                </button>

                <button type="button" data-amount="5000">
                    ₹5,000
                </button>

            </div>


            <!-- CUSTOM AMOUNT -->

            <label class="custom">

                ₹

                <input
                    id="amount"
                    type="number"
                    min="1"
                    value="1000"
                    placeholder="Enter another amount"
                >

            </label>


            <!-- DIGITAL PAYMENT DETAILS -->

            <div class="digital-pay-box">

                <div class="digital-pay-icon">
                    UPI
                </div>

                <div>

                    <span class="digital-pay-label">
                        GOOGLE PAY / PHONEPE
                    </span>

                    <strong>
                        <?= e($displayPhone) ?>
                    </strong>

                    <small>
                        Use this mobile number in Google Pay
                        or PhonePe to make your contribution.
                    </small>

                </div>

            </div>


            <!-- COPY NUMBER -->

            <button
                class="btn primary full"
                type="button"
                id="copyDonationNumber"
            >

                Copy Donation Number

                <span>↗</span>

            </button>


            <small class="payment-note">
                Open Google Pay or PhonePe, use the donation
                number, enter your contribution amount and
                verify the recipient before completing payment.
            </small>

        </div>


        <!-- DIGITAL PAYMENT DETAILS -->

        <aside class="bank-box digital-donation-box reveal delay-1">

            <div class="bank-head">

                <span>
                    DIGITAL DONATION
                </span>

                <b>₹</b>

            </div>


            <h3>
                Support through Google Pay or PhonePe
            </h3>

            <p>
                Make your contribution to Ashraya Foundation
                using the donation mobile number.
            </p>


            <!-- DONATION NUMBER -->

            <div class="phone-payment">

                <small>
                    DONATION MOBILE NUMBER
                </small>

                <strong>
                    <?= e($displayPhone) ?>
                </strong>

            </div>


            <!-- CONTACT ACTIONS -->

            <div class="payment-actions">

                <a
                    class="payment-action"
                    href="tel:<?= e($donationPhone) ?>"
                >

                    <span>☎</span>

                    <div>

                        <strong>Call</strong>

                        <small>
                            <?= e($displayPhone) ?>
                        </small>

                    </div>

                </a>


                <a
                    class="payment-action whatsapp-action"
                    href="https://wa.me/91<?= e($donationPhone) ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                >

                    <span>◉</span>

                    <div>

                        <strong>WhatsApp</strong>

                        <small>
                            Contact Ashraya
                        </small>

                    </div>

                </a>

            </div>


            <!-- PAYMENT INSTRUCTIONS -->

            <div class="payment-tip">

                <strong>
                    How to contribute
                </strong>

                <p>
                    Open Google Pay or PhonePe → Search or enter
                    the donation mobile number → Verify the
                    recipient → Enter your amount → Complete
                    the payment.
                </p>

            </div>

        </aside>

    </div>

</section>


<!-- =====================================
     DONATION PURPOSE
===================================== -->

<section class="section donation-cards">

    <div class="container">

        <div class="heading centered reveal">

            <span class="eyebrow">
                YOUR CONTRIBUTION
            </span>

            <h2>
                Your kindness can support
                <em>lives and communities.</em>
            </h2>

            <p>
                Your generosity can help provide essential
                resources, care and opportunities to people
                across different generations.
            </p>

        </div>


        <div class="three-grid">


            <!-- FOOD SUPPORT -->

            <div class="support-card reveal">

                <img
                    src="assets/images/donation/food-support.jpg"
                    alt="Food and essential support"
                >

                <h3>
                    Food & Daily Essentials
                </h3>

                <p>
                    Help support access to nutritious meals,
                    clothing, personal care items and
                    everyday necessities for people in need.
                </p>

            </div>


            <!-- HEALTHCARE SUPPORT -->

            <div class="support-card reveal delay-1">

                <img src="assets/images/gallery/gallery-07.jpg"
     alt="Health and well-being support for children, adults and senior citizens">

                <h3>
                    Health & Well-being
                </h3>

                <p>
                    Support health awareness, medical assistance,
                    medicines, hygiene and emotional well-being
                    for individuals who need care.
                </p>

            </div>


            <!-- EDUCATION AND DEVELOPMENT -->

            <div class="support-card reveal delay-2">

               <img src="assets/images/gallery/gallery-06.jpg"
     alt="Education and personal development activities at Ashraya Foundation">

                <h3>
                    Education & Development
                </h3>

                <p>
                    Encourage education, learning opportunities,
                    life skills, personal development and
                    activities that build confidence.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- =====================================
     SUPPORT MESSAGE
===================================== -->

<section class="donation-message">

    <div class="container donation-message-inner reveal">

        <span class="eyebrow light">
            EVERY CONTRIBUTION MATTERS
        </span>

        <h2>
            Together, we can build a more caring world.
        </h2>

        <p>
            Your support is more than a donation.
            It is an expression of kindness, humanity
            and hope for a better tomorrow.
        </p>

        <a href="contact.php" class="btn white">
            Get in Touch <span>↗</span>
        </a>

    </div>

</section>


<!-- =====================================
     TOAST MESSAGE
===================================== -->

<div class="toast" id="toast">
    Donation number copied successfully.
</div>


<!-- =====================================
     DONATION JAVASCRIPT
===================================== -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    const amountInput =
        document.getElementById('amount');

    const copyButton =
        document.getElementById('copyDonationNumber');

    const donationNumber =
        '<?= e($donationPhone) ?>';


    // DONATION AMOUNT SELECTION

    document
        .querySelectorAll('.amounts button')
        .forEach(function (button) {

            button.addEventListener('click', function () {

                document
                    .querySelectorAll('.amounts button')
                    .forEach(function (item) {
                        item.classList.remove('selected');
                    });

                this.classList.add('selected');

                amountInput.value = this.dataset.amount;

            });

        });


    // CLEAR PRESET SELECTION WHEN CUSTOM AMOUNT IS ENTERED

    amountInput.addEventListener('input', function () {

        document
            .querySelectorAll('.amounts button')
            .forEach(function (item) {
                item.classList.remove('selected');
            });

    });


    // COPY DONATION NUMBER

    if (copyButton) {

        copyButton.addEventListener('click', function () {

            if (navigator.clipboard && window.isSecureContext) {

                navigator.clipboard
                    .writeText(donationNumber)
                    .then(function () {

                        showDonationToast(
                            'Donation number copied: ' + donationNumber
                        );

                    })
                    .catch(function () {

                        showDonationToast(
                            'Donation Number: ' + donationNumber
                        );

                    });

            } else {

                const tempInput = document.createElement('textarea');

                tempInput.value = donationNumber;

                document.body.appendChild(tempInput);

                tempInput.select();

                try {
                    document.execCommand('copy');

                    showDonationToast(
                        'Donation number copied: ' + donationNumber
                    );

                } catch (error) {

                    showDonationToast(
                        'Donation Number: ' + donationNumber
                    );

                }

                document.body.removeChild(tempInput);

            }

        });

    }


    // TOAST MESSAGE

    function showDonationToast(message) {

        const toast = document.getElementById('toast');

        toast.textContent = message;

        toast.classList.add('show');

        setTimeout(function () {

            toast.classList.remove('show');

        }, 3000);

    }

});

</script>


<?php require 'includes/footer.php'; ?>
