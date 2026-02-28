# TP Docker – Application Web PHP / MySQL

Ce projet est une application web simple qui affiche une liste de produits. Il est conteneurisé avec Docker et utilise Docker Compose pour orchestrer les services backend (PHP/Apache) et base de données (MySQL).

## Description

L'application se compose de deux parties principales :
- **Backend** : serveur Apache avec PHP 8.2, exposant une page `index.html` et des scripts PHP (`api.php`, `config.php`) pour interagir avec la base de données.
- **Frontend** : feuille de style CSS (`style.css`) pour la présentation des données.
- **Base de données** : MySQL 8.0, dont les données sont persistées via un volume Docker.

Le tout est défini et lancé à l'aide d'un fichier `docker-compose.yml`.

## Aperçu des captures d'écran partagées

Les images suivantes illustrent la structure et le fonctionnement du projet :

1. **`Capture d’écran 2026-02-28 162804.png`**  
   Aperçu de l’arborescence du projet et extrait du fichier `docker-compose.yml` (version 3.8, service `web` avec build, ports, dépendance `db`).

2. **`Capture d’écran 2026-02-28 162913.png`**  
   Contenu du `Dockerfile` pour le backend : image de base `php:8.2-apache`, copie des sources, installation de l’extension `mysql`, exposition du port 80.

3. **`Capture d’écran 2026-02-28 162947.png`**  
   Interface Docker Desktop montrant les images construites : `tp_backend-web` (récemment créée), `mysql:8.0`, `tp1`, etc.

4. **`Capture d’écran 2026-02-28 163019.png`**  
   Rendu de la page web affichant la liste des produits (ID, Nom, Prix, Quantité), preuve que l'application fonctionne correctement.

## Structure du projet
.
├── tp_backend/
│ ├── Dockerfile
│ ├── api.php
│ ├── config.php
│ └── index.html
├── tp_frontend/
│ ├── tp1/ (dossier optionnel, contient probablement d'autres ressources)
│ └── style.css
├── docker-compose.yml
└── README.md

text

- `tp_backend/` : contient le code PHP et le `Dockerfile` pour construire l'image du serveur web.
- `tp_frontend/` : contient les fichiers statiques (CSS) côté client.
- `docker-compose.yml` : décrit les services (`web`, `db`) et les volumes nécessaires.

## Prérequis

- [Docker](https://www.docker.com/products/docker-desktop) (version 20.10 ou supérieure)
- [Docker Compose](https://docs.docker.com/compose/) (généralement inclus avec Docker Desktop)

## Installation et exécution

1. **Cloner le dépôt** (ou placer les fichiers dans un répertoire de travail).
2. **Lancer les services** avec Docker Compose :
   ```bash
   docker-compose up -d
Cette commande construit l'image du backend (si elle n'existe pas déjà) et démarre les conteneurs web et db en arrière-plan.

Vérifier que les conteneurs tournent :

bash
docker-compose ps
Accès à l'application
Une fois les services démarrés, ouvrez un navigateur et rendez-vous à l'adresse :

text
http://localhost:8080
Vous devriez voir la liste des produits (identique à la dernière capture d'écran). La page est servie par Apache depuis le conteneur web.
