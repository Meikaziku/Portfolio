
document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("menuBtn");
    const menu = document.getElementById("mobileMenu");

    btn.addEventListener("click", () => {
        if (menu.classList.contains("opacity-0")) {
            menu.classList.remove("opacity-0", "translate-y-2", "pointer-events-none");
            menu.classList.add("opacity-100", "translate-y-0");
        } else {
            menu.classList.add("opacity-0", "translate-y-2", "pointer-events-none");
            menu.classList.remove("opacity-100", "translate-y-0");
        }
    });
});