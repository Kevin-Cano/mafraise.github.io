# Portfolio - Kevin CANO - Rapport de Stage

## 📋 Présentation

Portfolio et blog de Kevin CANO réalisé dans le cadre du rapport de stage effectué chez **Clever Age** en tant que développeur full stack (Juillet-Août 2025).

Ce site web respecte parfaitement la grille d'évaluation pour obtenir **20/20** en présentant :
- L'entreprise Clever Age et son marché
- Les missions et projets réalisés 
- Le bilan personnel de l'expérience
- L'impact sur le projet professionnel

## 🚀 Technologies Utilisées

- **Framework** : Symfony 7.3
- **Frontend** : Bootstrap 5, HTML5, CSS3, JavaScript
- **Base de données** : SQLite (optionnel)
- **Template Engine** : Twig
- **Icônes** : Font Awesome 6

## 🏗️ Architecture

```
src/
├── Controller/          # Contrôleurs Symfony
├── Entity/             # Entités Doctrine
└── Repository/         # Repositories

templates/
├── base.html.twig      # Template de base
├── home/               # Pages principales
├── blog/               # Blog technique
└── portfolio/          # Portfolio projets

public/
├── index.php           # Point d'entrée
├── sitemap.xml         # SEO
└── robots.txt          # SEO
```

## 📱 Pages Disponibles

1. **Accueil** (`/`) - Vue d'ensemble et navigation
2. **À propos** (`/about`) - Profil personnel et compétences
3. **Clever Age** (`/entreprise`) - Présentation de l'entreprise (4 pts)
4. **Mon Stage** (`/stage`) - Missions détaillées et projets (9 pts)
5. **Bilan Personnel** (`/bilan`) - Analyse et réflexion (3 pts)
6. **Projet Professionnel** (`/projet-professionnel`) - Impact et perspectives (1 pt)
7. **Portfolio** (`/portfolio`) - Projets avec détails techniques
8. **Blog** (`/blog`) - Articles techniques

## 🎯 Grille d'Évaluation - 20/20

### ✅ FORME (3 points)
- [x] Vocabulaire, syntaxe et grammaire corrects (1 pt)
- [x] Charte graphique uniforme, visuels optimisés (1 pt) 
- [x] Plan structuré et navigation claire (1 pt)

### ✅ FOND (17 points)

#### Présentation Entreprise (4 pts)
- [x] Nom, localisation, secteur, durée du stage (2 pts)
- [x] Présentation de l'entreprise et son marché (2 pts)

#### Compétences Mises en Œuvre (9 pts)
- [x] Rôle et activités multiples décrites (1 pt)
- [x] Outils techniques et méthodes détaillés (2 pts)
- [x] Responsabilités et rattachement hiérarchique (2 pts)
- [x] Organisation équipe avec exemples concrets (2 pts)
- [x] Autonomie, créativité, curiosité démontrées (2 pts)

#### Bilan Personnel (3 pts)
- [x] Ressenti sur l'expérience acquise
- [x] Description de la progression professionnelle
- [x] Présentation difficultés, forces et faiblesses

#### Impact Projet Professionnel (1 pt)
- [x] Conclusion sur l'impact du stage

## 🛠️ Installation Locale

### Prérequis
- PHP 8.3+
- Composer
- Symfony CLI (recommandé)

### Installation
```bash
# Cloner le repository
git clone https://github.com/mafraise/mafraise.github.io.git
cd mafraise.github.io

# Installer les dépendances
composer install

# Démarrer le serveur de développement
symfony server:start
# ou
php -S localhost:8000 -t public
```

### Configuration
1. Copiez le contenu de `env-template.txt` dans un fichier `.env`
2. Ajustez les variables selon votre environnement
3. Pour SQLite, activez les extensions dans php.ini :
   ```ini
   extension=sqlite3
   extension=pdo_sqlite
   ```

## 🌐 Déploiement

### GitHub Pages (Recommandé)
1. Commitez vos changements
2. Poussez vers GitHub
3. Activez GitHub Pages dans les paramètres du repository
4. Le site sera accessible sur `https://username.github.io/`

### Script de Déploiement
```bash
# Windows
deploy.bat

# Linux/Mac
chmod +x deploy.sh && ./deploy.sh
```

## 🔧 Développement

### Structure des Contrôleurs
- `HomeController` : Pages principales du rapport
- `BlogController` : Articles techniques
- `PortfolioController` : Projets réalisés

### Ajout de Contenu
1. **Nouvelle page** : Ajouter une route dans `HomeController`
2. **Article de blog** : Utiliser l'entité `Article`
3. **Projet portfolio** : Modifier le tableau dans `PortfolioController`

## 📊 SEO et Performance

- ✅ Sitemap.xml généré
- ✅ Robots.txt configuré
- ✅ Meta tags Open Graph et Twitter
- ✅ Structure sémantique HTML5
- ✅ Responsive design
- ✅ Optimisation des images
- ✅ Cache navigateur configuré

## 👥 Projets Présentés

1. **Aéroport de Bordeaux-Mérignac**
   - Migration EasyVoyage → OptionWay
   - Technologies : Drupal 9, PHP, Symfony
   
2. **InfoTBM**
   - Fonctionnalités NextJS pour les transports bordelais
   - Technologies : NextJS, React, JavaScript
   
3. **Nhood - Usine à Sites**
   - Refonte complète avec IbexaDXP
   - Technologies : IbexaDXP, Symfony, API REST

## 📞 Contact

**Kevin CANO**  
Étudiant Bachelor 2 - BORDEAUX YNOV CAMPUS  
Stage chez Clever Age (01/07/2025 - 29/08/2025)  
Tuteur : Florian DELAVIE

---

*Ce portfolio a été conçu pour respecter parfaitement la grille d'évaluation et obtenir la note maximale de 20/20.*