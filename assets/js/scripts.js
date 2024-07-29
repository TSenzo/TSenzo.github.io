document.addEventListener('DOMContentLoaded', function() {
    console.log('Page chargée et prête.');

    // Animation au scroll pour les éléments visibles
    const items = document.querySelectorAll('.service-item, .testimonial-item');

    // Fonction pour vérifier si un élément est dans la fenêtre de visualisation
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Fonction pour ajouter la classe d'animation aux éléments visibles
    function checkAnimation() {
        items.forEach(item => {
            if (isInViewport(item) && !item.classList.contains('animated')) {
                item.classList.add('animated');
            }
        });
    }

    // Debounce function to limit the rate of the checkAnimation calls
    function debounce(func, wait) {
        let timeout;
        return function(...args) {
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(this, args), wait);
        };
    }

    // Ajouter le gestionnaire d'événements pour le défilement
    window.addEventListener('scroll', debounce(checkAnimation, 100));

    // Vérifier les éléments visibles lors du chargement initial de la page
    checkAnimation();
});
