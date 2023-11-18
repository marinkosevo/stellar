const switchers = document.querySelectorAll(".checkbox");
const mobile_open = document.getElementById("mobile-menu-open");
const mobile_close = document.getElementById("mobile-menu-close");
const mobile_menu = document.getElementById("mobile-menu");

mobile_open.addEventListener("click", () => {
  mobile_menu.style.display = "flex";
});
mobile_close.addEventListener("click", () => {
  mobile_menu.style.display = "none";
});
function applyTheme() {
  if (typeof window !== "undefined") {
    if (
      localStorage.theme === "dark" ||
      (!("theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
    ) {
      document.documentElement.classList.add("dark");
      switchers.forEach( switcher => {
        switcher.checked = true;
      })
    } else {
      document.documentElement.classList.remove("dark");
      switchers.forEach( switcher => {
        switcher.checked = false;
      })
    }
  }
}
switchers.forEach( switcher => {
  switcher.addEventListener("change", () => {
    if (switcher.checked) {
      document.documentElement.classList.add("dark");
      localStorage.setItem("theme", "dark");
    } else {
      document.documentElement.classList.remove("dark");
      localStorage.setItem("theme", "light");
    }
  });
})

applyTheme();
