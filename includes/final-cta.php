<section class="final-cta">
    <div class="container final-cta-inner">

        <div>
            <p class="eyebrow">DON'T RISK A DRINK & DRIVE FINE</p>
            <h2>Enjoy your time. Let us drive your car home.</h2>
        </div>

        <div class="cta-contact">

            <a class="contact-link"
               href="tel:<?= htmlspecialchars($phoneLink, ENT_QUOTES, 'UTF-8') ?>">

                <i class="bi bi-telephone-fill"></i>

                <span>
                    <small>Contact Us</small>
                    <strong>
                        <?= htmlspecialchars($phoneDisplay, ENT_QUOTES, 'UTF-8') ?>
                    </strong>
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