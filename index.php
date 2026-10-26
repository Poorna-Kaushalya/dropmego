<?php
$pageTitle = "DropMe Go | Designated Driver Service";
$whatsappNumber = "94763933586";  // Contatct No
$phoneDisplay = "+94 77763933586"; 
$phoneLink = "+94763933586"; 
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#071426">
  <meta name="description" content="DropMe Go designated driver service. Get home safely with a professional driver.">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="" id="top">
  <div class="container nav-wrap"> 
  <a class="brand" href="#top" aria-label="DropMe Go home">
      <img
          src="assets/img/logo2.png"
          alt="DropMe Go — Designated Driver Service"
          class="brand-logo"
      >
  </a>
    <button class="menu-toggle" id="menuToggle" aria-label="Open navigation" aria-expanded="false" aria-controls="mainNav">
      <i class="bi bi-list"></i>
    </button>
    <nav class="main-nav" id="mainNav">
      <a href="#services">Services</a>
      <a href="#how-it-works">How it works</a>
      <a href="#pricing">Pricing</a>
      <a href="#contact">Contact</a>
      <a class="button button-small button-gold nav-cta" href="#booking">Book a Driver <i class="bi bi-arrow-up-right"></i></a>
    </nav>
  </div>
</header>

<main>
  <section class="hero">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
      <div class="hero-copy">
        <p class="eyebrow"><span></span> YOUR SAFE JOURNEY STARTS HERE</p>
        <h1>Your journey.<br><em>Our responsibility.</em></h1>
        <p class="hero-description">Enjoy the ride. Leave the driving to us. Our Professional driver takes you and your car hone safely.</p>
        <div class="hero-actions">
          <a class="button button-gold" href="#booking">Book a Driver <i class="bi bi-arrow-up-right"></i></a>
          <a class="button button-outline" href="#services"><i class="bi bi-play-circle"></i> Explore services</a>
        </div>
        <div class="hero-proof">
          <div class="proof-icon"><i class="bi bi-shield-check"></i></div>
          <div><strong>Your vehicle, your destination</strong><span>Reliable • Convenient • Safety-focused</span></div>
        </div>
      </div>
      <div class="hero-badge"><i class="bi bi-clock-history"></i><span><strong>Ready when you are</strong><small>Plan your ride with us</small></span></div>
    </div>
    <div class="hero-bottom-line"></div>
  </section>

  <section class="trust-strip">
    <div class="container trust-grid">
      <div><i class="bi bi-person-check"></i><span><strong>Professional drivers</strong><small>Service-minded drivers</small></span></div>
      <div><i class="bi bi-shield-lock"></i><span><strong>Safety focused</strong><small>Your comfort matters</small></span></div>
      <div><i class="bi bi-calendar2-check"></i><span><strong>Easy booking</strong><small>Request a driver simply</small></span></div>
      <div><i class="bi bi-headset"></i><span><strong>Friendly support</strong><small>Here to help</small></span></div>
    </div>
  </section>

  <section class="section" id="services">
    <div class="container">
      <div class="section-heading">
        <p class="eyebrow">WHAT WE DO</p>
        <h2>A better way to <em>get there.</em></h2>
        <p>Flexible designated driver services for everyday plans and special journeys.</p>
      </div>
      <div class="services-grid">
        <article class="service-card">
          <div class="service-icon"><i class="bi bi-clock"></i></div>
          <h3>Hourly Driver</h3>
          <p>Book a driver for errands, appointments, shopping or a night out.</p>
          <a href="#booking" class="text-link" data-service="Hourly Driver">Choose service <i class="bi bi-arrow-right"></i></a>
        </article>
        <article class="service-card">
          <div class="service-icon"><i class="bi bi-moon-stars"></i></div>
          <h3>Night Service</h3>
          <p>Make a plan to get home comfortably after an evening out.</p>
          <a href="#booking" class="text-link" data-service="Night Service">Choose service <i class="bi bi-arrow-right"></i></a>
        </article>
        <article class="service-card">
          <div class="service-icon"><i class="bi bi-airplane"></i></div>
          <h3>Airport Transfers</h3>
          <p>Arrange a driver for airport journeys and travel connections.</p>
          <a href="#booking" class="text-link" data-service="Airport Transfer">Choose service <i class="bi bi-arrow-right"></i></a>
        </article>
        <article class="service-card">
          <div class="service-icon"><i class="bi bi-geo-alt"></i></div>
          <h3>Long Distance</h3>
          <p>Plan a longer trip with a driver for your own vehicle.</p>
          <a href="#booking" class="text-link" data-service="Long Distance">Choose service <i class="bi bi-arrow-right"></i></a>
        </article>
      </div>
    </div>
  </section>

  <section class="section process-section" id="how-it-works">
    <div class="container process-layout">
      <div class="section-heading align-left">
        <p class="eyebrow">SIMPLE FROM START TO FINISH</p>
        <h2>Three steps.<br><em>One smoother ride.</em></h2>
        <p>Send your request and our team can follow up to confirm availability and final pricing.</p>
        <a class="button button-gold" href="#booking">Request a driver <i class="bi bi-arrow-up-right"></i></a>
      </div>
      <div class="steps">
        <article class="step"><span class="step-number">01</span><div><h3>Tell us your plan</h3><p>Share your pickup, destination, date and preferred time.</p></div><i class="bi bi-chat-square-text"></i></article>
        <article class="step"><span class="step-number">02</span><div><h3>Send your request</h3><p>Continue to WhatsApp with your details ready to send.</p></div><i class="bi bi-send"></i></article>
        <article class="step"><span class="step-number">03</span><div><h3>Confirm your booking</h3><p>We’ll follow up to confirm availability and the agreed price.</p></div><i class="bi bi-check2-circle"></i></article>
      </div>
    </div>
  </section>

  <section class="section pricing-section" id="pricing">
    <div class="container">
      <div class="section-heading">
        <p class="eyebrow">CLEAR STARTING RATES</p>
        <h2>Simple pricing. <em>Peace of mind.</em></h2>
        <p>Rates below follow the service information provided. Confirm availability and any additional charges before travel.</p>
      </div>
      <div class="pricing-grid">
        <article class="price-card">
          <span class="price-label">HOURLY SERVICE</span>
          <div class="price">LKR 2,500 <small>/ first hour</small></div>
          <p>Minimum booking: 1 hour</p>
          <ul><li><i class="bi bi-check2"></i> Driver for your vehicle</li><li><i class="bi bi-check2"></i> Flexible booking request</li><li><i class="bi bi-check2"></i> Extra time quoted on confirmation</li></ul>
          <a class="button button-outline full-width" href="#booking" data-service="Hourly Driver">Request hourly service</a>
        </article>
        <article class="price-card price-featured">
          <span class="popular-tag">NIGHT OPTION</span>
          <span class="price-label">FULL NIGHT</span>
          <div class="price">LKR 6,000 <small>/ 8 hours</small></div>
          <p>For a planned evening or night journey</p>
          <ul><li><i class="bi bi-check2"></i> Up to 8 hours</li><li><i class="bi bi-check2"></i> Convenient booking request</li><li><i class="bi bi-check2"></i> Extra-area charges confirmed separately</li></ul>
          <a class="button button-gold full-width" href="#booking" data-service="Night Service">Request night service</a>
        </article>
      </div>
      <p class="pricing-note"><i class="bi bi-info-circle"></i> Additional pickup/drop or out-of-area charges may apply. Final price and availability must be confirmed before the journey.</p>
    </div>
  </section>

  <section class="section booking-section" id="booking">
    <div class="container booking-layout">
      <div class="booking-copy">
        <p class="eyebrow">LET'S GET YOU MOVING</p>
        <h2>Where can we <em>take you?</em></h2>
        <p>Fill in your trip details. We’ll prepare a message for WhatsApp so you can send your request directly.</p>
        <div class="booking-note"><i class="bi bi-whatsapp"></i><div><strong>No account needed</strong><span>This website does not store your booking details. Your message is sent only when you choose to send it in WhatsApp.</span></div></div>
        <div class="contact-mini"><i class="bi bi-telephone"></i><span>Prefer to call? <a href="tel:<?= htmlspecialchars($phoneLink, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($phoneDisplay, ENT_QUOTES, 'UTF-8') ?></a></span></div>
      </div>
      <form class="booking-form" id="bookingForm" data-whatsapp="<?= htmlspecialchars($whatsappNumber, ENT_QUOTES, 'UTF-8') ?>">
        <div class="form-heading"><h3>Request a driver</h3><span><i class="bi bi-lock"></i> Simple & secure</span></div>
        <div class="form-grid">
          <label>Your name<input name="name" type="text" autocomplete="name" placeholder="Enter your name" required maxlength="80"></label>
          <label>Phone number<input name="phone" type="tel" autocomplete="tel" placeholder="+94..." required maxlength="24"></label>
          <label class="field-full">Service type<select name="service" required><option value="">Choose a service</option><option>Hourly Driver</option><option>Night Service</option><option>Airport Transfer</option><option>Long Distance</option><option>Special Occasion</option></select></label>
          <label>Pickup location<input name="pickup" type="text" placeholder="Where should we meet?" required maxlength="160"></label>
          <label>Destination<input name="destination" type="text" placeholder="Where are you going?" required maxlength="160"></label>
          <label>Date<input name="date" id="bookingDate" type="date" required></label>
          <label>Pickup time<input name="time" type="time" required></label>
          <label class="field-full">Additional details <span class="optional">(optional)</span><textarea name="notes" rows="3" maxlength="500" placeholder="Vehicle type or other trip details"></textarea></label>
        </div>
        <button class="button button-gold full-width submit-button" type="submit">Continue to WhatsApp <i class="bi bi-whatsapp"></i></button>
        <p class="form-message" id="formMessage" role="status" aria-live="polite"></p>
        <p class="form-disclaimer">Submitting this form opens WhatsApp. Your request is not confirmed until DropMe Go confirms it.</p>
      </form>
    </div>
  </section>

  <section class="final-cta">
    <div class="container final-cta-inner">
      <div><p class="eyebrow">MAKE YOUR NEXT TRIP EASIER</p><h2>Relax. We’ll handle the drive.</h2></div>
      <a class="button button-gold" href="#booking">Book your driver <i class="bi bi-arrow-up-right"></i></a>
    </div>
  </section>
</main>

<footer class="site-footer" id="contact">
  <div class="container footer-grid">
    <div class="footer-brand">
      <a class="brand" href="#top"><span class="brand-mark"><i class="bi bi-steering-wheel"></i></span><span class="brand-text">DROP<span>ME</span> GO<small>DESIGNATED DRIVER SERVICE</small></span></a>
      <p>Your vehicle. Your destination. A driver when you need one.</p>
    </div>
    <div><h4>Explore</h4><a href="#services">Services</a><a href="#how-it-works">How it works</a><a href="#pricing">Pricing</a></div>
    <div><h4>Contact</h4><a href="tel:<?= htmlspecialchars($phoneLink, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($phoneDisplay, ENT_QUOTES, 'UTF-8') ?></a><a href="#booking">Request a booking</a><a href="https://wa.me/<?= htmlspecialchars($whatsappNumber, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener">WhatsApp</a></div>
  </div>
  <div class="container footer-bottom"><span>© <?= date('Y') ?> DropMe Go. All rights reserved.</span><a href="#top">Back to top ↑</a></div>
</footer>
<a class="floating-whatsapp" href="https://wa.me/<?= htmlspecialchars($whatsappNumber, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener" aria-label="Chat with DropMe Go on WhatsApp"><i class="bi bi-whatsapp"></i></a>
<script src="assets/js/script.js"></script>
</body>
</html>