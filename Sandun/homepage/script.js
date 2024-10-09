let currentIndex = 0;
let autoScrollInterval;

function scrollGallery(direction) {
    const gallery = document.getElementById('gallery');
    const images = gallery.getElementsByTagName('img');
    currentIndex += direction;

    if (currentIndex < 0) {
        currentIndex = images.length - 1;
    } else if (currentIndex >= images.length) {
        currentIndex = 0;
    }

    gallery.style.transform = `translateX(-${currentIndex * 100}%)`;
}

// Go to specific slide (for thumbnails)
function goToSlide(index) {
    currentIndex = index;
    scrollGallery(0);  // Refresh to the specified image
}

// Auto scroll every 5 seconds
function autoScroll() {
    autoScrollInterval = setInterval(() => {
        scrollGallery(1);
    }, 5000);
}

// Pause auto-scroll when hovering
function pauseAutoScroll() {
    clearInterval(autoScrollInterval);
}

// Resume auto-scroll when not hovering
function resumeAutoScroll() {
    autoScroll();
}

// Start the auto-scroll
autoScroll();

// Pause auto-scroll on hover
const gallery = document.getElementById('gallery');
gallery.addEventListener('mouseover', pauseAutoScroll);
gallery.addEventListener('mouseout', resumeAutoScroll);
