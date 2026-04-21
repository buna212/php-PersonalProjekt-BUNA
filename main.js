/* ── Scrolled navbar ── */
const nav = document.getElementById("mainNav");
window.addEventListener("scroll", () => {
  nav.classList.toggle("scrolled", window.scrollY > 40);
});

/* ── Fade-up on scroll ── */
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) {
        e.target.style.animationPlayState = "running";
        observer.unobserve(e.target);
      }
    });
  },
  { threshold: 0.15 }
);
document.querySelectorAll(".fade-up").forEach((el) => {
  el.style.animationPlayState = "paused";
  observer.observe(el);
});

/* ── 3D tilt on headlines ── */
const MAX_TILT = 12; // degrees
const MAX_LIFT = 14; // px translateZ

document.querySelectorAll(".tilt-3d").forEach((el) => {
  const wrap = el.parentElement;
  // Set perspective on the wrapper
  wrap.style.perspective = "700px";

  el.addEventListener("mousemove", (e) => {
    const r = el.getBoundingClientRect();
    const cx = r.left + r.width / 2;
    const cy = r.top + r.height / 2;
    const dx = (e.clientX - cx) / (r.width / 2); // -1 → +1
    const dy = (e.clientY - cy) / (r.height / 2); // -1 → +1
    const rotY = dx * MAX_TILT;
    const rotX = -dy * MAX_TILT;
    el.style.transition = "transform 0.08s linear, box-shadow 0.25s ease";
    el.style.transform = `rotateX(${rotX}deg) rotateY(${rotY}deg) translateZ(${MAX_LIFT}px)`;
  });

  el.addEventListener("mouseleave", () => {
    el.style.transition =
      "transform 0.55s cubic-bezier(0.23,1,0.32,1), box-shadow 0.25s ease";
    el.style.transform = "rotateX(0deg) rotateY(0deg) translateZ(0px)";
  });
});

/* ── Testimonial modal ── */
const bsModal = new bootstrap.Modal(
  document.getElementById("testimonialModal")
);
const modalCo = document.getElementById("modal-company");
const modalPerson = document.getElementById("modal-person");
const modalQuote = document.getElementById("modal-quote");

document.querySelectorAll(".testimonial-card").forEach((card) => {
  const body = card.querySelector(".testimonial-body");
  const btn = card.querySelector(".btn-read-more");
  if (body.scrollHeight > body.clientHeight + 2) {
    btn.style.display = "inline-block";
    btn.removeAttribute("aria-hidden");
    btn.removeAttribute("tabindex");
  }
  card.addEventListener("click", () => {
    modalCo.textContent = card.dataset.company;
    modalPerson.innerHTML = `${card.dataset.name} &mdash; <span style="opacity:0.65">${card.dataset.role}</span>`;
    modalQuote.textContent = card.dataset.quote;
    bsModal.show();
  });
});