<?php
$pageTitle = "DropMe Go | Designated Driver Service";
$whatsappNumber = "94763933586";  // Contatct No
$phoneDisplay = "+94 7763933586"; 
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

    <!-- DropMe Go Favicon -->
  <link rel="icon" type="image/png" href="assets/img/logo1.png">
  <link rel="apple-touch-icon" href="assets/img/icon.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/script.js" defer></script>

</head>
<body>
<header class="site-header" id="top">
  <div class="container nav-wrap"> 
  <a class="brand" href="#top" aria-label="DropMe Go home">

      <img
          src="assets/img/icon.png"
          alt="DropMe Go — Designated Driver Service"
          class="brand-logo"
      >
      <img
          src="assets/img/logo3.png"
          alt="DropMe Go — Designated Driver Service"
          class="brand-logo"
      >
  </a>
    <button class="menu-toggle" id="menuToggle" aria-label="Open navigation" aria-expanded="false" aria-controls="mainNav">
      <i class="bi bi-list"></i>
    </button>
    <nav class="main-nav" id="mainNav">
      <a href="#about">About Us</a>
      <a href="#services">Services</a>
      <a href="#how-it-works">How it works</a>
      <a href="#pricing">Packages</a>
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
        <p class="hero-description">
          Enjoy the ride. Leave the driving to us. Our professional driver takes you and your car home safely.
        </p>
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

  <!-- WHO ARE WE SECTION -->
  <section class="section about-section" id="about">
    <div class="container about-layout">

      <!-- Left side: About text -->
      <div class="about-content">

        <div class="section-heading about-animate" data-direction="left">
          <p class="eyebrow">GET TO KNOW US</p>
          <h2>Who <em>Are We?</em></h2>
        </div>

        <p class="about-animate" data-direction="left">
          <strong>DropMe Go</strong> is a designated driving service in
          Sri Lanka committed to making every journey safer, more comfortable,
          and more convenient. We understand the importance of having a
          reliable and trustworthy driver, especially when you are tired,
          have enjoyed a night out, or simply prefer someone else to handle
          the driving.
        </p>

        <p class="about-animate" data-direction="right">
          Our service is designed to help you and your vehicle reach your
          destination safely, giving you peace of mind whenever you need a
          driver. Whether you require a driver for a few hours, a full-day
          journey, or a late-night trip, DropMe Go is here to make your
          travel experience easier.
        </p>

        <p class="about-animate" data-direction="left">
          With our commitment to providing a convenient
          <strong>24/7 designated driver service</strong>, we encourage
          responsible decisions and help customers avoid driving when tired
          or unfit to drive.
        </p>

        <p class="about-animate" data-direction="right">
          At DropMe Go, we believe that
          <strong>professionalism, honesty, responsibility, and customer
          satisfaction</strong> are essential to a quality driving service.
          We aim to earn your trust through responsible service, respectful
          communication, and a customer-focused approach.
        </p>

        <p class="about-animate" data-direction="left">
          Whether you need a driver for a night out, a daytime trip, or your
          everyday transportation needs, DropMe Go is ready to assist you.
        </p>

        <div class="about-highlight about-animate" data-direction="right">
          <i class="bi bi-shield-check" aria-hidden="true"></i>
          <span>
            <strong>Let us take care of the driving while you enjoy the journey.</strong>
          </span>
        </div>

        <a
          class="button button-gold about-button about-animate"
          data-direction="left"
          href="#booking"
        >
          Book a Driver <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
        </a>

      </div>

      <!-- Right side: About image -->
      <div class="about-image-wrap">
        <img
          src="assets/img/whoweare.png"
          alt="DropMe Go designated driver service"
          class="about-image"
          loading="lazy"
        >
      </div>

    </div>
  </section>

<section class="section" id="services">
      <div class="container">
        <div class="driver-banner-container">

        <!-- Left side: Image -->
        <div class="driver-banner-image">
          <img
            src="assets/img/rmap3.png"
            alt="DropMe Go designated driver service"
          >
        </div>

        <!-- Right side: Text -->
        <div class="driver-banner-content">
          <p class="eyebrow">OUR SERVICES</p>
          <h2>Delivering Excellence <em>in Service.</em></h2>
          <p>Professional designated driver services tailored to your journey.</p>
        </div>

      </div><br/>

      <div class="services-grid">
        <article class="service-card">
          <div class="service-icon"><i class="bi bi-clock"></i></div>
          <h3>Hourly Package</h3>
          <p>Book a professional driver by the hour for errands, appointments, shopping, or personal travel.</p>
          <a href="#pricing" class="text-link" data-service="Hourly Package">
            Choose Package <i class="bi bi-arrow-right"></i>
          </a>
        </article>

        <article class="service-card">
          <div class="service-icon"><i class="bi bi-sun"></i></div>
          <h3>Day Package</h3>
          <p>Enjoy a dedicated driver throughout the day for business trips, sightseeing, shopping, and daily travel.</p>
          <a href="#pricing" class="text-link" data-service="Day Package">
            Choose Package <i class="bi bi-arrow-right"></i>
          </a>
        </article>

        <article class="service-card">
          <div class="service-icon"><i class="bi bi-moon-stars"></i></div>
          <h3>Night Service</h3>
          <p>Travel comfortably after evening events, parties, or nights out with a professional designated driver.</p>
          <a href="#pricing" class="text-link" data-service="Night Service">
            Choose Package <i class="bi bi-arrow-right"></i>
          </a>
        </article>

        <article class="service-card">
          <div class="service-icon"><i class="bi bi-geo-alt"></i></div>
          <h3>Long-Distance Package</h3>
          <p>Travel between cities or destinations with a professional driver using your own vehicle.</p>
          <a href="#pricing" class="text-link" data-service="Long-Distance Package">
            Choose Package <i class="bi bi-arrow-right"></i>
          </a>
        </article>
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
        <p class="eyebrow">TRANSPARENT & SIMPLE</p>
        <h2>Our <em>Packages</em></h2>
        <p>Choose the right designated driver service for your journey.</p>
      </div>

      <div class="pricing-grid">

        <!-- CARD 1: HOURLY PACKAGE -->
        <article class="price-card hourly-card">

          <div class="hourly-heading">
            <h3>Hourly Package</h3>
            <p>Relax. Our professional driver takes you and your car home safely.</p>
          </div>

          <div class="hourly-layout">

            <!-- LEFT: HOURLY RATES -->
            <div class="hourly-prices">
              <div class="price">
                LKR 2,500 <small>/ first hour</small>
              </div>

              <h4>Hourly Rates</h4>

              <ul class="hourly-rate-list">
                <li><span>1 hour</span><strong>LKR 2,500</strong></li>
                <li><span>2 hours</span><strong>LKR 3,500</strong></li>
                <li><span>3 hours</span><strong>LKR 4,000</strong></li>
                <li><span>4 hours</span><strong>LKR 4,500</strong></li>
                <li><span>5 hours</span><strong>LKR 5,000</strong></li>
                <li class="night-rate">
                  <span>Full Night (8 hours)</span>
                  <strong>LKR 6,000</strong>
                </li>
              </ul>
            </div>

            <div class="location-pricing">

                <!-- Column 1: Pickup -->
                <div class="location-price-column">
                    <h4>Colombo Out-of-Area Pickup</h4>

                    <table class="pricing-table">
                        <tbody>
                            <tr>
                                <td>Kadawatha</td>
                                <td><strong>LKR 1,000</strong></td>
                            </tr>
                            <tr>
                                <td>Ja-Ela</td>
                                <td><strong>LKR 1,000</strong></td>
                            </tr>
                            <tr>
                                <td>Kottawa</td>
                                <td><strong>LKR 1,000</strong></td>
                            </tr>
                            <tr>
                                <td>Moratuwa</td>
                                <td><strong>LKR 1,000</strong></td>
                            </tr>
                            <tr>
                                <td>Negombo <small>Full charge applies</small></td>
                                <td><strong>LKR 5,500</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Column 2: Drop-off -->
                <div class="location-price-column">
                    <h4>Colombo Out-of-Area Drop-off</h4>

                    <table class="pricing-table">
                        <tbody>
                            <tr>
                                <td>Kadawatha</td>
                                <td><strong>LKR 500</strong></td>
                            </tr>
                            <tr>
                                <td>Ja-Ela</td>
                                <td><strong>LKR 500</strong></td>
                            </tr>
                            <tr>
                                <td>Kottawa</td>
                                <td><strong>LKR 500</strong></td>
                            </tr>
                            <tr>
                                <td>Moratuwa</td>
                                <td><strong>LKR 500</strong></td>
                            </tr>
                            <tr>
                                <td>Negombo <small>Full charge applies</small></td>
                                <td><strong>LKR 5,000</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
          </div>

          <a class="button button-outline full-width"
            href="#booking" data-service="Hourly Package">
            Choose Package
          </a>

        </article>

        <!-- CARD 2: SHORT DISTANCE -->
        <article class="price-card price-featured">

          <span class="popular-tag">POPULAR OPTION</span>
          <span class="price-label">DISTANCE-BASED SERVICE</span>

          <h3>Short Distance Package</h3>
          <p>Don't drink and drive. Let our professional driver take you and your car home safely.</p>

          <div class="price">
            LKR 2,000 <small>/ 1–10 km</small>
          </div>

          <ul>
            <li><i class="bi bi-check2"></i> Minimum distance: 1–10 km</li>
            <li><i class="bi bi-check2"></i> Each additional km — LKR 100</li>
            <li><i class="bi bi-check2"></i> Waiting after 15 minutes — LKR 300</li>
            <li><i class="bi bi-moon-stars"></i> Full Night — LKR 6,000</li>
            <li><i class="bi bi-shield-check"></i> 24/7 designated driver service</li>
          </ul>

          <a class="button button-gold full-width"
            href="#booking" data-service="Distance Package">
            Choose Package
          </a>

        </article>

        <!-- CARD 3: Day Packages -->
        <article class="price-card">

          <h3><br/>Day Package</h3>
          <p>Enjoy convenient designated driver services for your journey, day or night.</p>

          <div class="price">
           6.00 AM TO 6.00 PM 
          </div>

          <ul>
            <li><i class="bi bi-check2"></i>4 Hours - LKR 3000</li>
            <li><i class="bi bi-check2"></i> 6 Hours - LKR 3500</li>
            <li><i class="bi bi-check2"></i> 8 Hourse ( Full Day ) - LKR 5000</li>
            <li><i class="bi bi-shield-check"></i> 24/7 designated driver service</li>
          </ul>

          <a class="button button-outline full-width"
            href="#booking" data-service="Distance and Night Service">
            Choose Package
          </a>

        </article>

      </div>
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
          <label class="field-full">Service type<select name="service" required><option value="">Choose a service</option><option>Hourly Package</option><option>Short Distance Package</option><option>Day Package</option></select></label>
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
      <div>
        <p class="eyebrow">MAKE YOUR NEXT TRIP EASIER</p>
        <h2>Relax. We’ll handle the drive.</h2>
      </div>

      <div class="cta-contact">
        <a class="contact-link"
          href="tel:<?= htmlspecialchars($phoneLink, ENT_QUOTES, 'UTF-8') ?>">
          <i class="bi bi-telephone-fill"></i>
          <span>
            <small>Call Us</small>
            <strong><?= htmlspecialchars($phoneDisplay, ENT_QUOTES, 'UTF-8') ?></strong>
          </span>
        </a>

        <a class="contact-link whatsapp-link"
          href="https://wa.me/<?= htmlspecialchars($whatsappNumber, ENT_QUOTES, 'UTF-8') ?>"
          target="_blank"
          rel="noopener noreferrer">
          <i class="bi bi-whatsapp"></i>
          <span>
            <small>WhatsApp</small>
            <strong>Chat With Us</strong>
          </span>
        </a>
      </div>
    </div>
  </section>
</main>

<footer class="site-footer" id="contact">
  <div class="container footer-grid">
    <div class="footer-brand">
      <a class="brand" href="#top" aria-label="DropMe Go home">
        <img
          src="assets/img/icon.png"
          alt="DropMe Go Logo"
          class="footer-brand-logo"
        >
        <span class="brand-text">
          DROP<span>ME</span> GO
          <small>DESIGNATED DRIVER SERVICE</small>
        </span>
      </a>
      <p>Your vehicle. Your destination. A driver when you need one.</p>
    </div>
    <div><h4>Explore</h4><a href="#about">About Us</a><a href="#services">Services</a><a href="#how-it-works">How it works</a><a href="#pricing">Packages</a></div>
    <div><h4>Contact</h4><a href="tel:<?= htmlspecialchars($phoneLink, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($phoneDisplay, ENT_QUOTES, 'UTF-8') ?></a><a href="#booking">Request a booking</a><a href="https://wa.me/<?= htmlspecialchars($whatsappNumber, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener">WhatsApp</a></div>
  </div>

  <div class="container footer-bottom">
    <span>© <?= date('Y') ?> DropMe Go. All rights reserved.</span>

    <span class="footer-credit">
      Made by
      <a href="https://pixelxsolutions.com/"
        target="_blank"
        rel="noopener noreferrer">
        PixelX Solutions (Pvt) Ltd.
      </a>
    </span>
  </div>

</footer>

  <!-- Floating Call Button -->
  <a
    class="floating-call"
    href="tel:<?= htmlspecialchars($phoneLink, ENT_QUOTES, 'UTF-8') ?>"
    aria-label="Call DropMe Go"
    title="Call DropMe Go"
  >
    <i class="bi bi-telephone-fill"></i>
  </a>

  <!-- Floating WhatsApp Button -->
  <a
    class="floating-whatsapp"
    href="https://wa.me/<?= htmlspecialchars($whatsappNumber, ENT_QUOTES, 'UTF-8') ?>"
    target="_blank"
    rel="noopener"
    aria-label="Chat with DropMe Go on WhatsApp"
    title="WhatsApp DropMe Go"
  >
    <i class="bi bi-whatsapp"></i>
  </a>

  <!-- Scroll to Top Button -->
  <button
    class="scroll-to-top"
    id="scrollToTop"
    type="button"
    aria-label="Scroll to top"
    title="Back to top"
  >
    <i class="bi bi-arrow-up"></i>
  </button>

</body>
</html>