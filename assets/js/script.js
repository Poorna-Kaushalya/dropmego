console.log("DropMe Go script.js is running");
(() => {
  "use strict";

  /* =========================================
     MOBILE NAVIGATION
  ========================================= */

  const menuToggle = document.getElementById("menuToggle");
  const mainNav = document.getElementById("mainNav");

  function closeMenu() {
    if (!menuToggle || !mainNav) return;

    mainNav.classList.remove("is-open");
    menuToggle.setAttribute("aria-expanded", "false");
    menuToggle.setAttribute("aria-label", "Open navigation");
    menuToggle.innerHTML = '<i class="bi bi-list"></i>';
  }

  if (menuToggle && mainNav) {
    menuToggle.addEventListener("click", () => {
      const isOpen = mainNav.classList.toggle("is-open");

      menuToggle.setAttribute("aria-expanded", String(isOpen));
      menuToggle.setAttribute(
        "aria-label",
        isOpen ? "Close navigation" : "Open navigation"
      );

      menuToggle.innerHTML = isOpen
        ? '<i class="bi bi-x-lg"></i>'
        : '<i class="bi bi-list"></i>';
    });

    mainNav.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", closeMenu);
    });

    document.addEventListener("keydown", (event) => {
      if (event.key === "Escape") closeMenu();
    });
  }

  
  /* =========================================
     SCROLL REVEAL ANIMATIONS
  ========================================= */

  const reduceMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)"
  ).matches;

  const revealSelector = [
    ".trust-grid > div",
    ".services-grid .service-card",
    ".steps .step",
    ".pricing-grid .price-card",
    ".section-heading",
    ".booking-copy",
    ".booking-form",
    ".final-cta-inner",
    ".footer-grid > div",
    ".pricing-note"
  ].join(",");

  const revealElements = [
    ...new Set(document.querySelectorAll(revealSelector))
  ];

  if (reduceMotion || !("IntersectionObserver" in window)) {
    revealElements.forEach((element) => {
      element.classList.add("reveal-visible");
    });
  } else {
    revealElements.forEach((element) => {
      element.classList.add("reveal");

      const siblings = Array.from(element.parentElement.children);
      const index = siblings.indexOf(element);

      if (
        element.matches(
          ".trust-grid > div, .services-grid .service-card, .steps .step, .pricing-grid .price-card"
        )
      ) {
        element.style.setProperty(
          "--reveal-delay",
          `${index * 250}ms`
        );
      }
    });

    document.documentElement.classList.add("reveal-enabled");

    const observer = new IntersectionObserver(
      (entries, currentObserver) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("reveal-visible");
            currentObserver.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0,
        rootMargin: "0px 0px 0px 0px"
      }
    );

    revealElements.forEach((element) => {
      const rect = element.getBoundingClientRect();

      // Reveal elements already visible when the page loads.
      if (
        rect.top < window.innerHeight &&
        rect.bottom > 0
      ) {
        element.classList.add("reveal-visible");
      } else {
        observer.observe(element);
      }
    });
  }

  /* =========================================
     BOOKING DATE: PREVENT PAST DATES
  ========================================= */

  const dateInput = document.getElementById("bookingDate");

  function getLocalDate() {
    const now = new Date();
    const localTime = new Date(
      now.getTime() - now.getTimezoneOffset() * 60000
    );

    return localTime.toISOString().slice(0, 10);
  }

  if (dateInput) {
    dateInput.min = getLocalDate();
  }

  /* =========================================
     SELECT SERVICE FROM SERVICE / PRICING LINKS
  ========================================= */

  document.querySelectorAll("[data-service]").forEach((link) => {
    link.addEventListener("click", () => {
      const serviceSelect = document.querySelector(
        '#bookingForm select[name="service"]'
      );

      if (!serviceSelect) return;

      const service = link.dataset.service;
      const matchingOption = Array.from(serviceSelect.options).find(
        (option) => option.value === service ||
                    option.textContent.trim() === service
      );

      if (matchingOption) {
        serviceSelect.value = matchingOption.value;
        serviceSelect.dispatchEvent(
          new Event("change", { bubbles: true })
        );
      }
    });
  });

  /* =========================================
     WHATSAPP BOOKING FORM
  ========================================= */

  const form = document.getElementById("bookingForm");
  const message = document.getElementById("formMessage");

  if (form) {
    form.addEventListener("submit", (event) => {
      event.preventDefault();

      if (message) message.textContent = "";

      if (!form.reportValidity()) return;

      const whatsappNumber = (form.dataset.whatsapp || "")
        .replace(/\D/g, "");

      if (
        !whatsappNumber ||
        whatsappNumber.length < 10 ||
        whatsappNumber.length > 15
      ) {
        if (message) {
          message.textContent =
            "Please check the WhatsApp number configured in index.php.";
        }
        return;
      }

      const data = new FormData(form);

      const name = String(data.get("name") || "").trim();
      const customerPhone = String(data.get("phone") || "").trim();
      const service = String(data.get("service") || "").trim();
      const pickup = String(data.get("pickup") || "").trim();
      const destination = String(data.get("destination") || "").trim();
      const date = String(data.get("date") || "").trim();
      const time = String(data.get("time") || "").trim();
      const notes = String(data.get("notes") || "").trim();

      // Extra check in case the date was manually altered.
      if (dateInput && dateInput.value < getLocalDate()) {
        dateInput.setCustomValidity(
          "Please select today or a future date."
        );
        dateInput.reportValidity();
        dateInput.setCustomValidity("");
        return;
      }

      const lines = [
        "DROPME GO - DRIVER BOOKING REQUEST",
        "",
        `Name: ${name}`,
        `Customer phone: ${customerPhone}`,
        `Service: ${service}`,
        `Pickup location: ${pickup}`,
        `Destination: ${destination}`,
        `Date: ${date}`,
        `Pickup time: ${time}`
      ];

      if (notes) {
        lines.push(`Additional details: ${notes}`);
      }

      lines.push(
        "",
        "Please confirm availability and the final price."
      );

      const whatsappUrl =
        "https://wa.me/" +
        whatsappNumber +
        "?text=" +
        encodeURIComponent(lines.join("\n"));

      // Open WhatsApp directly from the user's submit action.
      const whatsappWindow = window.open(
        whatsappUrl,
        "_blank",
        "noopener,noreferrer"
      );

      if (message) {
        message.textContent = whatsappWindow
          ? "WhatsApp opened with your request. Send the message there to contact DropMe Go."
          : "If WhatsApp did not open, allow pop-ups or use the WhatsApp button on this page.";
      }
    });
  }
  console.log("DropMe Go script.js loaded");

document.addEventListener("DOMContentLoaded", () => {
  console.log("DOM loaded");

  const elements = document.querySelectorAll(
    ".trust-grid > div, .services-grid .service-card, .steps .step, .pricing-grid .price-card, .section-heading, .booking-copy, .booking-form"
  );

  console.log("Elements selected:", elements.length);
});


  /* =========================================
     HERO LEFT / RIGHT SLIDE ANIMATION
  ========================================= */

  const heroAnimatedElements = document.querySelectorAll(
    ".hero .hero-copy, .hero .hero-badge"
  );

  const showHeroElements = () => {
    heroAnimatedElements.forEach((element) => {
      element.classList.add("hero-slide-visible");
    });
  };

  if (
    window.matchMedia("(prefers-reduced-motion: reduce)").matches ||
    !("IntersectionObserver" in window)
  ) {
    showHeroElements();
  } else {
    const heroSlideObserver = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("hero-slide-visible");
            observer.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.05,
        rootMargin: "0px 0px 0px 0px"
      }
    );

    heroAnimatedElements.forEach((element) => {
      heroSlideObserver.observe(element);
    });
  }

  
/* About section alternating slide reveal */
const aboutAnimatedElements = document.querySelectorAll(".about-animate");

if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
  aboutAnimatedElements.forEach((element) => {
    element.classList.add("is-visible");
  });
} else if ("IntersectionObserver" in window) {
  const aboutObserver = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.12,
      rootMargin: "0px 0px -30px 0px"
    }
  );

  aboutAnimatedElements.forEach((element) => {
    aboutObserver.observe(element);
  });
} else {
  aboutAnimatedElements.forEach((element) => {
    element.classList.add("is-visible");
  });
}


  /* =========================================
     FLOATING SCROLL-TO-TOP BUTTON
  ========================================= */

  const scrollToTopButton = document.getElementById("scrollToTop");

  if (scrollToTopButton) {
    const updateScrollButton = () => {
      scrollToTopButton.classList.toggle(
        "is-visible",
        window.scrollY > 300
      );
    };

    window.addEventListener("scroll", updateScrollButton, {
      passive: true
    });

    scrollToTopButton.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    });

    updateScrollButton();
  }

  /* About image: Right-to-left scroll animation */
const aboutImage = document.querySelector(".about-image-wrap");

if (aboutImage) {
  const prefersReducedMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)"
  ).matches;

  if (prefersReducedMotion || !("IntersectionObserver" in window)) {
    aboutImage.classList.add("is-visible");
  } else {
    const aboutImageObserver = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            observer.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.15
      }
    );

    aboutImageObserver.observe(aboutImage);
  }
}

/* =========================================
   DROP ME GO LOGO: RELOAD PAGE AT TOP
========================================= */

const brandLink = document.querySelector(".site-header .brand");

if (brandLink) {
  brandLink.addEventListener("click", (event) => {
    event.preventDefault();

    closeMenu();

    // Navigate to the current page's top anchor.
    const topUrl = new URL(window.location.href);
    topUrl.hash = "top";

    // Force navigation even when already on #top.
    window.location.assign(topUrl.href);
  });
}

})();
