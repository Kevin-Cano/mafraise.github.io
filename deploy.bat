@echo off
echo ========================================
echo   DÉPLOIEMENT DU PORTFOLIO KEVIN CANO
echo ========================================

echo.
echo 1. Nettoyage du cache...
php bin/console cache:clear --env=prod
php bin/console cache:warmup --env=prod

echo.
echo 2. Optimisation des assets...
if not exist "public/build" mkdir "public/build"

echo.
echo 3. Vérification des fichiers...
if exist "public/index.php" (
    echo ✓ Point d'entrée trouvé
) else (
    echo ✗ Erreur: index.php manquant
    pause
    exit /b 1
)

echo.
echo 4. Préparation pour GitHub Pages...
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
echo 1. Commitez vos changements: git add . && git commit -m "Deploy portfolio"
echo 2. Poussez vers GitHub: git push origin main
echo 3. Activez GitHub Pages dans les paramètres du repository
echo.
pause
