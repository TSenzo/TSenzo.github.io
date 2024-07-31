// Exemple d'interaction JavaScript
document.addEventListener('DOMContentLoaded', function() {
    console.log('Page chargée et prête.');

    // Exemple d'animation au scroll
    const items = document.querySelectorAll('.service-item, .testimonial-item, .why-us-item');

    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function checkAnimation() {
        items.forEach(item => {
            if (isInViewport(item)) {
                item.classList.add('animated');
            }
        });
    }

    window.addEventListener('scroll', checkAnimation);
    checkAnimation();
});
