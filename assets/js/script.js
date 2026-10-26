(() => {
  const menuToggle = document.getElementById("menuToggle");
  const mainNav = document.getElementById("mainNav");

  if (menuToggle && mainNav) {
    menuToggle.addEventListener("click", () => {
      const isOpen = mainNav.classList.toggle("is-open");
      menuToggle.setAttribute("aria-expanded", String(isOpen));
      menuToggle.setAttribute("aria-label", isOpen ? "Close navigation" : "Open navigation");
      menuToggle.innerHTML = isOpen
        ? '<i class="bi bi-x-lg"></i>'
        : '<i class="bi bi-list"></i>';
    });

    mainNav.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", () => {
        mainNav.classList.remove("is-open");
        menuToggle.setAttribute("aria-expanded", "false");
        menuToggle.setAttribute("aria-label", "Open navigation");
        menuToggle.innerHTML = '<i class="bi bi-list"></i>';
      });
    });
  }

  const form = document.getElementById("bookingForm");
  const message = document.getElementById("formMessage");
  const dateInput = document.getElementById("bookingDate");

  if (dateInput) {
    const today = new Date();
    const localDate = new Date(today.getTime() - today.getTimezoneOffset() * 60000)
      .toISOString().slice(0, 10);
    dateInput.min = localDate;
  }

  document.querySelectorAll("[data-service]").forEach((link) => {
    link.addEventListener("click", () => {
      const serviceSelect = document.querySelector('select[name="service"]');
      if (serviceSelect) serviceSelect.value = link.dataset.service;
    });
  });

  if (form) {
    form.addEventListener("submit", (event) => {
      event.preventDefault();
      if (!form.reportValidity()) return;

      const phone = (form.dataset.whatsapp || "").replace(/\D/g, "");
      if (!phone || phone.includes("X") || phone.length < 10) {
        message.textContent = "Please update the WhatsApp number in index.php before using the booking form.";
        return;
      }

      const data = new FormData(form);
      const lines = [
        "DROPMe GO - DRIVER BOOKING REQUEST",
        "",
        "Name: " + data.get("name"),
        "Phone: " + data.get("phone"),
        "Service: " + data.get("service"),
        "Pickup: " + data.get("pickup"),
        "Destination: " + data.get("destination"),
        "Date: " + data.get("date"),
        "Time: " + data.get("time"),
        data.get("notes") ? "Additional details: " + data.get("notes") : ""
      ].filter(Boolean);

      const url = "https://wa.me/" + phone + "?text=" + encodeURIComponent(lines.join("\n"));
      window.open(url, "_blank", "noopener,noreferrer");
      message.textContent = "WhatsApp opened with your request. Send the message there to contact DropMe Go.";
    });
  }
})();