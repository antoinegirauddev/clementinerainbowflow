// Appel de toutes les méthodes init de tous les modules

const app = {
    init: function() {
        theme.init();
    }
}

// Lancement de la fonction init après le chargement du document HTML
document.addEventListener('DOMContentLoaded', app.init);