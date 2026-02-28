# Étape 1 : Choisir l'image de base 
FROM httpd:2.4 
 
# Étape 2 : Copier les fichiers du site web dans le conteneur 
# Ici, on suppose que votre site est dans le dossier "tp1" 
COPY tp1/ /usr/local/apache2/htdocs/
 
# Étape 3 : Exposer le port 80 pour accéder au serveur Apache 
EXPOSE 80 
 
# Étape 4 : (Optionnel) Ajouter un message de démarrage personnalisé 
#la commande qui exécute wamps dans lunix
CMD ["httpd-foreground"] 