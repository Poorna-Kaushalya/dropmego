<footer class="site-footer" id="contact">

    <div class="container footer-grid">

        <!-- Column 1: Brand -->
        <div class="footer-brand">
            <a class="brand" href="#top" aria-label="DropMe Go home">
                <img
                    src="assets/img/icon.png"
                    alt="DropMe Go Logo"
                    class="footer-brand-logo">
                <span class="brand-text">
                    DROP<span>ME</span> GO
                    <small>DESIGNATED DRIVER SERVICE</small>
                </span>
            </a>
            <p>
                Prevent drink driving. Your vehicle, your destination,
                driven safely by professionals.
            </p>
        </div>

        <!-- Column 2: Explore -->
        <div class="footer-links">
            <h4>Explore</h4>
            <a href="index.php#top">Home</a>
            <a href="index.php#about">About Us</a>
            <a href="index.php#services">Services</a>
            <a href="index.php#how-it-works">How It Works</a>
            <a href="index.php#pricing">All Packages</a>
        </div>

        <!-- Column 3: Packages -->
        <div class="footer-links">
            <h4>Our Packages</h4>
            <a href="#hourly-package">Hourly Package</a>
            <a href="#short-distance-package">Short Distance Package</a>
            <a href="#day-package">Day Package</a>
        </div>

        <!-- Column 4: Contact -->
        <div class="footer-links">
            <h4>Contact</h4>
            <a href="tel:<?= htmlspecialchars($phoneLink, ENT_QUOTES, 'UTF-8') ?>">
                <?= htmlspecialchars($phoneDisplay, ENT_QUOTES, 'UTF-8') ?>
            </a>
            <a href="#booking">Request a Safe Driver</a>
            <a
                href="https://wa.me/<?= htmlspecialchars($whatsappNumber, ENT_QUOTES, 'UTF-8') ?>"
                target="_blank"
                rel="noopener noreferrer">
                WhatsApp Support
            </a>
        </div>

    </div>

    <!-- Footer Bottom -->
    <div class="container footer-bottom">
        <span>
            &copy; <?= date('Y') ?> DropMe Go. All rights reserved.
        </span>
        <span class="footer-credit">
            Made by
            <a
                href="https://pixelxsolutions.com/"
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
    title="Call DropMe Go">
    <i class="bi bi-telephone-fill"></i>
</a>

<!-- Floating WhatsApp Button -->
<a
    class="floating-whatsapp"
    href="https://wa.me/<?= htmlspecialchars($whatsappNumber, ENT_QUOTES, 'UTF-8') ?>"
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Chat with DropMe Go on WhatsApp"
    title="WhatsApp DropMe Go">
    <i class="bi bi-whatsapp"></i>
</a>

<!-- Scroll to Top Button -->
<button
    class="scroll-to-top"
    id="scrollToTop"
    type="button"
    aria-label="Scroll to top"
    title="Back to top">
    <i class="bi bi-arrow-up"></i>
</button>

</body>
</html>