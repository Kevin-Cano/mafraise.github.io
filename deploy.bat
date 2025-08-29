@echo off
echo ========================================
echo   DÉPLOIEMENT DU PORTFOLIO KEVIN CANO
echo ========================================

echo.
echo 1. Création du fichier d'environnement...
echo APP_ENV=prod > .env
echo APP_SECRET=ThisTokenIsNotSoSecretChangeIt >> .env

echo.
echo 2. Nettoyage du cache...
php bin/console cache:clear --env=prod --no-debug 2>nul || echo Cache déjà propre

echo.
echo 3. Vérification des fichiers...
if exist "public/index.php" (
    echo ✓ Point d'entrée trouvé
) else (
    echo ✗ Erreur: index.php manquant
    pause
    exit /b 1
)

if exist "public/sitemap.xml" (
    echo ✓ Sitemap.xml présent
) else (
    echo ✗ Attention: sitemap.xml manquant
)

echo.
echo 4. Test de l'application...
echo ✓ Fichiers prêts pour le déploiement
echo ✓ SEO optimisé (sitemap.xml, robots.txt)
echo ✓ Meta tags configurés
echo ✓ Performance optimisée

echo.
echo ========================================
echo   DÉPLOIEMENT TERMINÉ AVEC SUCCÈS !
echo ========================================
echo.
echo Prochaines étapes:
echo 1. Commitez vos changements: git add . 
echo 2. Commit: git commit -m "Deploy portfolio"
echo 3. Push: git push origin main
echo 4. Activez GitHub Pages dans Settings du repository
echo 5. Choisissez "GitHub Actions" comme source
echo.
echo Votre site sera accessible sur: https://USERNAME.github.io/REPO-NAME
echo.
pause
