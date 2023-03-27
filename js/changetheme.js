const theme = {
    // Création de la méthode init qui permet l'initialisation et 
    // fait office également de point de démarrage du module

    init: function() {
         // Récupération des deux boutons de changement de couleur
         const themeColorButtons = document.querySelectorAll(".theme-button");

          // Pour chaque bouton, mise en place de l'écouteur (clic)
          for(const button of themeColorButtons) {
            button.addEventListener("click", theme.handleThemeColorClick);
        }
    },

    handleThemeColorClick: function(event) {

        // Feuille de style CSS utilisée
        let linkrel = document.querySelector("head link");
        let stylesheetLink = linkrel.href.split("/css/");
        let currentStylesheetLink = stylesheetLink[1];

        // Si on clique sur le bouton pour appliquer le style rainbow ET que la feuille de style appliquée est "style.css"
        if (event.currentTarget.id == "theme-rainbow" && currentStylesheetLink == "style.css") {
        // Alors on ajoute la feuille de style "rainbow_style.css" et on supprime la classe thème-dark si elle existe
                currentStylesheetLink = "rainbow_style.css";
                document.querySelector("head link").href="./css/rainbow_style.css";
                document.body.classList.remove("theme-dark");
        } else {
        //Sinon on fixe bien la feuille de style style.css en tant que feuille de style principale
                document.querySelector("head link").href="./css/style.css";
        }
       
        if (event.currentTarget.id == "theme-dark") {
        // Si on clique sur le bouton pour mettre en thème dark, alors on applique la méthode qui va changer le thème
                theme.changeColorTheme(event.currentTarget.id);
        }
    },
    
    changeColorTheme: function(theme) {
        // Grâce au toggle on ajoute la classe correspondant au thème sur le body, ou on l'enlève
        document.body.classList.toggle("theme-dark");
    }
    
}