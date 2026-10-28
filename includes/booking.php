<section class="section booking-section" id="booking">
    <div class="container booking-layout">

        <div class="booking-copy">
            <p class="eyebrow">LET'S GET YOU MOVING</p>

            <h2>Where can we <em>take you?</em></h2>

            <p>
                Fill in your trip details. We’ll prepare a message
                for WhatsApp so you can send your request directly.
            </p>

            <div class="booking-note">
                <i class="bi bi-whatsapp"></i>

                <div>
                    <strong>No account needed</strong>
                    <span>
                        This website does not store your booking details.
                        Your message is sent only when you choose to send
                        it in WhatsApp.
                    </span>
                </div>
            </div>

            <div class="contact-mini">
                <i class="bi bi-telephone"></i>
                <span>
                    Prefer to call?
                    <a href="tel:<?= htmlspecialchars($phoneLink, ENT_QUOTES, 'UTF-8') ?>">
                        <?= htmlspecialchars($phoneDisplay, ENT_QUOTES, 'UTF-8') ?>
                    </a>
                </span>
            </div>
        </div>

        <form class="booking-form"
              id="bookingForm"
              data-whatsapp="<?= htmlspecialchars($whatsappNumber, ENT_QUOTES, 'UTF-8') ?>">

            <div class="form-heading">
                <h3>Request a driver</h3>
                <span><i class="bi bi-lock"></i> Simple & secure</span>
            </div>

            <div class="form-grid">

                <label>
                    Your name
                    <input name="name" type="text"
                           autocomplete="name"
                           placeholder="Enter your name"
                           maxlength="80" required>
                </label>

                <label>
                    Phone number
                    <input name="phone" type="tel"
                           autocomplete="tel"
                           placeholder="+94..."
                           maxlength="24" required>
                </label>

                <label class="field-full">
                    Service type
                    <select name="service" required>
                        <option value="">Choose a service</option>
                        <option>Hourly Package</option>
                        <option>Short Distance Package</option>
                        <option>Day Package</option>
                    </select>
                </label>

                <label>
                    Pickup location
                    <input name="pickup" type="text"
                           placeholder="Where should we meet?"
                           maxlength="160" required>
                </label>

                <label>
                    Destination
                    <input name="destination" type="text"
                           placeholder="Where are you going?"
                           maxlength="160" required>
                </label>

                <label>
                    Date
                    <input name="date" id="bookingDate"
                           type="date" required>
                </label>

                <label>
                    Pickup time
                    <input name="time" type="time" required>
                </label>

                <label class="field-full">
                    Additional details
                    <span class="optional">(optional)</span>
                    <textarea name="notes" rows="3"
                              maxlength="500"
                              placeholder="Vehicle type or other trip details"></textarea>
                </label>

            </div>

            <button class="button button-gold full-width submit-button"
                    type="submit">
                Continue to WhatsApp
                <i class="bi bi-whatsapp"></i>
            </button>

            <p class="form-message"
               id="formMessage"
               role="status"
               aria-live="polite"></p>

            <p class="form-disclaimer">
                Submitting this form opens WhatsApp. Your request
                is not confirmed until DropMe Go confirms it.
            </p>

        </form>
    </div>
</section>