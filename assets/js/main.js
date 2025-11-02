document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.getElementById("darkModeToggle");
  const body = document.body;
  const icon = toggle.querySelector("i");

  // Apply saved theme
  if (localStorage.getItem("theme") === "dark") {
    body.classList.add("dark-mode");
    icon.classList.replace("fa-moon", "fa-sun");
  }

  // Toggle mode
  toggle.addEventListener("click", () => {
    body.classList.toggle("dark-mode");
    const isDark = body.classList.contains("dark-mode");
    icon.classList.toggle("fa-moon");
    icon.classList.toggle("fa-sun");
    localStorage.setItem("theme", isDark ? "dark" : "light");
  });
});
