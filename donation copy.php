<?php
$pageTitle = 'Donation'; $activePage = 'donation'; require 'includes/header.php';
?>
<section class="donation-hero"><div class="container reveal"><span class="eyebrow light">SUPPORT ASHRAYA</span><h1>Give care today. <em>Build hope for tomorrow.</em></h1><p>Your contribution directly helps provide food, healthcare, healthcare, medicines, daily essentials and a safe home for senior citizens.</p></div></section>

<section class="section donation-section">
  <div class="container donation-grid">
    <div class="donate-box reveal">
      <span class="eyebrow">CHOOSE YOUR CONTRIBUTION</span><h2>Every contribution helps an orphan senior citizen or senior citizen.</h2>
      <div class="amounts">
        <button type="button" data-amount="500">₹500</button><button type="button" class="selected" data-amount="1000">₹1,000</button><button type="button" data-amount="2500">₹2,500</button><button type="button" data-amount="5000">₹5,000</button>
      </div>
      <label class="custom">₹ <input id="amount" type="number" min="1" value="1000" placeholder="Other amount"></label>
      <button class="btn primary full" type="button" onclick="donationNotice()">Continue to Donate <span>↗</span></button>
      <small>Connect Razorpay or your preferred payment gateway here.</small>
    </div>
    <aside class="bank-box reveal delay-1">
      <div class="bank-head"><span>DIRECT BANK TRANSFER</span><b>₹</b></div>
      <h3>Bank Details</h3><p>You can support Ashraya directly using the account below.</p>
      <div class="bank-lines">
        <div><small>Bank Name</small><strong><?= e($bank['bank_name']) ?></strong></div>
        <div><small>Account Name</small><strong><?= e($bank['account_name']) ?></strong></div>
        <div><small>Account Number</small><strong><?= e($bank['account_number']) ?></strong></div>
        <div><small>IFSC</small><strong><?= e($bank['ifsc']) ?></strong></div>
        <div><small>Branch</small><strong><?= e($bank['branch']) ?></strong></div>
      </div>
      <button class="copy-account" data-copy="<?= e($bank['account_number']) ?>">Copy Account Number</button>
    </aside>
  </div>
</section>

<section class="section donation-cards"><div class="container"><div class="heading centered reveal"><span class="eyebrow">YOUR CONTRIBUTION</span><h2>Where your support helps<em>make a difference.</em></h2></div>
<div class="three-grid">
  <div class="support-card reveal"><img src="assets/images/donation/food-support.jpg" alt="Food support"><h3>Food & Daily Essentials</h3><p>Help provide nutritious meals, clothing and everyday necessities for senior citizens.</p></div>
  <div class="support-card reveal delay-1"><img src="assets/images/donation/health-support.jpg" alt="Healthcare support"><h3>Medical Care for Senior Citizens & Senior Citizenren</h3><p>Help with medicines, medical needs, hygiene and regular health care.</p></div>
  <div class="support-card reveal delay-2"><img src="assets/images/donation/healthcare-support.jpg" alt="Healthcare for Senior Citizen support"><h3>Healthcare for Senior Citizen</h3><p>Support medical expenses, medicines and healthcare essentials and care and well-being needs for senior citizens.</p></div>
</div></div></section>
<div class="toast" id="toast">Thank you for supporting Ashraya. Connect your payment gateway here.</div>
<?php require 'includes/footer.php'; ?>