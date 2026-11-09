document.addEventListener("DOMContentLoaded", function () {
  document.body.classList.add("page-ready");
  const btn = document.querySelector(".menu-btn");
  const menu = document.querySelector(".menu");
  if (btn && menu) {
    btn.addEventListener("click", function () {
      const open = menu.classList.toggle("open");
      btn.setAttribute("aria-expanded", open ? "true" : "false");
    });
    menu.querySelectorAll("a").forEach(a => a.addEventListener("click", () => menu.classList.remove("open")));
  }

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
        observer.unobserve(entry.target);
      }
    });
  }, {threshold: 0.12});

  document.querySelectorAll(".reveal").forEach(el => observer.observe(el));

  document.querySelectorAll(".amounts button").forEach(button => {
    button.addEventListener("click", function () {
      document.querySelectorAll(".amounts button").forEach(b => b.classList.remove("selected"));
      button.classList.add("selected");
      const input = document.getElementById("amount");
      if (input) input.value = button.dataset.amount;
    });
  });

  const copy = document.querySelector(".copy-account");
  if (copy) {
    copy.addEventListener("click", async function () {
      try {
        await navigator.clipboard.writeText(copy.dataset.copy);
        copy.textContent = "Copied ✓";
        setTimeout(() => copy.textContent = "Copy Account Number", 1800);
      } catch (e) {
        alert("Account Number: " + copy.dataset.copy);
      }
    });
  }
});

function donationNotice() {
  const toast = document.getElementById("toast");
  if (!toast) return;
  toast.classList.add("show");
  setTimeout(() => toast.classList.remove("show"), 4200);
}