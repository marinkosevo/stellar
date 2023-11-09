const checkbox = document.getElementById("checkbox");

function applyTheme() {
  if (typeof window !== "undefined") {
    if (
      localStorage.theme === "dark" ||
      (!("theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
    ) {
      document.documentElement.classList.add("dark");
      checkbox.checked = true;
    } else {
      document.documentElement.classList.remove("dark");
      checkbox.checked = false;
    }
  }
}

checkbox.addEventListener("change", () => {
  if (checkbox.checked) {
    document.documentElement.classList.add("dark");
    localStorage.setItem("theme", "dark");
  } else {
    document.documentElement.classList.remove("dark");
    localStorage.setItem("theme", "light");
  }
});

applyTheme(); // Poziv funkcije za primjenu teme prilikom učitavanja stranice
document.addEventListener("DOMContentLoaded", function () {
  var mobileMenuToggle = document.getElementById('mobile-menu-toggle');
  var mobileMenu = document.getElementById('mobile-menu');
  var mobileMenuClose = document.getElementById('mobile-menu-close');  // Dodaj novi gumb za zatvaranje

  mobileMenuToggle.addEventListener('click', function () {
      mobileMenu.classList.toggle('hidden');
  });

  mobileMenuClose.addEventListener('click', function () {
      mobileMenu.classList.add('hidden');
  });
});