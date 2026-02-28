# Utiliser l'image officielle Apache avec PHP 8.2 
FROM php:8.2-apache 
 
# Copier le site web dans le dossier de travail d'Apache 
COPY tp2/ /var/www/html/ 
 
# Activer le module mysqli pour PHP (pour MySQL) 
RUN docker-php-ext-install mysqli 
 
# Exposer le port 80 
EXPOSE 80 
 
# Commande par défaut pour démarrer Apache 
CMD ["apache2-foreground"] 