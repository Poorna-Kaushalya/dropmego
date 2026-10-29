<section class="section booking-section" id="booking">
    <div class="container booking-layout">

        <div class="booking-copy">
            <p class="eyebrow">STAY SAFE ON THE ROAD</p>

            <h2>Book your <em>safe ride home.</em></h2>

            <p>
                Fill in your trip details below. We’ll instantly format a message 
                for WhatsApp so you can secure your designated driver right away.
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
                    Need an urgent driver? Call us:
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
                <h3>Request a sober driver</h3>
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
                        <option value="">Choose a service package</option>
                        <option>Hourly Package (Night Out)</option>
                        <option>Short Distance Safe Ride</option>
                        <option>Full Day Chauffeur Package</option>
                    </select>
                </label>

                <label>
                    Pickup location
                    <input name="pickup" type="text"
                           placeholder="Where is your vehicle parked?"
                           maxlength="160" required>
                </label>

                <label>
                    Destination
                    <input name="destination" type="text"
                           placeholder="Where should we drive you?"
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
                              placeholder="Car transmission type (Auto/Manual) or specific instructions"></textarea>
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