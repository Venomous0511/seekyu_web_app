import "./bootstrap";

// Home sections toggle
window.showHomeSection = function (id) {
    document.querySelectorAll(".home-section").forEach((sec) => {
        if (sec.id === id) {
            sec.classList.remove("hidden");
        } else {
            sec.classList.add("hidden");
        }
    });
};
