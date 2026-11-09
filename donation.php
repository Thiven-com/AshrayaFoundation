<?php
$pageTitle = 'Donation';
$activePage = 'donation';

require 'includes/header.php';

$donationPhone = '9000092181';
$displayPhone = '+91 90000 92181';
?>
<style>
  /* =========================================================
   ASHRAYA DIGITAL DONATION
   Google Pay / PhonePe
   ========================================================= */

.donation-intro {
    color: #68746d;
    line-height: 1.7;
    margin: 10px 0 20px;
}

.digital-pay-box {
    display: flex;
    align-items: center;
    gap: 15px;
    margin: 20px 0 15px;
    padding: 17px;
    border: 1px solid #eadfd4;
    border-radius: 18px;
    background: linear-gradient(
        135deg,
        #fffaf5,
        #f3f9f5
    );
}

.digital-pay-icon {
    width: 54px;
    height: 54px;
    min-width: 54px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 15px;

    background: linear-gradient(
        135deg,
        #174b32,
        #e97835
    );

    color: #fff;

    font-size: 12px;
    font-weight: 900;
}

.digital-pay-box > div:last-child {
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.digital-pay-label {
    color: #e97835;

    font-size: 10px;
    font-weight: 900;

    letter-spacing: 1px;
}

.digital-pay-box strong {
    color: #174b32;
    font-size: 21px;
}

.digital-pay-box small {
    color: #68746d;
    line-height: 1.5;
}

.payment-note {
    display: block;

    margin-top: 13px;

    color: #6d776f;

    line-height: 1.6;
}


/* Digital Donation Box */

.digital-donation-box {
    background: linear-gradient(
        145deg,
        #123c29,
        #2f7350
    ) !important;
}

.digital-donation-box h3 {
    color: #fff !important;

    font-size: 28px;

    margin: 18px 0 8px;
}

.digital-donation-box > p {
    color: rgba(255,255,255,.82) !important;

    line-height: 1.7;
}


/* Phone Number */

.phone-payment {
    margin: 22px 0;

    padding: 18px;

    border: 1px solid rgba(255,255,255,.2);

    border-radius: 18px;

    background: rgba(255,255,255,.09);
}

.phone-payment small {
    display: block;

    color: #ffb06f;

    font-size: 10px;

    font-weight: 900;

    letter-spacing: 1.2px;

    margin-bottom: 6px;
}

.phone-payment strong {
    display: block;

    color: #fff;

    font-size: 27px;

    letter-spacing: 1px;
}


/* Call / WhatsApp */

.payment-actions {
    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 10px;
}

.payment-action {
    display: flex;

    align-items: center;

    gap: 10px;

    padding: 13px;

    border-radius: 15px;

    background: #fff;

    color: #174b32 !important;

    text-decoration: none;

    transition: .3s ease;
}

.payment-action:hover {
    transform: translateY(-3px);

    box-shadow:
        0 12px 25px rgba(0,0,0,.15);
}

.payment-action > span {
    display: flex;

    align-items: center;
    justify-content: center;

    width: 38px;
    height: 38px;

    border-radius: 11px;

    background: #fff0e5;

    color: #e97835;

    font-weight: 900;
}

.payment-action div {
    display: flex;

    flex-direction: column;
}

.payment-action strong {
    color: #174b32;

    font-size: 13px;
}

.payment-action small {
    color: #6d776f;

    font-size: 10px;
}


/* Instructions */

.payment-tip {
    margin-top: 17px;

    padding-top: 17px;

    border-top:
        1px solid rgba(255,255,255,.16);
}

.payment-tip strong {
    color: #ffb06f;
}

.payment-tip p {
    margin: 6px 0 0;

    color: rgba(255,255,255,.80);

    font-size: 12px;

    line-height: 1.7;
}


/* Mobile */

@media(max-width:700px) {

    .payment-actions {
        grid-template-columns: 1fr;
    }

    .digital-pay-box {
        align-items: flex-start;
    }

    .digital-pay-box strong {
        font-size: 18px;
    }

    .phone-payment strong {
        font-size: 23px;
    }

}
</style>

<!-- Donation Hero -->
<section class="donation-hero">
    <div class="container reveal">

        <span class="eyebrow light">
            SUPPORT ASHRAYA OLDAGE HOME
        </span>

        <h1>
            Give care today.
            <em>Bring comfort tomorrow.</em>
        </h1>

        <p>
            Your contribution helps provide nutritious food, medicines,
            healthcare, daily essentials and a safe, dignified home
            for senior citizens.
        </p>

    </div>
</section>


<!-- Donation Section -->
<section class="section donation-section">

    <div class="container donation-grid">

        <!-- Donation Amount -->
        <div class="donate-box reveal">

            <span class="eyebrow">
                CHOOSE YOUR CONTRIBUTION
            </span>

            <h2>
                Every contribution helps a senior citizen.
            </h2>

            <p class="donation-intro">
                Choose an amount below and donate directly through
                Google Pay or PhonePe.
            </p>


            <!-- Amount Buttons -->
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


            <!-- Custom Amount -->
            <label class="custom">

                ₹

                <input
                    id="amount"
                    type="number"
                    min="1"
                    value="1000"
                    placeholder="Other amount"
                >

            </label>


            <!-- Google Pay / PhonePe -->
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
                        or PhonePe to make your donation.
                    </small>

                </div>

            </div>


            <!-- Copy Number -->
            <button
                class="btn primary full"
                type="button"
                id="copyDonationNumber"
            >
                Copy Donation Number
                <span>↗</span>
            </button>


            <small class="payment-note">
                Open Google Pay or PhonePe, select this number,
                enter your donation amount and complete the payment.
            </small>

        </div>


        <!-- Digital Payment Box -->
        <aside class="bank-box digital-donation-box reveal delay-1">

            <div class="bank-head">

                <span>
                    DIGITAL DONATION
                </span>

                <b>₹</b>

            </div>


            <h3>
                Donate through Google Pay or PhonePe
            </h3>

            <p>
                You can support Ashraya Oldage Home directly
                using the donation mobile number.
            </p>


            <!-- Donation Number -->
            <div class="phone-payment">

                <small>
                    DONATION MOBILE NUMBER
                </small>

                <strong>
                    <?= e($displayPhone) ?>
                </strong>

            </div>


            <!-- Actions -->
            <div class="payment-actions">

                <a
                    class="payment-action"
                    href="tel:<?= e($donationPhone) ?>"
                >

                    <span>☎</span>

                    <div>
                        <strong>
                            Call
                        </strong>

                        <small>
                            <?= e($displayPhone) ?>
                        </small>
                    </div>

                </a>


                <a
                    class="payment-action whatsapp-action"
                    href="https://wa.me/91<?= e($donationPhone) ?>"
                    target="_blank"
                    rel="noopener"
                >

                    <span>◉</span>

                    <div>
                        <strong>
                            WhatsApp
                        </strong>

                        <small>
                            Contact Ashraya
                        </small>
                    </div>

                </a>

            </div>


            <!-- Instructions -->
            <div class="payment-tip">

                <strong>
                    How to donate
                </strong>

                <p>
                    Open Google Pay or PhonePe →
                    search/select the donation number →
                    enter the amount →
                    verify the recipient →
                    complete the payment.
                </p>

            </div>

        </aside>

    </div>

</section>


<!-- Donation Purpose -->
<section class="section donation-cards">

    <div class="container">

        <div class="heading centered reveal">

            <span class="eyebrow">
                YOUR CONTRIBUTION
            </span>

            <h2>
                Where your support
                <em>makes a difference.</em>
            </h2>

            <p>
                Your support helps Ashraya provide a comfortable,
                healthy and dignified life for senior citizens.
            </p>

        </div>


        <div class="three-grid">

            <!-- Food -->
            <div class="support-card reveal">

                <img
                    src="assets/images/donation/food-support.jpg"
                    alt="Food and daily essentials for senior citizens"
                >

                <h3>
                    Food & Daily Essentials
                </h3>

                <p>
                    Help provide nutritious meals, clothing,
                    personal care items and everyday necessities
                    for senior citizens.
                </p>

            </div>


            <!-- Healthcare -->
            <div class="support-card reveal delay-1">

                <img
                    src="assets/images/donation/health-support.jpg"
                    alt="Healthcare support for senior citizens"
                >

                <h3>
                    Medical Care
                </h3>

                <p>
                    Help provide medicines, medical assistance,
                    health checkups, hygiene and regular healthcare.
                </p>

            </div>


            <!-- Care -->
            <div class="support-card reveal delay-2">

                <img
                    src="assets/images/donation/health-support.jpg"
                    alt="Senior citizen care and wellbeing"
                >

                <h3>
                    Care & Well-being
                </h3>

                <p>
                    Support companionship, emotional care,
                    recreation and dignified daily living
                    for senior citizens.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- Toast -->
<div
    class="toast"
    id="toast"
>
    Donation number copied successfully.
</div>


<script>

document.addEventListener('DOMContentLoaded', function () {

    const amountInput =
        document.getElementById('amount');

    const copyButton =
        document.getElementById('copyDonationNumber');

    const donationNumber =
        '<?= e($donationPhone) ?>';


    /*
    |--------------------------------------------------------------------------
    | Donation Amount Selection
    |--------------------------------------------------------------------------
    */

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

                amountInput.value =
                    this.dataset.amount;

            });

        });


    /*
    |--------------------------------------------------------------------------
    | Copy Donation Number
    |--------------------------------------------------------------------------
    */

    if (copyButton) {

        copyButton.addEventListener('click', function () {

            navigator.clipboard
                .writeText(donationNumber)
                .then(function () {

                    showDonationToast(
                        'Donation number copied: ' +
                        donationNumber
                    );

                })
                .catch(function () {

                    showDonationToast(
                        'Donation Number: ' +
                        donationNumber
                    );

                });

        });

    }


    /*
    |--------------------------------------------------------------------------
    | Toast
    |--------------------------------------------------------------------------
    */

    function showDonationToast(message) {

        const toast =
            document.getElementById('toast');

        toast.textContent = message;

        toast.classList.add('show');

        setTimeout(function () {

            toast.classList.remove('show');

        }, 3000);

    }

});

</script>


<?php require 'includes/footer.php'; ?>