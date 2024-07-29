<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Formulaire de feedback pour le Service de Réparation.">
    <title>Envoyer un Feedback - Service de Réparation</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="assets/images/logo.png" alt="Service de Réparation Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="pages/about.html">À Propos</a></li>
                    <li><a href="pages/contact.html">Contact</a></li>
                    <li><a href="pages/booking.html">Réservation</a></li>
                    <li><a href="pages/client.html">Espace Client</a></li>
                    <li><a href="pages/blog.html">Blog</a></li>
                    <li><a href="pages/privacy.html">Privacy</a></li>
                    <li><a href="pages/submit-feedback.html">Submit Feedback</a></li>
                    <li><a href="pages/terms.html">Terms</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="feedback">
            <div class="container">
                <h1>Envoyer un Feedback</h1>
                <form action="#" method="post">
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                    
                    <button type="submit" class="btn-main">Envoyer</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Service de Réparation. Tous droits réservés.</p>
        </div>
    </footer>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
