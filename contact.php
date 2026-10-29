<?php
declare(strict_types=1);

require_once __DIR__ . '/config/config.php';

// Override page title specifically for Contact Us
$pageTitle = 'Contact Us | DropMe Go Designated Driver Service';
?>

<?php require __DIR__ . '/includes/head.php'; ?>

<?php require __DIR__ . '/includes/header.php'; ?>

<main>

    <!-- Dedicated Contact Hero Section with Background Slider -->
    <section class="section contact-hero" id="contactHero">
        <!-- Background Image Slides -->
        <div class="hero-bg-slide slide-1 active" style="background-image: url('assets/img/contact1.jpg');"></div>
        <div class="hero-bg-slide slide-2" style="background-image: url('assets/img/contact2.png');"></div>
        <div class="hero-overlay"></div>

        <div class="container hero-content">
            <!-- Text Content linked to Slide 1 (contact1.jpg) -->
            <div class="hero-copy hero-text-slide slide-1 active">
                <!-- Page Identifier Badge -->
                <div class="page-identifier-badge">
                    <i class="bi bi-geo-alt-fill"></i> Contact Us...
                </div>

                <h1>We are here to help you <em>drive safe.</em></h1>
                <p class="hero-description">
                    Have questions about our designated driver services, corporate arrangements, or need immediate assistance? Reach out to our 24/7 support team via direct phone call, WhatsApp, or explore our transparent hourly and distance-based packages below.
                </p>
                
                <!-- Feature Pills / Badges to fill empty space -->
                <div class="hero-badges">
                    <span class="badge-item"><i class="bi bi-shield-check"></i> 100% Verified Drivers</span>
                    <span class="badge-item"><i class="bi bi-clock-history"></i> 24/7 Rapid Response</span>
                    <span class="badge-item"><i class="bi bi-geo-alt"></i> Islandwide Coverage</span>
                </div>

                <div class="hero-actions">
                    <a class="button button-gold" href="index.php#pricing">
                        View Packages <i class="bi bi-arrow-right"></i>
                    </a>
                    <a class="button button-outline" href="index.php">
                        Back to Home
                    </a>
                </div>
            </div>

            <!-- Text Content linked to Slide 2 (contact2.png) -->
            <div class="hero-copy hero-text-slide slide-2">
                <!-- Page Identifier Badge -->
                <div class="page-identifier-badge">
                    <i class="bi bi-geo-alt-fill"></i> Contact Us...
                </div>

                <p class="eyebrow"><span></span>STAY SAFE. DON'T DRINK AND DRIVE.</p>
                <h1>Let us <em>drive you home.</em></h1>
                <p class="hero-description">
                    DropMe Go is Sri Lanka's leading designated driver service. Enjoy your evening out with peace of mind while our professional, courteous chauffeurs drive your personal vehicle safely back to your doorstep.
                </p>

                <!-- Feature Pills / Badges for Slide 2 -->
                <div class="hero-badges">
                    <span class="badge-item"><i class="bi bi-car-front"></i> Your Car, Our Driver</span>
                    <span class="badge-item"><i class="bi bi-telephone-inbound"></i> Instant Booking</span>
                    <span class="badge-item"><i class="bi bi-star-fill text-gold"></i> Trusted by Thousands</span>
                </div>

                <div class="hero-actions">
                    <a class="button button-gold" href="index.php#pricing">
                        View Packages <i class="bi bi-arrow-right"></i>
                    </a>
                    <a class="button button-outline" href="index.php">
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Contact Cards Section -->
    <section class="section contact-cards-section">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">DIRECT COMMUNICATION</p>
                <h2>Choose how to <em>connect with us</em></h2>
            </div>

            <div class="services-grid contact-grid">
                
                <!-- Phone Call Card -->
                <div class="service-card text-center">
                    <div class="service-icon" style="margin-inline: auto;">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <h3>Direct Phone Call</h3>
                    <p>Speak directly with our team to arrange urgent drivers or inquire about specific routes.</p>
                    <a class="text-link" href="tel:<?= htmlspecialchars($phoneLink, ENT_QUOTES, 'UTF-8') ?>">
                        Call <?= htmlspecialchars($phoneDisplay, ENT_QUOTES, 'UTF-8') ?> <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <!-- WhatsApp Card -->
                <div class="service-card text-center">
                    <div class="service-icon" style="margin-inline: auto;">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                    <h3>WhatsApp Chat</h3>
                    <p>Send trip details or request driver availability instantly through WhatsApp chat.</p>
                    <a class="text-link" href="https://wa.me/<?= htmlspecialchars($whatsappNumber, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
                        Chat on WhatsApp <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <!-- Packages Link Card -->
                <div class="service-card text-center">
                    <div class="service-icon" style="margin-inline: auto;">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <h3>Service Packages</h3>
                    <p>Compare our hourly, short-distance, and full-day designated driver rates on our main page.</p>
                    <a class="text-link" href="index.php#pricing">
                        Explore Packages <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Booking Form Section -->
    <?php require __DIR__ . '/includes/booking.php'; ?>

</main>

<!-- Simple Slider JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const bgSlides = document.querySelectorAll('.hero-bg-slide');
    const textSlides = document.querySelectorAll('.hero-text-slide');
    let currentIndex = 0;
    const intervalTime = 6000; // Switch slide every 6 seconds

    function showSlide(index) {
        bgSlides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
        textSlides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
    }

    setInterval(() => {
        currentIndex = (currentIndex + 1) % bgSlides.length;
        showSlide(currentIndex);
    }, intervalTime);
});
</script>

<?php require __DIR__ . '/includes/footer.php'; ?>