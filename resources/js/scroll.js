document.addEventListener("DOMContentLoaded", function () {
    const scrollable = document.getElementById("scrollable");
    const nextBtn = document.getElementById("nextBtn");
    const prevBtn = document.getElementById("prevBtn");
    const scrollAmount = 250;

    if (!scrollable || !nextBtn || !prevBtn) return;

    const updateButtons = () => {
        // Mentok kiri?
        if (scrollable.scrollLeft <= 0) {
            prevBtn.disabled = true;
            prevBtn.classList.add("opacity-50", "cursor-not-allowed");
        } else {
            prevBtn.disabled = false;
            prevBtn.classList.remove("opacity-50", "cursor-not-allowed");
        }

        // Mentok kanan?
        if (
            scrollable.scrollLeft + scrollable.clientWidth >=
            scrollable.scrollWidth - 1
        ) {
            nextBtn.disabled = true;
            nextBtn.classList.add("opacity-50", "cursor-not-allowed");
        } else {
            nextBtn.disabled = false;
            nextBtn.classList.remove("opacity-50", "cursor-not-allowed");
        }
    };

    // Scroll saat klik
    nextBtn.addEventListener("click", () => {
        scrollable.scrollBy({ left: scrollAmount, behavior: "smooth" });
    });

    prevBtn.addEventListener("click", () => {
        scrollable.scrollBy({ left: -scrollAmount, behavior: "smooth" });
    });

    // Update tombol setiap kali scroll selesai
    scrollable.addEventListener("scroll", updateButtons);

    // Update tombol saat pertama kali halaman load
    updateButtons();
});
