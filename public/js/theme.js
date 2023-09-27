// Fonction pour définir le thème actuel dans le stockage local
function setTheme(theme) {
    localStorage.setItem('theme', theme);
}

// Fonction pour récupérer le thème actuel depuis le stockage local
function getTheme() {
    return localStorage.getItem('theme') || 'bootstrap.css'; // Thème par défaut
}

// Charger le thème actuel lors de la première visite de la page
var currentTheme = getTheme();
var link1 = document.getElementById('theme1');
link1.href = 'css/' + currentTheme; // Assurez-vous que le chemin est correct

document.getElementById('changer-theme').addEventListener('click', function () {
    var newTheme = '';
    // Logique pour basculer entre les thèmes
    switch (currentTheme) {
        case 'bootstrap.css':
            newTheme = 'bootstrap1.min.css';
            break;
        case 'bootstrap1.min.css':
            newTheme = 'bootstrap.css';
            break;
        default:
            newTheme = 'bootstrap.css';
            break;
    }
    link1.href = 'css/' + newTheme; // Assurez-vous que le chemin est correct
    setTheme(newTheme); // Enregistrez le thème actuel dans le stockage local
    currentTheme = newTheme;
});
